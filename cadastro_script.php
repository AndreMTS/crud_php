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
      <?php
        include "conexao.php";


        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $endereco = $_POST['endereco'];
        $porta = $_POST['porta'];
        $mgm = $_POST['mgm'];
        $user = $_POST['user'];
        $servidor = $_POST['servidor'];
        $observacao = $_POST['observacao'];
        $solicitacao = $_POST['solicitacao'];
        $data = $_POST['data'];
        $ip = $_POST['ip'];
        $ativo = $_POST['ativo'];     

      $sql = "INSERT INTO `sislocincloud`
      (`nome`, `apelido`, `endereco`, `porta`, `mgm`, `user`, `servidor`, `observacao`, `solicitacao`, `data`, `ip`, `ativo`) VALUES 
      ('$nome','$apelido','$endereco','$porta','$mgm','$user','$servidor','$observacao', $solicitacao ,'$data','$ip','$ativo')";
     
     if (mysqli_query($conn, $sql)) {
       mensagem("$nome cadastrado com sucesso",'success');
     }else
     mensagem("$nome não cadastrado",'danger');


      ?>
      
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