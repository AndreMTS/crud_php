<?php

$server = "localhost";
$user = "root";
$password = "";
$db = 'ti';

if ( $conn = mysqli_connect($server, $user, $password, $db ) ) {
  //echo "conectado com sucesso";
}else
  echo"erro";


  function mensagem($texto, $tipo){
    echo "<div class='alert alert-$tipo' role='alert'>
          $texto
          </div>";
  }

  function mostra_data($data){
    $data_invert = explode('-',$data);
    $escreve = $data_invert[2]. "/". $data_invert[1]. "/" .$data_invert[0];
    return $escreve;

  }
?>
<hr>
<div class="container">
  <a class="btn btn-danger" href="index.php">Voltar</a>
</div>