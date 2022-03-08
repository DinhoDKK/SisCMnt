<?php
require_once '../../database/conectaBD.php';

session_start();

if (empty($_SESSION)) {
  // Significa que as variáveis de SESSAO não foram definidas.
  // Não poderia acessar aqui.
  header("Location: ../../index.php?msgErro=Você precisa se autenticar no sistema.");
  die();
}

/*
//echo "Estou logado";
echo '<pre>';
print_r($_SESSION);
print_r($_GET);
echo '</pre>';
die();
*/

$result = array();

// Verificar se está chegando a informação (id_anuncio) pelo $_GET
if (!empty($_SESSION)) {

    // Buscar as informações do anúncio a ser alterado (no banco de dados)
  $sql = "SELECT * FROM usuarios WHERE identidade = :identidade AND id = :id";
  try {
    $stmt = $pdo->prepare($sql);

    $stmt->execute(array(':identidade' => $_SESSION['identidade'],
                          ':nome'  => $_SESSION['nome'],
                          ':email'  => $_SESSION['email'], 
                          ':nomeguerra' => $_SESSION['nomeguerra'], 
                          ':perfil' => $_SESSION['perfil'],));

    // Verificar se o usuário logado pode acessar/alterar as informações desse registro (id_anuncio)
    if ($stmt->rowCount() == 1) {
      // Registro obtido no banco de dados
      $result = $stmt->fetchAll();
      $result = $result[0]; // Informações do registro a ser alterado

      $_SESSION['nome'] = $result['nome'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['identidade'] = $result['identidade'];
      $_SESSION['nomeguerra'] = $result['nomeguerra'];
      $_SESSION['perfil'] = $result['perfil'];

      /*
      echo '<pre>';
      print_r($result);
      echo '</pre>';
      */
      //die();

    }
    else {
      //die("Não foi encontrado nenhum registro para id_anuncio = " . $_GET['id_anuncio'] . " e e-mail = " . $_SESSION['email']);
      header("Location: index_encmat.php?msgErro=Você não tem permissão para acessar esta página");
      die();
    }

  } catch (PDOException $e) {
    header("Location: index_encmat.php?msgErro=Falha ao obter registro no banco de dados.");
    //die($e->getMessage());

  }
}
else {
  // Se entrar aqui, significa que $_GET['id_anuncio'] está vazio
  header("Location: index_logado.php?msgErro=Você não tem permissão para acessar esta página");
  die();
}

  // Redirecionar (permissão)

?>

<!DOCTYPE html>
<html>
  <head>
  <title>SisCMnt</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <body>
  
    <div class="container">
      <h3>Alterar a Senha</h3>
      <form action="processa_usuario.php" method="post">

        <div class="row">

        <div class="col-md-6">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $result['nome']; ?>" readonly>
            </div>

            <div class="col-4">
            <label for="nomeGuerra">Nome de Guerra</label>
            <input type="text" name="nomeGuerra" id="nomeGuerra" class="form-control" value="<?php echo $result['nomeguerra']; ?>" readonly>
            </div>

            <div class="col-md-4">
            <label for="posto">Posto / Graduação</label>
            <input type="text" name="posto" id="posto" class="form-control" readonly>
            </div>

            <div class="col-md-6">
                    <label for="perfil" class="form-label">Perfil</label>
                    <select id="perfil" name="perfil" class="form-select" value="<?php echo $result['perfil']; ?>" readonly>
                    <option selected>Fiscal Administrativo</option>
                    <option selected>Encarregado de Material</option>
                    <option selected>Encarregado da Garagem</option>
                    <option selected>Aux. Cl VII</option>
                    <option selected>Aux. Cl V</option>
                    </select>
                </div>

            <div class="col-md-4">
            <label for="identidade">Identidade</label>
            <input type="number" name="identidade" id="identidade" class="form-control" value="999999-9" value="<?php echo $result['identidade']; ?>" readonly>
            </div>

            <div class="col-md-6">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $result['email']; ?>" readonly>
            </div>

            <div class="col-md-5">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" value="<?php echo $result['senha']; ?>">
            </div>

            <div class="col-md-5">
            <label for="senha">Digite a senha novamente</label>
            <input type="password" name="senha" id="senha" class="form-control" value="<?php echo $result['senha']; ?>">
            </div>

        </div>

        <button type="submit" name="enviarDados" class="btn btn-primary" value="ALT">Alterar</button>
        <a href="../../../index.php" class="btn btn-danger">Cancelar</a>


      </form>
    </div>
  </body>
</html>
