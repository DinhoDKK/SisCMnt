<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
   crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link href="../../css/menu_lateal.css" rel="stylesheet">
  </head>
  <script>
    $( function() {
      $( document ).tooltip();
    } );
  </script>
  <body>
      
    <div>  
      <div class="nav-side-menu" style="border: 1px solid #ADADAD; box-shadow: 1px 1px 8px #888888">

          <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

              <div class="menu-list">
        
                  <ul id="menu-content" class="menu-content collapse out">
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