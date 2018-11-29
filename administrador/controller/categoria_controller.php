<?php
include_once("../../conexionDB/conexion.php");  

class categoria_controller{

	function index(){ 
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT * FROM `categoria` ";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}

	function insertar($categoria){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `categoria`(`categoria`) VALUES ('$categoria')";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}

  
	function editar($id,$categoria){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="UPDATE `categoria` SET `categoria`='$categoria' WHERE `id_categoria`='$id'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}
	function eliminar($id){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="DELETE FROM `categoria` WHERE  `id_categoria`='$id' ";
		$resultado=mysqli_query($Conexion,$sql);
		return mysqli_num_rows($resultado); 
 		$Conexion->mysql_close();
	}
 
 

}
 

 ?>