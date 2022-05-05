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
    
    <form id="form" name="form" class="form" action="../../actions/processa_matclii.php" method="POST" onsubmit="">
        <div class="tab-content">
          <div class="tab-pane active div-tab" id="cad-clii" role="tabpanel">
          
           
          <div class="row">

          <div class="col-md-4">
                <label for="clMat" class="form-label">Classe do Material</label>
                <select id="clMat" name="clMat" class="form-select">
                <option selected></option>
                  <option>CL II</option>
                  <option>CL V</option>
                  <option>CL IX</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="tipo" class="form-label">Tipo de Material</label>
                <select id="tipo" name="tipo" class="form-select">
                  <div id="clii" name="clii" hidden>
                  <option selected></option>
                  <option>Barracas</option>
                  <option>Cinto</option>
                  <option>Suspensorio</option>
                  <option>Mochilas</option>
                  </div>
                  <div id="clv" name="clv" hidden>
                  <option>Armamento leve</option>
                  </div>
                  <div id="clix" name="clix" hidden>
                  <option>Viaturas administrativas</option>
                  <option>Viaturas operacionais</option>
                  </div>
                </select>
            </div>

            <div class="col-md-4">
              <label for="numFicha" class="form-label">Nº da Ficha</label>
              <input type="number" class="form-control" id="numFicha" name="numFicha">
            </div>
            
              <div class="col-md-6">
                <label for="nome" class="form-label">Nomenclatura</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </div>

             

            <div class="col-md-6">
                <label for="disponibilidade" class="form-label">Disponibilidade</label>
                <select id="disponibilidade" name="disponibilidade" class="form-select">
                <option selected></option>
                  <option>Disponivel</option>
                  <option>Indisponivel</option>
                  <option>Disponivel com restrição</option>
                </select>
            </div>

            <div class="col-md-4">
              <label for="dataIndisponibilidade" class="form-label">Data (Início da indisponibilidade)</label>
              <input type="date" class="form-control" id="dataIndisponibilidade" name="dataIndisponibilidade">
            </div>

            <div class="col-md-6">
                <label for="matMnt" class="form-label">Material em manutenção?</label>
                <select id="matmnt" name="matmnt" class="form-select">
                <option selected></option>
                  <option>Sim</option>
                  <option>Não</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="locmnt" class="form-label">Local da manutenção</label>
                <select id="locmnt" name="locmnt" class="form-select">
                <option selected></option>
                  <option>Propria OM</option>
                  <option>OM de Apoio</option>
                  <option>Empresa Civil</option>
                </select>
            </div>

            <div class="col-md-5">
                <label for="nomeempresa" class="form-label">Nome da empresa (caso seja civil)</label>
                <input type="text" class="form-control" id="nomeempresa" name="nomeempresa">
              </div>

              <div class="col-md-5">
                <label for="ommnt" class="form-label">OM de manutenção</label>
                <select id="ommnt" name="ommnt" class="form-select">
                <option selected></option>
                  <option>9º B Mnt</option>
                  <option>9º BECmb</option>
                  <option>3º Gpt Eng</option>
                </select>
            </div>

            <div class="col-md-5">
              <label for="dataini" class="form-label">Data Inicio(que o material saiu para manutenção)</label>
              <input type="date" class="form-control" id="dataini" name="dataini">
            </div>

            <div class="col-md-5">
              <label for="datafim" class="form-label">Data Fim(que o material voltou da manutenção)</label>
              <input type="date" class="form-control" id="datafim" name="datafim">
            </div>
          



            <div class="col-md-10">
              <label for="motivo" class="form-label">Motivo da indisponibilidade</label>
              <textarea class="form-control" id="motivo" name="motivo" rows="5" cols="50"></textarea>
            </div>

            <div class="col-md-10 btn">
            <button type="submit" name="enviarDados" class="btn btn-primary" value="CAD">Cadastrar</button>
            </div>
    </form>
   
</body>
</html>