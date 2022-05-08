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
    $sql = "SELECT * FROM matclii WHERE identidade_usuario = :identidade ORDER BY id_matclii ASC";
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
    $sql = "SELECT * FROM matclii ORDER BY id_matclii ASC";
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
  <link rel="stylesheet" href="../../../css/style.css">
  <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
</head>



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
         <div class="tabelas">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nº da Ficha</th>
              <th scope="col">Nomenclatura</th>
              <th scope="col">Classe do Material</th>
              <th scope="col">Tipo de Material</th>
              <th scope="col">Disponibilidade</th>
              <th scope="col">Data (Início da indisponibilidade)</th>
              <th scope="col">Motivo da indisponibilidade</th>
              <th scope="col">Em manutenção</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($materiais as $a) { ?>
              <tr>
                <th scope="row"><?php echo $a['id_matclii']; ?></th>
                <td><?php echo $a['numficha']; ?></td>
                <td><?php echo $a['nome']; ?></td>
                <td><?php echo $a['clmat']; ?></td>
                <td><?php echo $a['tipo']; ?></td>
                <td><?php echo $a['disponibilidade']; ?></td>
                <td><?php echo $a['dataindisponibilidade']; ?></td>
                <td><?php echo $a['motivo']; ?></td>
                <td><?php echo $a['matmnt']; ?></td>
                <td>
                  <?php if ($a['identidade_usuario'] == $_SESSION['identidade']) { ?>
                    <a href="alt_matclii.php?id_matclii=<?php echo $a['id_matclii']; ?>" class="btn btn-warning">Alterar</a>
                    <a href="del_matclii.php?id_matclii=<?php echo $a['id_matclii']; ?>" class="btn btn-danger">Excluir</a>
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