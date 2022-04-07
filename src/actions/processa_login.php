<?php
require_once '../../src/database/conectaBD.php';
// Conectar ao BD (com o PHP)

// Verificar se está chegando dados por POST
if (!empty($_POST)) {
  // Iniciar SESSAO (session_start)
  session_start();
  try {
    // Montar a SQL
    $sql = "SELECT * FROM usuarios WHERE identidade = :identidade AND senha = :senha";

    // Preparar a SQL (pdo)
    $stmt = $pdo->prepare($sql);

    // Definir/Organizar os dados p/ SQL
    $dados = array(
      ':identidade' => $_POST['identidade'],
      ':senha' => md5($_POST['senha'])
    );

    $stmt->execute($dados);
    //$stmt->execute(array(':email' => $_POST['email'], ':senha' => $_POST['senha']));

    $result = $stmt->fetchAll();

    if ($stmt->rowCount() == 1) { // Se o resultado da consulta SQL trouxer um registro
      // Autenticação foi realizada com sucesso

      $result = $result[0];
      // Definir as variáveis de sessão
      $_SESSION['nome'] = $result['nome'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['identidade'] = $result['identidade'];
      $_SESSION['nomeguerra'] = $result['nomeguerra'];
      $_SESSION['posto'] = $result['posto'];
      $_SESSION['perfil'] = $result['perfil'];

      // Redirecionar p/ página inicial (ambiente logado)
    if ($_SESSION['perfil'] == "Fiscal Administrativo"){
      header("Location: ../../src/actions/index_fisc.php");
    }
    if ($_SESSION['perfil'] == "Encarregado de Material"){
      header("Location: ../../src/actions/index_encmat.php");
    }
      //header("Location: ../../src/actions/index_logado.php");

    } else { // Signifca que o resultado da consulta SQL não trouxe nenhum registro
      // Falha na autenticaçao
      // Destruir a SESSAO
      session_destroy();
      // Redirecionar p/ página inicial (login)
      header("Location: ../../index.php?msgErro=E-mail e/ou Senha inválido(s).");
    }
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}
else {
  header("Location: ../../index.php?msgErro=Você não tem permissão para acessar esta página..");
}
die();
?>
