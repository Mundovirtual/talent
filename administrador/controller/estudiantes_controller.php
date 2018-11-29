<?php
include_once("conexion.php");  

class estudiantes_controller{

	function index(){ 
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql= "SELECT * FROM `estudiantes`";
		echo $sql;
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}

	function insertar($nombre,$apellido_pat,$apellido_mat,$escuela,$correo){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `estudiantes`( `nombre`, `apellido_pat`, `apellido_mat`, `escuelas_id`, `correo`) VALUES '('$nombre','$apellido_pat','$apellido_mat','$escuela','$correo')";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}

  
	function editar($id,$nombre,$apellido_pat,$apellido_mat,$escuela,$correo){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="UPDATE `estudiantes` SET  `nombre`='$nombre',`apellido_pat`='$apellido_pat',`apellido_mat`='$apellido_mat',`escuelas_id`='$escuela',`correo`='$correo' WHERE `id`='$id'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}
	function eliminar($id){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="DELETE FROM `estudiantes` WHERE `id`='$id' ";
		$resultado=mysqli_query($Conexion,$sql);
		return mysqli_num_rows($resultado); 
 		$Conexion->mysql_close();
	}
 
	 
 

}
 
 ?>