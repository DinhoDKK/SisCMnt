<!DOCTYPE html>
<html>
  <head>
  <title>SisCMnt</title>
  <link rel="stylesheet" href="../../../css/style.css">
  <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
</head>

  <body>
  
    <div class="container">
      <h3>Cadastrar Novo(a) Usuário(a)</h3>
      <form action="../../actions/processa_usuario.php" method="post">

        <div class="row">

            <div class="col-md-6">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="col-4">
            <label for="nomeGuerra">Nome de Guerra</label>
            <input type="text" name="nomeGuerra" id="nomeGuerra" class="form-control">
            </div>

            <div class="col-md-6">
                    <label for="om" class="form-label">Posto/Graduação</label>
                    <select id="om" name="om" class="form-select">
                    <option selected></option>
                    <option>Cb</option>
                    <option>3º SGT</option>
                    <option>2º SGT</option>
                    <option>1º SGT</option>
                    <option>ST</option>
                    <option>2º TEN</option>
                    <option>1º TEN</option>
                    <option>CAP</option>
                    <option>MAJ</option>
                    </select>
                </div>

            <div class="col-md-4">
                    <label for="om" class="form-label">OM</label>
                    <select id="om" name="om" class="form-select">
                    <option selected></option>
                    <option>9º B SUP</option>
                    <option>9º B MNT</option>
                    <option>9º GPT LOG</option>
                    <option>18º B TRNSP</option>
                    <option>9º B SAU</option>
                    </select>
                </div>

            <div class="col-md-6">
                    <label for="perfil" class="form-label">Perfil</label>
                    <select id="perfil" name="perfil" class="form-select">
                    <option selected></option>
                    <option>Fiscal Administrativo</option>
                    <option>Encarregado de Material</option>
                    </select>
                </div>

            <div class="col-md-4">
            <label for="identidade">Identidade</label>
            <input type="number" name="identidade" id="identidade" class="form-control" value="999999-9">
            </div>

            <div class="col-md-6">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="col-md-4">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
            </div>

            <div class="col-md-5">
            <label for="senha">Digite a senha novamente</label>
            <input type="password" name="senha" id="senha" class="form-control">
            </div>

        </div>

        <button type="submit" name="enviarDados" class="btn btn-primary">Cadastrar</button>
        <a href="../../../index.php" class="btn btn-danger">Cancelar</a>

      </form>
    </div>
  </body>
</html>
