<?php
require_once '../../database/conectaBD.php';
session_start();

if (empty($_SESSION)) {
  // Significa que as variáveis de SESSAO não foram definidas.
  // Não poderia acessar aqui.
  header("Location: ../../index.php?msgErro=Você precisa se autenticar no sistema.");
  die();
}

$materiais = array();

if (!empty($_GET['meus_materiais']) && $_GET['meus_materiais'] == 1) {
    // Obter somente os materiais cadastrados pelo(a) usuário(a) logado(a).
    $sql = "SELECT * FROM descarga WHERE identidade_usuario = :identidade ORDER BY id_mat ASC";
    $dados = array(':identidade' => $_SESSION['identidade']);
  
    try {
      $stmt = $pdo->prepare($sql);
  
      if ($stmt->execute($dados)) {
        // Execução da SQL Ok!!
        $materiais = $stmt->fetchAll();
      }
      else {
        die("Falha ao executar a SQL.. #1");
      }
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  } else {
    $sql = "SELECT * FROM descarga ORDER BY id_mat ASC";
    try {
      $stmt = $pdo->prepare($sql);
      if ($stmt->execute()) {
        // Execução da SQL Ok!!
        $materiais = $stmt->fetchAll();
  
        /*
        echo '<pre>';
        print_r($anuncios);
        echo '</pre>';
        die();
        */
      }
      else {
        die("Falha ao executar a SQL.. #2");
      }
  
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

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
    crossorigin="anonymous">
  </script>
  <style>
    .form {
      margin: auto;
      padding: 5%;
    }
  </style>


<body>
  
<div class="container">
              <?php if (!empty($_GET['msgErro'])) { ?>
              <div class="alert alert-warning" role="alert">
              <?php echo $_GET['msgErro']; ?>
                </div>
              <?php } ?>

              <?php if (!empty($_GET['msgSucesso'])) { ?>
                <div class="alert alert-success" role="alert">
              <?php echo $_GET['msgSucesso']; ?>
                </div>
              <?php } ?>
            </div>
   
    <?php if (!empty($materiais)) { ?>

         <!-- Aqui que será montada a tabela com a relação de materiais!! -->
      <div class="container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Classe</th>
              <th scope="col">Tipo de material</th>
              <th scope="col">Nº da Ficha</th>
              <th scope="col">Nomenclatura</th>
              <th scope="col">Disponibilidade</th>
              <th scope="col">Motivo da descarga</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($materiais as $a) { ?>
              <tr>
                <th scope="row"><?php echo $a['id_mat']; ?></th>
                <td><?php echo $a['clmat']; ?></td>
                <td><?php echo $a['tipo']; ?></td>
                <td><?php echo $a['numficha']; ?></td>
                <td><?php echo $a['nome']; ?></td>
                <td><?php echo $a['disponibilidade']; ?></td>        
                <td><?php echo $a['motivodescarga']; ?></td>
                <td>
                  <?php if ($a['identidade_usuario'] == $_SESSION['identidade']) { ?>
                    <a href="alt_matclii.php?id_mat=<?php echo $a['id_mat']; ?>" class="btn btn-warning">Alterar</a>
                    <a href="del_matclii.php?id_matc=<?php echo $a['id_mat']; ?>" class="btn btn-danger">Excluir</a>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    <?php } ?>
   
</body>
</html>