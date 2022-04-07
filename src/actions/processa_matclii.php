<?php
require_once '../../src/database/conectaBD.php';
// Definir o BD (e a tabela)
// Conectar ao BD (com o PHP)

session_start();

if (empty($_SESSION)) {
  // Significa que as variáveis de SESSAO não foram definidas.
  // Não poderia acessar aqui.
  header("Location: index.php?msgErro=Você precisa se autenticar no sistema.");
  die();
}

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
die();
*/

if (!empty($_POST)) {
  // Está chegando dados por POST e então posso tentar inserir no banco
  // Obter as informações do formulário ($_POST)
  // Verificar se estou tentando INSERIR (CAD) / ALTERAR (ALT) / EXCLUIR (DEL)
  if ($_POST['enviarDados'] == 'CAD') { // CADASTRAR!!!
    try {
      // Preparar as informações
        // Montar a SQL (pgsql)
        $sql = "INSERT INTO matclii
                  (numficha, nome, clmat, tipo, disponibilidade, dataindisponibilidade, matmnt,
                  locmnt, ommnt, dataini, datafim, motivo, identidade_usuario)
                VALUES
                  (:numficha, :nome, :clmat, :tipo, :disponibilidade, :dataindisponibilidade,
                  :matmnt, :locmnt, :ommnt, :dataini, :datafim, :motivo, :identidade_usuario)";

        // Preparar a SQL (pdo)
        $stmt = $pdo->prepare($sql);

        // Definir/organizar os dados p/ SQL
        $dados = array(
          ':numficha' => $_POST['numFicha'],
          ':nome' => $_POST['nome'],
          ':clmat' => $_POST['clMat'],
          ':tipo' => $_POST['tipo'],
          ':disponibilidade' => $_POST['disponibilidade'],
          ':dataindisponibilidade' => $_POST['dataIndisponibilidade'],
          ':matmnt' => $_POST['matmnt'],
          ':locmnt' => $_POST['locmnt'],
          ':ommnt' => $_POST['ommnt'],
          ':dataini' => $_POST['dataini'],
          ':datafim' => $_POST['datafim'],
          ':motivo' => $_POST['motivo'],
          ':identidade_usuario' => $_SESSION['identidade']

        );

        // Tentar Executar a SQL (INSERT)
        // Realizar a inserção das informações no BD (com o PHP)
        if ($stmt->execute($dados)) {
          header("Location: ../pages/user/cad_clii.php?msgSucesso=Material cadastrado com sucesso!");
        }
    } catch (PDOException $e) {
        die($e->getMessage());
        header("Location: ../pages/user/cad_clii.php?msgErro=Falha ao cadastrar material..");
    }
  }
  
  if ($_POST['enviarDados'] == 'CADDESC') { // CADASTRAR!!!
    try {
      // Preparar as informações
        // Montar a SQL (pgsql)
        $sql = "INSERT INTO descarga
                  (numficha, nome, clmat, tipo, disponibilidade, motivodescarga, identidade_usuario)
                VALUES
                  (:numficha, :nome, :clmat, :tipo, :disponibilidade, :motivodescarga, :identidade_usuario)";

        // Preparar a SQL (pdo)
        $stmt = $pdo->prepare($sql);

        // Definir/organizar os dados p/ SQL
        $dados = array(
          ':numficha' => $_POST['numFicha'],
          ':nome' => $_POST['nome'],
          ':clmat' => $_POST['clMat'],
          ':tipo' => $_POST['tipo'],
          ':disponibilidade' => $_POST['disponibilidade'],
          ':motivodescarga' => $_POST['motivodescarga'],
          ':identidade_usuario' => $_SESSION['identidade']

        );

        // Tentar Executar a SQL (INSERT)
        // Realizar a inserção das informações no BD (com o PHP)
        if ($stmt->execute($dados)) {
          header("Location: ../pages/user/cad_clii.php?msgSucesso=Pedido cadastrado com sucesso!");
        }
    } catch (PDOException $e) {
        die($e->getMessage());
        header("Location: ../pages/user/cad_clii.php?msgErro=Falha ao cadastrar pedido..");
    }
  }

  elseif ($_POST['enviarDados'] == 'ALT') { // ALTERAR!!!
    /* Implementação do update aqui.. */
    // Construir SQL para update
    try {
      $sql = "UPDATE
                matclii
              SET
                numFicha = :numficha,
                nome = :nome,
                clMat = :clmat,
                tipo = :tipo,
                disponibilidade = :disponibilidade,
                dataIndisponibilidade = :dataindisponibilidade,
                matmnt = :matmnt,
                locmnt = :locmnt,
                ommnt = :ommnt,
                dataini = :dataini,
                datafim = :datafim,
                motivo = :motivo
              WHERE
                id_matclii = :id_matclii AND
                identidade = :identidade_usuario";

      // Definir dados para SQL
      $dados = array(
          ':numficha' => $_POST['numFicha'],
          ':nome' => $_POST['nome'],
          ':clmat' => $_POST['clMat'],
          ':tipo' => $_POST['tipo'],
          ':disponibilidade' => $_POST['disponibilidade'],
          ':dataindisponibilidade' => $_POST['dataIndisponibilidade'],
          ':matmnt' => $_POST['matmnt'],
          ':locmnt' => $_POST['locmnt'],
          ':ommnt' => $_POST['ommnt'],
          ':dataini' => $_POST['dataini'],
          ':datafim' => $_POST['datafim'],
          ':motivo' => $_POST['motivo'],
          ':identidade_usuario' => $_SESSION['identidade']
      );

      $stmt = $pdo->prepare($sql);

      // Executar SQL
      if ($stmt->execute($dados)) {
        header("Location: ../pages/user/atl_disp_clii.php?msgSucesso=Alteração realizada com sucesso!!");
      }
      else {
        header("Location: ../pages/user/atl_disp_clii.php?msgErro=Falha ao ALTERAR anúncio..");
      }
    } catch (PDOException $e) {
      //die($e->getMessage());
      header("Location: ../pages/user/atl_disp_clii.php?msgErro=Falha ao ALTERAR anúncio..");
    }

  }
  elseif ($_POST['enviarDados'] == 'DEL') { // EXCLUIR!!!
    /** Implementação do excluir aqui.. */
    // id_anuncio ok
    // e-mail usuário logado ok
    try {
      $sql = "DELETE FROM matclii WHERE id_matclii = :id_matclii AND identidade = :identidade_usuario";
      $stmt = $pdo->prepare($sql);

      $dados = array(':id_matclii' => $_POST['id_matclii'], ':identidade_usuario' => $_SESSION['identidade']);

      if ($stmt->execute($dados)) {
        header("Location: ../pages/user/atl_disp_clii.php?msgSucesso=Material excluído com sucesso!!");
      }
      else {
        header("Location: ../pages/user/atl_disp_clii.php?msgSucesso=Falha ao EXCLUIR material..");
      }
    } catch (PDOException $e) {
      //die($e->getMessage());
      header("Location: ../pages/user/atl_disp_clii.php?msgSucesso=Falha ao EXCLUIR material..");
    }
  }
  else {
    header("Location: ../pages/user/atl_disp_clii.php?msgErro=Erro de acesso (Operação não definida).");
  }
}
else {
  header("Location: ../pages/user/atl_disp_clii.php.php?msgErro=Erro de acesso.");
}
die();

// Redirecionar para a página inicial (index_logado) c/ mensagem erro/sucesso
 ?>
