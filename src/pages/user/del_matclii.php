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
if (!empty($_GET['id_matclii'])) {

    // Buscar as informações do anúncio a ser alterado (no banco de dados)
  $sql = "SELECT * FROM matclii WHERE identidade_usuario = :identidade AND id_matclii = :id_matclii";
  try {
    $stmt = $pdo->prepare($sql);

    $stmt->execute(array(':identidade' => $_SESSION['identidade'], ':id_matclii' => $_GET['id_matclii']));

    // Verificar se o usuário logado pode acessar/alterar as informações desse registro (id_anuncio)
    if ($stmt->rowCount() == 1) {
      // Registro obtido no banco de dados
      $result = $stmt->fetchAll();
      $result = $result[0]; // Informações do registro a ser alterado

       /*
      echo '<pre>';
      print_r($result);
      echo '</pre>';
      die();
      */

    }
    else {
      //die("Não foi encontrado nenhum registro para id_anuncio = " . $_GET['id_anuncio'] . " e e-mail = " . $_SESSION['email']);
      header("Location: atl_disp_clii.php?msgErro=Você não tem permissão para acessar esta página");
      die();
    }

  } catch (PDOException $e) {
    header("Location: atl_disp_clii.php?msgErro=Falha ao obter registro no banco de dados.");
    die($e->getMessage());
    echo $e;
  }
}
else {
  // Se entrar aqui, significa que $_GET['id_anuncio'] está vazio
  header("Location: atl_disp_clii.php?msgErro=Você não tem permissão para acessar esta página");
  die();
}

  // Redirecionar (permissão)

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deletar material</title>
    <link rel="stylesheet" href="../../../css/style.css">
   <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
</head>

  <body>
    <div class="container">
      <h1>Alterar Material</h1>
      <form action="processa_matclii.php" method="post">
        <div class="col-4">
          <label for="id_matclii">ID</label>
          <input type="text" class="form-control" name="id_matclii" id="id_matclii" value="<?php echo $result['id_matclii']; ?>" readonly>
        </div>

        <div class="col-md-4">
              <label for="numFicha" class="form-label">Nº da Ficha</label>
              <input type="number" class="form-control" id="numFicha" name="numFicha"
              value="<?php echo $result['numficha'] ?>" readonly>
            </div>

        <div class="col-md-6">
               <label for="nome" class="form-label">Nomenclatura</label>
              <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $result['nome'] ?>" readonly>
        </div>

        <div class="col-md-4">
                <label for="clMat" class="form-label">Classe do Material</label>
                <select id="clMat" name="clMat" class="form-select">
                  <option selected disabled>CL II</option>
                </select>
        </div>

        <div class="col-md-6">
                <label for="tipo" class="form-label">Tipo de Material</label>
                <select id="tipo" name="tipo" class="form-select" disabled>
                  <option
                  <?php if ($result['tipo'] == 'Barracas') {
                  echo "selected";
                   } ?>>Barracas</option>

                  <option
                  <?php if ($result['tipo'] == 'Cinto') {
                  echo "selected";
                   } ?>> Cinto</option>

                  <option 
                  <?php if ($result['tipo'] == 'Suspensorio') {
                  echo "selected";
                   } ?>>Suspensorio</option>

                  <option 
                  <?php if ($result['tipo'] == 'Mochilas') {
                  echo "selected";
                   } ?>>Mochilas</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="disponibilidade" class="form-label">Disponibilidade</label>
                <select id="disponibilidade" name="disponibilidade" class="form-select" disabled>
                  <option 
                  <?php if ($result['disponibilidade'] == 'Disponivel') {
                  echo "selected";
                   } ?>>Disponivel</option>
                  <option
                  <?php if ($result['disponibilidade'] == 'Indisponivel') {
                  echo "selected";
                   } ?>>Indisponivel</option>
                  <option
                  <?php if ($result['disponibilidade'] == 'Disponivel com restrição') {
                  echo "selected";
                   } ?>>Disponivel com restrição</option>
                </select>
            </div>

            <div class="col-md-4">
              <label for="dataIndisponibilidade" class="form-label">Data (Início da indisponibilidade)</label>
              <input type="date" class="form-control" id="dataIndisponibilidade" name="dataIndisponibilidade"
              value="<?php echo $result['dataindisponibilidade'] ?>" readonly>
            </div>

            <div class="col-md-10">
              <label for="motivo" class="form-label">Motivo da indisponibilidade</label>
              <textarea class="form-control" id="motivo" name="motivo" rows="5" cols="50" readonly><?php echo $result['motivo'] ?>
            </textarea>
            </div>

        <br />
        <br />

        <button type="submit" name="enviarDados" class="btn btn-primary" value="DEL">Apagar</button>
        <a href="atl_disp_clii.php" class="btn btn-danger">Cancelar</a>

      </form>
    </div>
  </body>
</html>
