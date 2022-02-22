<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SisCMnt</title>
    <link rel="stylesheet" href="./css/stylelogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
  <body class="text-center">

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
      
          <div class="carrousel">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                  aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>

              <div class="carousel-inner">

                <div class="carousel-item active">
                  <img src="img/slide1.jpg">
                </div>

                <div class="carousel-item">
                  <img src="img/slide2.jpg">
                </div>

                <div class="carousel-item">
                  <img src="img/slide3.jpg">
                </div>

              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>

            </div>
          </div>
                  
                
                                    
          <form action="./src/actions/processa_login.php" method="post">

            <img class="mb-4" src="img/logo1.png" alt="" width="72" height="57">
                            
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
