<?php
include_once("../../conexionDB/conexion.php");  

class tecnologia_controller{

	function index(){ 
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT * FROM `tecnologias`  ";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}

	function insertar($tecnologia,$categoria){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `tecnologias`(`tecnologias`, `categoria_id_categoria`) VALUES ('$tecnologia','$categoria')";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}

  
	function editar($id,$tecnologias,$categoria){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="UPDATE `tecnologias` SET `tecnologias`='$tecnologias',`categoria_id_categoria`='$categoria' WHERE `id_tecnologias`='$id'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}
	function eliminar($id){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="DELETE FROM `tecnologias` WHERE `id_tecnologias`='$id' ";
		$resultado=mysqli_query($Conexion,$sql);
		return mysqli_num_rows($resultado); 
 		$Conexion->mysql_close();
	}
 
 

}
 

 ?>