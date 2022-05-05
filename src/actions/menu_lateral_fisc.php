<!DOCTYPE html>
<html>
  <head>
  
  <link href="../../css/menu_lateal.css" rel="stylesheet">
  <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../../bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
  </head>
  <script>
    $( function() {
      $( document ).tooltip();
    } );
  </script>
  <style>
    .image {margin: auto; text-align: center; height: 150px;}
    </style>
  <body>
      
    <div>  
      <div class="nav-side-menu" style="border: 1px solid #ADADAD; box-shadow: 1px 1px 8px #888888">

          <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

              <div class="menu-list">
        
                  <ul id="menu-content" class="menu-content collapse out">

                   <li>
                     <div class="image">
                        <img src="../../img/logo1.png" width="60" heigth="120">
                     </div>
                    
                    </li>

                      <li>
                        <a href="../actions/inicio.php" target="mainFrame"><i class="fa fa-dashboard fa-lg"></i> Inicio </a>
                      </li>

                      <li>
                        <a href="../pages/user/cad_usuario.php" target="mainFrame"><i class="fa fa-dashboard fa-lg"></i> Cadastro de Usuarios </a>
                      </li>

                      <li>
                        <a href="../pages/user/ver_mat.php" target="mainFrame"><i class="fa fa-dashboard fa-lg"></i>Relação de materiais cadastrados</a>
                      </li>

                      <li>
                        <a href="../pages/user/pesq_cl.php" target="mainFrame"><i class="fa fa-dashboard fa-lg"></i>Relação de materiais por classe</a>
                      </li>

                      <li>
                        <a href="../pages/user/ver_mat_mnt.php" target="mainFrame"><i class="fa fa-dashboard fa-lg"></i>Materiais em manutenção</a>
                      </li>

                      <li>
                        <a href="../pages/user/pedido_descarga.php" target="mainFrame"><i class="fa fa-dashboard fa-lg"></i> Verificar pedidos de descarga</a>
                      </li>
                      
                      <li>
                        <a href="../actions/logout.php" target="_parent"><i class="fa fa-dashboard fa-lg"></i> Sair</a>
                      </li>

           </div>           
      </div>
</body>
</html>