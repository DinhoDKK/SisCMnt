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
    <title>Página Inicial - SisCMnt</title>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <iframe src="header.php" name="logo" scrolling = "no" width="100%" height="145px"></iframe>

    <div class="row text-center bg-success">
        <div class="col-md-6"> 
          <p><h5>Posto/Grad.: <?php echo $_SESSION['posto']?>  <?php echo $_SESSION['nomeguerra'] ; ?> </h5></p>
        </div>
        <div class="col-md-6"> 
          <p><h5>Perfil: <?php echo $_SESSION['perfil']; ?></h5></p>
        </div>
    </div>
    
            <table width="100%" height="100%" align="center">

                <tr valign="top">
                  <td valign="top"><iframe src="menu_lateral_fisc.php" name="leftFrame" width="320px" height="500px" frameborder="1"></iframe></td>

                  <td width="100%" valign="top"><iframe src="inicio.php" scrolling="yes" name="mainFrame" width="100%" height="500px" frameborder="0"></iframe></td> 
                  
                </tr>
            </table>
  </body>
  <iframe src="footer.php" name="footer" scrolling = "no" width="100%" height="60px">
</html>