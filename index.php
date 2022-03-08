<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SisCMnt</title>
    <link rel="stylesheet" href="./css/stylelogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
  <body class="text-center">
      <header>
  <div class="header-index bg-success">
    <div class="row justify-content-md-center">
      <div class="logo text col">
        <img src="img/logo1.png" width="60" heigth="120">
        <b>SisCMnt</b>
        <img src="img/matbel.png" width="60" heigth="150">
    </div>
      </div>
    </div>
  </div>
</header>

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
              <a href="./src/pages/user/cad_usuario.php" class="btn btn-warning">Cadastrar-se</a>

          </form>
 
    </div>
  </body>
</html>
