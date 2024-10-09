<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "mdb";

$conexion = mysqli_connect ($servidor, $usuario, $password, $basededatos);

if(isset($_POST['registro'])){
   $nombre= $_POST ['nombre'];
   $correo= $_POST ['correo'];
   $contrasena= $_POST ['contrasena'];

   $insertar = "INSERT INTO cuentas VALUES ('$nombre','$correo','$contrasena')";

   $ejecutar = mysqli_query ($conexion,$insertar);

   header("Location: MDB.html");

   exit();
}
?>
