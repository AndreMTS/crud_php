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
  <?php

  if (isset($_POST['busca'])) {
    $pesquisa = $_POST['busca'];
  } else {
    $pesquisa = '';
  }

  include "conexao.php";

  $sql = "SELECT * FROM sislocincloud WHERE nome LIKE '%$pesquisa%'";
  

  $dados = mysqli_query($conn, $sql);

  ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4">Todos os Clientes</h1>
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <form class="d-flex" action="pesquisar.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="busca" autofocus>
              <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
          </div>
        </nav>
        <table class="table table-striped table-hover">
          <caption>List of users</caption>
          <thead>
            <tr>
              <th scope="col">nome</th>
              <th scope="col">apelido</th>
              <th scope="col">endereco</th>
              <th scope="col">porta</th>
              <th scope="col">mgm</th>
              <th scope="col">user</th>
              <th scope="col">servidor</th>
              <th scope="col">observacao</th>
              <th scope="col">solicitacao</th>
              <th scope="col">data</th>
              <th scope="col">ip</th>
              <th scope="col">ativo</th>
              <th scope="col">Funções</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($linha = mysqli_fetch_assoc($dados)) {
              $id = $linha['id'];
              $nome = $linha['nome'];
              $apelido = $linha['apelido'];
              $endereco = $linha['endereco'];
              $porta = $linha['porta'];
              $mgm = $linha['mgm'];
              $user = $linha['user'];
              $servidor = $linha['servidor'];
              $observacao = $linha['observacao'];
              $solicitacao = $linha['solicitacao'];
              $data = $linha['data'];
              $data = mostra_data($data); //adequa nada para padrao BR
              $ip = $linha['ip'];
              $ativo = $linha['ativo'];

              echo " <tr>
                        <th scope='row'>$nome</th>
                        <td>$apelido</td>
                        <td>$endereco</td>
                        <td>$porta</td>
                        <td>$mgm</td>
                        <td>$user</td>
                        <td>$servidor</td>
                        <td>$observacao</td>
                        <td>$solicitacao</td>
                        <td>$data</td>
                        <td>$ip</td>
                        <td>$ativo</td>
                        <td class='row'>
                        <a href='cadastro_edit.php?id=$id' class='btn btn-secondary' >editar</a>
                        <a href='#' class='btn btn-danger' >excluir</a>                        
                        </td>
                      </tr>";
            }
            

            ?>
          </tbody>
        </table>        
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