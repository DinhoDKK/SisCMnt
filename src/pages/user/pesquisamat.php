
   
   <?php
   require_once '../../database/conectaBD.php';

            session_start();

            if (empty($_SESSION)) {
            // Significa que as variáveis de SESSAO não foram definidas.
            // Não poderia acessar aqui.
            header("Location: index.php?msgErro=Você precisa se autenticar no sistema.");
            die();
            }

   ?>

   <div>
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
                
        <form action="inf_mnt_clii.php" method="GET">
        <h3>Digite o Numero da ficha do Material</h3>
        <input type="text" name="pesquisamat" id="pesquisamat">
        <button type="submit" class="btn btn-warning">Pesquisar</a>
        </form>
    </div>

