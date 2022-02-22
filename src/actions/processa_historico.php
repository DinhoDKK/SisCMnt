<?php
require_once '../../src/database/conectaBD.php';
// Definir o BD (e a tabela)
// Conectar ao BD (com o PHP)

session_start();

if (empty($_SESSION)) {
  // Significa que as variáveis de SESSAO não foram definidas.
  // Não poderia acessar aqui.
  header("Location: ../../index.php?msgErro=Você precisa se autenticar no sistema.");
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
        $sql = "INSERT INTO historico
                  (numpat, nome, grupo, eb, dataIndisp, cidade, empresa, omMnt,
                   situacao, realizacaoServicao, prioridade, condUso, 
                   suprimento, custo, descricao, solucao, dataTermino, 
                   valorSv, valorMat, odmtInicial, odmtFinal, os, identidade_usuario)
                VALUES
                  (:numpat, :nome, :grupo, :eb, :dataIndisp, :cidade, :empresa, 
                  :omMnt, :situacao, :realizacaoServicao, :prioridade, :condUso,
                  :suprimento, :custo, :descricao, :solucao, :dataTermino,
                  :valorSv, :valorMat, :odmtInicial, :odmtFinal, :os, :identidade_usuario)";

        // Preparar a SQL (pdo)
        $stmt = $pdo->prepare($sql);

        // Definir/organizar os dados p/ SQL
        $dados = array(
          ':numpat' => $_POST['numpat'],
          ':nome' => $_POST['nome'],
          ':grupo' => $_POST['grupo'],
          ':eb' => $_POST['eb'],
          ':dataIndisp' => $_POST['dataIndisp'],
          ':cidade' => $_POST['cidade'],
          ':empresa' => $_POST['empresa'],
          ':omMnt' => $_POST['omMnt'],
          ':situacao' => $_POST['situacao'],
          ':realizacaoServicao' => $_POST['realizacaoServicao'],
          ':prioridade' => $_POST['prioridade'],
          ':condUso' => $_POST['condUso'],
          ':suprimento' => $_POST['suprimento'],
          ':custo' => $_POST['custo'],
          ':descricao' => $_POST['descricao'],
          ':solucao' => $_POST['solucao'],
          ':dataTermino' => $_POST['dataTermino'],
          ':valorSv' => $_POST['valorSv'],
          ':valorMat' => $_POST['valorMat'],
          ':odmtInicial' => $_POST['odmtInicial'],
          ':valorSv' => $_POST['valorSv'],
          ':odmtFinal' => $_POST['odmtFinal'],
          ':os' => $_POST['os'],
          ':identidade_usuario' => $_SESSION['identidade']
        );

        // Tentar Executar a SQL (INSERT)
        // Realizar a inserção das informações no BD (com o PHP)
        if ($stmt->execute($dados)) {
          header("Location: ../../index_logado.php?msgSucesso=Histórico cadastrado com sucesso!");
        }
    } catch (PDOException $e) {
        die($e->getMessage());
        header("Location: ../../index_logado.php?msgErro=Falha ao cadastrar histórico..");
    }
  }
  elseif ($_POST['enviarDados'] == 'ALT') { // ALTERAR!!!
    /* Implementação do update aqui.. */
    // Construir SQL para update
    try {
      $sql = "UPDATE
                historico
              SET
              numpat = :numpat,
              nome = :nome,
              grupo = :grupo,
              eb = :eb,
              dataIndisp = :dataIndisp,
              cidade = :cidade,
              empresa = :empresa,
              omMnt = :omMnt,
              situacao = :situacao,
              realizacaoServicao = :realizacaoServicao,
              prioridade = :prioridade,
              condUso = :condUso,
              suprimento = :suprimento,
              custo = :custo,
              descricao = :descricao,
              dataTermino = :dataTermino,
              valorSv = :valorSv,
              observacao = :observacao,
              valorMat = :valorMat,
              odmtInicial = :odmtInicial,
              odmtFinal = :odmtFinal,
              os = :os
              WHERE
                id = :id_historico AND
                identidade_usuario = :identidade";

      // Definir dados para SQL
      $dados = array(
        ':id_historico' => $_POST['id_historico'],
        ':numpat' => $_POST['numpat'],
          ':nome' => $_POST['nome'],
          ':grupo' => $_POST['grupo'],
          ':eb' => $_POST['eb'],
          ':dataIndisp' => $_POST['dataIndisp'],
          ':cidade' => $_POST['cidade'],
          ':empresa' => $_POST['empresa'],
          ':omMnt' => $_POST['omMnt'],
          ':situacao' => $_POST['situacao'],
          ':realizacaoServicao' => $_POST['realizacaoServicao'],
          ':prioridade' => $_POST['prioridade'],
          ':condUso' => $_POST['condUso'],
          ':suprimento' => $_POST['suprimento'],
          ':custo' => $_POST['custo'],
          ':descricao' => $_POST['descricao'],
          ':solucao' => $_POST['solucao'],
          ':dataTermino' => $_POST['dataTermino'],
          ':valorSv' => $_POST['valorSv'],
          ':valorMat' => $_POST['valorMat'],
          ':odmtInicial' => $_POST['odmtInicial'],
          ':valorSv' => $_POST['valorSv'],
          ':odmtFinal' => $_POST['odmtFinal'],
          ':os' => $_POST['os'],
          ':identidade_usuario' => $_SESSION['identidade']
      );

      $stmt = $pdo->prepare($sql);

      // Executar SQL
      if ($stmt->execute($dados)) {
        header("Location: ../../index_logado.php?msgSucesso=Alteração realizada com sucesso!!");
      }
      else {
        header("Location: ../../index_logado.php?msgErro=Falha ao ALTERAR anúncio..");
      }
    } catch (PDOException $e) {
      //die($e->getMessage());
      header("Location: ../../index_logado.php?msgErro=Falha ao ALTERAR anúncio..");
    }

  }
  elseif ($_POST['enviarDados'] == 'DEL') { // EXCLUIR!!!
    /** Implementação do excluir aqui.. */
    // id_anuncio ok
    // e-mail usuário logado ok
    try {
      $sql = "DELETE FROM historico WHERE id = :id_historico AND identidade_usuario = :identidade";
      $stmt = $pdo->prepare($sql);

      $dados = array(':id_historico' => $_POST['id_historico'], ':identidade' => $_SESSION['identidade']);

      if ($stmt->execute($dados)) {
        header("Location: ../../index_logado.php?msgSucesso=Histórico excluído com sucesso!!");
      }
      else {
        header("Location: ../../index_logado.php?msgSucesso=Falha ao EXCLUIR histórico..");
      }
    } catch (PDOException $e) {
      //die($e->getMessage());
      header("Location: ../../index_logado.php?msgSucesso=Falha ao EXCLUIR histórico..");
    }
  }
  else {
    header("Location: ../../index_logado.php?msgErro=Erro de acesso (Operação não definida).");
  }
}
else {
  header("Location: ../../index_logado.php?msgErro=Erro de acesso.");
}
die();

// Redirecionar para a página inicial (index_logado) c/ mensagem erro/sucesso
 ?>
