<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SisCMnt</title>
    <link rel="stylesheet" href="./css/stylelogin.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  </head>
  <body class="text-center">
  <iframe src="./src/actions/header.php" name="logo" scrolling = "no" width="100%" height="145px"></iframe>

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

    <div class="d-flex justify-content-center">
                  
          <form action="./src/actions/processa_login.php" method="post">
            
        </br>
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="login">

              <div class="form-floating">
                <input type="number" class="form-control" id="identidade" name="identidade" placeholder="9999999-9">
                <label for="identidade">Identidade</label>
              </div>

              <div class="form-floating">
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                <label for="senha">Senha</label>
              </div> 

              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Lembrar
                </label>
              </div>

              <button type="submit" name="enviarDados" class="btn btn-primary">Entrar</button>

            </div>
          </form>

     </div>

       
  </body>

  <iframe src="./src/actions/footer.php" name="footer" scrolling = "no" width="100%" height="148px">

</html>
