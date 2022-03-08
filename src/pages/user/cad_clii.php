<!DOCTYPE html>
<html>

<head>
  <title>SisCMnt</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</head>
<header>
  <div class="header-index bg-success">
    <div class="row justify-content-md-center">
      <div class="logo text col">
        <img src="img/logo1.png" width="60" heigth="120">
        <b>SisCMnt</b>
        <img src="img/matbel.png" width="60" heigth="150">
      </div>
    </div>
  </div>
</header>

<body>
    <form id="form" name="form" class="form" action="" method="POST" onsubmit="">
        <div class="tab-content">
          <div class="tab-pane active div-tab" id="dados-pessoais" role="tabpanel" aria-labelledby="dados-pessoais-tab">
          
            <h3>Cadastro de Material CL II</h3>
           
          <div class="row">

            <div class="col-md-4">
              <label for="numFicha" class="form-label">Nº da Ficha</label>
              <input type="number" class="form-control" id="numFicha" name="numFicha">
            </div>
            
              <div class="col-md-6">
                <label for="nome" class="form-label">Nomenclatura</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </div>

              <div class="col-md-4">
                <label for="clMat" class="form-label">Classe do Material</label>
                <select id="clMat" name="clMat" class="form-select">
                  <option selected>CL II</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="tipo" class="form-label">Tipo de Material</label>
                <select id="tipo" name="tipo" class="form-select">
                  <option selected>Barracas</option>
                  <option selected>Cinto</option>
                  <option selected>Suspensorio</option>
                  <option selected>Mochilas</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="disponibilidade" class="form-label">Disponibilidade</label>
                <select id="disponibilidade" name="disponibilidade" class="form-select">
                  <option selected>Disponivel</option>
                  <option selected>Indisponivel</option>
                  <option selected>Disponivel com restrição</option>
                </select>
            </div>

            <div class="col-md-4">
              <label for="dataIndisponibilidade" class="form-label">Data (Início da indisponibilidade)</label>
              <input type="date" class="form-control" id="dataIndisponibilidade" name="dataIndisponibilidade">
            </div>


            <div class="col-md-10">
              <label for="motivo" class="form-label">Motivo da indisponibilidade</label>
              <textarea class="form-control" id="motivo" name="motivo" rows="5" cols="50"></textarea>
            </div>

            <div class="col-md-10 btn">
            <input href="recebedados.html" class="btn btn-primary" type="submit" value="Enviar" >
            </div>
    </form>
</body>
</html>