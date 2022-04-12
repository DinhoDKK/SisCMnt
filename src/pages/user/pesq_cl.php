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
</head>
<body>
        <form id="form" name="form" class="form" action="ver_mat_cl.php" method="POST" onsubmit="">
                <div class="col-md-6" style="text-align: center;">
                    <label for="perfil" class="form-label">Escolha a classe</label>
                    <select id="escolhaclasse" name="escolhaclasse" class="form-select">
                    <option selected></option>
                    <option>CL II</option>
                    <option>CL V</option>
                    <option>CL IX</option>
                    </select>
                </div>
        
                <div class="col-md-10 btn">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>

        </form>
</body>
</html>