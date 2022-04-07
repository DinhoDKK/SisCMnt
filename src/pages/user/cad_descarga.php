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

            <div class="col-md-10">
              <label for="motivodescarga" class="form-label">Motivo da descarga</label>
              <textarea class="form-control" id="motivodescarga" name="motivodescarga" rows="5" cols="50"></textarea>
            </div>

            <div class="col-md-10 btn">
            <button type="submit" name="enviarDados" class="btn btn-primary" value="CADDESC">Cadastrar</button>
            </div>
    </form>
   
</body>
</html>