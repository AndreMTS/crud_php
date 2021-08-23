<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <title>Update</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastro</h1>
        <form action="cadastro_script.php" method="POST">
          <div class="mb-3">
            <div class="form-group">
              <label for="nome" class="form-label">Nome Empresa</label>
              <input type="text" name="nome" class="form-control" aria-describedby="Nome" >
            </div>
            <div class="form-group">
              <label for="apelido" class="form-label">Apelido</label>
              <input type="text" name="apelido" class="form-control" aria-describedby="Nome" >
            </div>
            <div class="form-group">
              <label for="endereco" class="form-label">Endereço DNS</label>
              <input type="text" name="endereco" class="form-control" aria-describedby="Nome" >
            </div>
            <div class="form-group">
              <label for="porta" class="form-label">Porta Pool</label>
              <input type="text" name="porta" class="form-control" aria-describedby="Nome" >
            </div>
            <div class="form-group">
              <label for="mgm" class="form-label">Porta MGM</label>
              <input type="text" name="mgm" class="form-control" aria-describedby="Nome" >
            </div>
            <div class="form-group">
              <label for="user" class="form-label">Usuario Logon</label>
              <input type="text" name="user" class="form-control" aria-describedby="Nome" >
            </div>
            <div class="form-group">
              <label for="servidor" class="form-label">Nome Servidor</label>
              <input type="text" name="servidor" class="form-control" aria-describedby="Nome" >
            </div>
            <div class="form-group">
              <label for="observacao" class="form-label">Observação</label>
              <input type="text" name="observacao" class="form-control" aria-describedby="Nome">
            </div>
            <div class="form-group">
              <label for="solicitacao" class="form-label">Solicitação Zendesk</label>
              <input type="text" name="solicitacao" class="form-control" aria-describedby="Nome">
            </div>
            <div class="form-group">
              <label for="data" class="form-label">Data Instalação</label>
              <input type="date" name="data" class="form-control" aria-describedby="Nome">
            </div>
            <div class="form-group">
              <label for="ip" class="form-label">IP Servidor</label>
              <input type="text" name="ip" class="form-control" aria-describedby="Nome">
            </div>
            <div class="form-group">
              <label for="ativo" class="form-label">Status </label>
              <input type="text" name="ativo" class="form-control" aria-describedby="Nome">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-success">
              <a href="index.php" class="btn btn-danger">Voltar</a>
            </div>            
          </div>
        </form>            
              
            
      </div>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>