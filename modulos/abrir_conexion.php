<?php 
function conectarse(){
  $server = "localhost";
  $user = "root";
  $pass = "";
  $bd = "talent_inteligent";

  $conectar = new mysqli($server, $user,$pass,$bd) or die ("No se pudo realizar la conexion");
  return $conectar;
}
$conexion = conectarse();
?>