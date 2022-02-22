<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Novo(a) Usuário(a)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container">
      <h3>Cadastrar Novo(a) Usuário(a)</h3>
      <form action="../../actions/processa_usuario.php" method="post">
        <div class="col-4">
          <label for="nome">Nome Completo</label>
          <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="col-4">
        <label for="nomeGuerra">Nome de Guerra</label>
          <input type="text" name="nomeGuerra" id="nomeGuerra" class="form-control">
        </div>

        <div class="col-4">
          <label for="identidade">Identidade</label>
          <input type="number" name="identidade" id="identidade" class="form-control" value="999999-9">
        </div>

        <div class="col-4">
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="col-4">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" class="form-control">
        </div><br>

        <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
        <a href="../../../index.php" class="btn btn-danger">Cancelar</a>

      </form>
    </div>
  </body>
</html>
