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
  <iframe src="header.php" name="logo" width="100%" height="145px"></iframe>
    <div class="row text-center bg-success">
        <div class="col-md-5"> 
          <p><h5><?php echo $_SESSION['posto']?>  <?php echo $_SESSION['nomeguerra'] ; ?> </h5></p>
        </div>
        <div class="col-md-5"> 
          <p><h5><?php echo $_SESSION['perfil']; ?></h5></p>
        </div>
    </div>
    
    
           <!--
          <ul class="nav nav-tabs">
          <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../pages/user/index_encmat.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pages/user/alt_senha.php">Alterar Senha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../pages/user/cad_clii.php">Cadastro Material CL II</a>
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
                <a class="nav-link" href="#">Verificar disp. por CL (II e V)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../actions/logout.php">Sair</a>
              </li>
            </ul>
            
            <iframe src="menu_lateral.php" name="leftFrame" width="20%" height="800px"></iframe>
            <iframe src="inicio.php" name="inicio" width="90%" height="800px"></iframe>
            -->
            <table width="100%" height="100%" align="center">

                <tr valign="top">
                  <td valign="top"><iframe src="menu_lateral.php" name="leftFrame" width="320px" height="800px" frameborder="1"></iframe></td>
                  <td width="100%" valign="top"><iframe src="inicio.php" scrolling = "yes" name="mainFrame" width="100%" height="100%" frameborder="0"></iframe></td> 
                </tr>
            </table>
  </body>

</html>