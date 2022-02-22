<?php
session_start();

if (empty($_SESSION)) {
  // Significa que as variáveis de SESSAO não foram definidas.
  // Não poderia acessar aqui.
  header("Location: index.php?msgErro=Você precisa se autenticar no sistema.");
  die();
}

/*
echo "Estou logado";
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
die();
*/
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

</head>

<body>
<form action="../../actions/processa_historico.php" method="post">
        <div class="tab-content">
          <div class="tab-pane active div-tab" id="dados-pessoais" role="tabpanel" aria-labelledby="dados-pessoais-tab">
          
            <h3>FICHA CADASTRO HISTÓRICO DE MANUTENÇÃO CL V, CL IX, CL VII</h3>
           
          <div class="row">

            <div class="col-md-4">
              <label for="numpat" class="form-label">Nº PATRIMÔNIO</label>
              <input type="number" class="form-control" id="numpat" name="numpat">
            </div>
            
              <div class="col-md-6">
                <label for="nome" class="form-label">NOMECLATURA</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </div>

              <div class="col-md-10">
              <label for="eb" class="form-label">EB DA VIATURA</label>
              <input type="number" class="form-control" id="eb" name="eb">
            </div>

              <div class="col-md-6">
                <label for="grupo" class="form-label">GRUPO DE MATERIAL</label>
                <select id="grupo" name="grupo" class="form-select">
                  <option selected>ARMAMENTOS</option>
                  <option selected>COMPONENTES DE ARMAMENTO</option>
                  <option selected>COMPONENTES DE VIATURA</option>
                  <option selected>COMPONENTES DE VIATURA</option>
                  <option selected>COMUNICAÇÕES</option>
                  <option selected>ELETRODOMESTICO E ELETROPORTATEIS</option>
                  <option selected>LETRÔNICA</option>
                  <option selected>ENGENHARIA</option>
                  <option selected>EQUIPAMENTO INDIVIDUAL</option>
                  <option selected>GERAL</option>
                  <option selected>NFORMÁTICA</option>
                  <option selected>IODCT Itm Obs Dire e Ct Tir</option>
                  <option selected>MATERIAL BIBLIOGRAFICO</option>
                  <option selected>MATERIAL DE ACAMPAMENTO</option>
                  <option selected>MOVEIS EM GERAL</option>
                  <option selected>PEÇAS DE MUSEU</option>
                  <option selected>SAÚDE</option>
                  <option selected>VIATURAS NÃO BLINDADAS</option>
                </select>
            </div>

            <div class="col-md-4">
              <label for="dataIndisp" class="form-label">DATA DE INÍCIO (INÍCIO DA INDISPONIBILIDADE)</label>
              <input type="date" class="form-control" id="dataIndisp" name="dataIndisp">
            </div>

            <div class="col-md-4">
              <label for="cidade" class="form-label">ORGÃO DE MANUTENÇÃO</label>
              <select id="cidade" name="cidade" class="form-select">
                <option selected>PRÓRIA OM</option>
                <option selected>OM DE APOIO</option>
                <option selected>EMPRESA CIVIL</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="empresa" class="form-label">EMPRESA DE MANUTENÇÃO</label>
              <input type="text" class="form-control" id="empresa" name="empresa">
            </div>

            <div class="col-md-6">
              <label for="omMnt" class="form-label">OM DE MANUTENÇÃO</label>
              <input type="text" class="form-control" id="omMnt" name="omMnt">
            </div>

            <div class="col-md-4">
              <label for="situacao" class="form-label">SITUAÇÃO DA DISPONIBILIDADE</label>
              <select id="situacao" name="situacao" class="form-select">
                <option selected>DISPONÍVEL COM RESTRIÇÃO</option>
                <option selected>INDISPONÍVEL</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="realizacaoServicao" class="form-label">REALIZAÇÃO DO SERVIÇO DE MANUTENÇÃO</label>
              <select id="realizacaoServicao" name="realizacaoServicao" class="form-select">
                <option selected>INTERNACIONAL</option>
                <option selected>LOCAL(GUARNIÇÃO DE SERVIÇO)</option>
                <option selected>NACIONAL</option>
                <option selected>REGIONAL(OM DE APOIO)</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="prioridade" class="form-label">PRIORIDADE DA MANUTENÇÃO</label>
              <select id="prioridade" name="prioridade" class="form-select">
                <option selected>ALTA</option>
                <option selected>MÉDIA</option>
                <option selected>BAIXA</option>
              </select>
            </div>

            <div class="col-md-5">
              <label for="condUso" class="form-label">CONDIÇÕES DE USO EM MANUTENÇÃO</label>
              <select id="condUso" name="condUso" class="form-select">
                <option selected>RESTRIÇÃO OPERACIONAL</option>
                <option selected>RESTRIÇÃO LEGAL</option>
                <option selected>INDISPONÍVEL</option>
              </select>
            </div>

            <div class="col-md-5">
              <label for="suprimento" class="form-label">OBTENÇÃO DE SUPRIMENTO PARA MANUTENÇÃO</label>
              <select id="suprimento" name="suprimento" class="form-select">
                <option selected>INTERNACIONAL</option>
                <option selected>LOCAL</option>
                <option selected>NACIONAL</option>
                <option selected>REGIONAL</option>
              </select>
            </div>

            <div class="col-md-10">
              <label for="custo" class="form-label">CUSTO DA MANUTENÇÃO</label>
              <select id="custo" name="custo" class="form-select">
                <option selected>NÃO COMPENSADOR - ACIMA DE 60%</option>
                <option selected>ALTO CUSTO - DE 5 A 60%</option>
                <option selected>MEDIO CUSTO - DE 1 A 5%</option>
                <option selected>BAIXO CUSTO - ATÉ 1%</option>
              </select>
            </div>

            <div class="col-md-10">
              <label for="descricao" class="form-label">DESCREVA O PROBLEMA</label>
              <textarea class="form-control" id="descricao" name="descricao" rows="5" cols="50">
              </textarea>
            </div>

            <div class="col-md-10">
              <label for="solucao" class="form-label">SOLUÇÃO</label>
              <textarea class="form-control" id="solucao" name="solucao" rows="5" cols="50">
              </textarea>
            </div>

            <div class="col-md-4">
              <label for="dataTermino" class="form-label">DATA DO TÉRMINO</label>
              <input type="date" class="form-control" id="dataTermino" name="dataTermino">
            </div>

            <div class="col-md-3">
              <label for="valorSv" class="form-label">VALOR DO SERVIÇO</label>
              <input type="number" class="form-control" id="valorSv" name="valorSv">
            </div>

            <div class="col-md-3">
              <label for="valorMat" class="form-label">VALOR DO MATERIAL</label>
              <input type="number" class="form-control" id="valorMat" name="valorMat">
            </div>

            <div class="col-md-3">
              <label for="odmtInicial" class="form-label">ÔDOMETRO INICIAL</label>
              <input type="number" class="form-control" id="odmtInicial" name="odmtInicial">
            </div>

            <div class="col-md-3">
              <label for="odmtFinal" class="form-label">ÔDOMETRO FINAL</label>
              <input type="number" class="form-control" id="odmtFinal" name="odmtFinal">
            </div>

            <div class="col-md-4">
              <label for="os" class="form-label">UPLOAD DA ORDEM DE SERVIÇO</label>
              <input type="file" class="form-control" id="os" name="os">
            </div>

            <div class="col-md-10 btn">
            <button type="submit" name="enviarDados" class="btn btn-primary" value="CAD">Enviar</button>
             <a href="../../actions/index_logado.php" class="btn btn-danger">Cancelar</a>
            </div>
    </form>
</body>
</html>