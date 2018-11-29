<?php
include_once("conexion.php");  

class escuela_controller{

	function index(){ 
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql= "SELECT * FROM  `escuela`";
		echo $sql;
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_fetch_all($resultado);
 		$Conexion->mysql_close();
	}

	function insertar($institucion,$clave,$direccion,$tel,$correo){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="INSERT INTO `escuela`( `institucion`, `clave`, `direccion`, `tel`, `correo`) VALUES ('$institucion','$clave','$direccion','$tel','$correo')";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}

  
	function editar($id,$institucion,$clave,$direccion,$tel,$correo){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="UPDATE `escuela` SET `institucion`='$institucion',`clave`='clave',`direccion`='$direccion',`tel`='$tel',`correo`='$correo' WHERE  `id`='$id'";
		$resultado=mysqli_query($Conexion,$sql);
 		return  mysqli_num_rows($resultado);
 		$Conexion->mysql_close();
	}
	function eliminar($id){
		$con=new Conectar();
	 	$Conexion=$con->conexion();
		$sql="DELETE FROM `escuela` WHERE `id`='$id' ";
		$resultado=mysqli_query($Conexion,$sql);
		return mysqli_num_rows($resultado); 
 		$Conexion->mysql_close();
	}
 
	 
 

}
 
 ?>