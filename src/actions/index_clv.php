<?php
require_once '../../src/database/conectaBD.php';

session_start();

if (empty($_SESSION)) {
  // Significa que as variáveis de SESSAO não foram definidas.
  // Não poderia acessar aqui.
  header("Location: ../../index.php?msgErro=Você precisa se autenticar no sistema.");
  die();
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página Inicial - Ambiente Logado</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
  <body>
  <header>
  <div class="header-index bg-success">
    <div class="row justify-content-md-center">
      <div class="logo text col">
        <img src="../../img/logo1.png" width="60" heigth="120">
        <b>SisCMnt</b>
        <img src="../../img/matbel.png" width="60" heigth="150">
        <div class="container">
      <div class="col-md-6">
        <h5 class="title"><?php echo $_SESSION['posto'], $_SESSION['nomeguerra'] ; ?>, seja bem-vindo(a)!</h5>
      </div>
    </div>
      </div>
    </div>
  </div>
</header>
    
    
           
          <ul class="nav nav-tabs">
          <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../pages/user/index_encgar.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pages/user/alt_senha.php">Alterar Senha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../pages/user/cad_clv.php">Cadastro de armamentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Atualizar disponibilidade de MEM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Informar MEM em Mnt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Informar Descarga de MEM</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Verificar disponibilidade de armamentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../actions/logout.php">Sair</a>
              </li>
            </ul>

            <div class="row">
    <div class="col">
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
              <img src="../../img/slide1.jpg">
            </div>
            <div class="carousel-item">
              <img src="../../img/slide2.jpg">
            </div>
            <div class="carousel-item">
              <img src="../../img/slide3.jpg">
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
    </div>
  </div>
</br>

  <div class="text1">
    <h2><b>Sistema de Contole de Manutenção</b></h2>
    <p>Este sistema foi criado para auxiliar na gestão dos agentes da admistração
      no controle de materiais CL V e CL IX. Este sistema com um simples acesso que pode
      ser feito junto a fiscalização da aos dententores deste tipo de material um formulario
      onde sera feito o  cadastro do material que esta em Manutenção fora da OM, ou aquele
      material que esta indisponivel e precisa de Manutenção. <b>Informo que devem ser preenchido
      com as datas corretas da indisponibilidade para que seja feita uma gestão mais precisa
      juntamente ao Siscofis.</b>
    </p>
  </div>

  </body>
</html>