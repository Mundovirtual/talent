<?php
include_once("../../conexionDB/conexion.php");  

class proyectos_controller{

	function index(){ 
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="SELECT * FROM `proyectos`";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}

	function insertar($proyecto,$descripcion,$fecha_inicio,$fecha_fin){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `proyectos`( `nombre_de_proyectos`, `descripcion`, `fecha_inicio`, `fecha_fin`) VALUES ('$proyecto','$descripcion','$fecha_inicio','$fecha_fin')";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}

  
	function editar($id,$proyecto,$descripcion,$fecha_inicio,$fecha_fin){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="UPDATE `proyectos` SET `nombre_de_proyectos`='$proyecto',`descripcion`='$descripcion',`fecha_inicio`='$fecha_inicio',`fecha_fin`='$fecha_fin' WHERE `idproyectos`='$id'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}


	function eliminar($id){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="DELETE FROM `proyectos` WHERE  `idproyectos`='$id' ";
		$resultado=mysqli_query($Conexion,$sql);
		return mysqli_num_rows($resultado); 
 		$Conexion->mysql_close();
	}
 
 

}
 

 ?>