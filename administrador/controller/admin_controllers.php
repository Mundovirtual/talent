<?php
include_once("conexion.php");  

class admin_controller{

	function index(){ 
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql= "SELECT * FROM `admin`";
		echo $sql;
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}

	function insertar($nombre,$usuario,$psw){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `admin`(`Nombre`, `Usuario`, `Pass`, `Estado`) VALUES ('$nombre','$usuario','$psw')";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}
  
	function editar($nombre,$usuario,$psw){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="UPDATE `admin` SET  `Nombre`='$nombre',`Usuario`='$usuario',`Pass`='$psw' WHERE  `id`='$id'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}
	function eliminar($id){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="DELETE FROM `admin` WHERE `id`='$id' ";
		$resultado=mysqli_query($Conexion,$sql);
		return mysqli_num_rows($resultado); 
 		$Conexion->mysql_close();
	}
 
	 
 

}
 
 ?>