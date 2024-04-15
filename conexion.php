<?php 
include 'cn.php';


  $nombre = $_POST['nombre'];
  $usuario = $_POST['usuario'];
  $correo = $_POST['correo'];
  $pass = $_POST['pass'];
  $pass2 = $_POST['pass2'];
  $sexo = $_POST['sexo'];





$sql = "INSERT INTO datos (nombre, usuario, correo, pass, pass2, sexo)VALUES('$nombre', '$usuario', '$correo', '$pass', '$pass2', '$sexo')";

  if($pass == $pass2){
    echo "Las contras son iguales<br><br>";

  }
  else {
    echo "vuelve a ingresa<br><br>";
  }
    $s= mysqli_query($link, $sql);
    if (!$s){
        echo "</br>No se pudo!! </br>";
    }
    else {
        echo "</br>Si se pudo!! </br>";
    }

    mysqli_close($link);
?>
