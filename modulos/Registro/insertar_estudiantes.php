<?php 
$nombre= $_POST['nombre'];
$apellido_pat=$_POST['apellido_paterno'];
$apellido_mat=$_POST['apellido_materno'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_final=$_POST['fecha_final'];
$escuela=$_POST['escuela'];
$correo=$_POST['correo'];

$conexion = mysqli_connect("localhost","root","");
        mysqli_select_db($conexion,"talent_inteligent");
        $insertar = "INSERT INTO `estudiantes`(`nombre`, `apellido_pat`, `apellido_mat`, `fecha_inicio`, `fecha_final`, `escuelas_id`, `correo`) VALUES ('$nombre','$apellido_pat','$apellido_mat','$fecha_inicio','$fecha_final','$escuela','$correo')";
        $ejecutar2 = $conexion->query (utf8_decode($insertar));
        
        $conexion->close();   

  
 ?>