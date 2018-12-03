<?php   
 

	if ( isset($_POST['id_actualizar']) and isset($_POST['categoria'])) {
		$id=$_POST['id_actualizar'];
		$categoria=$_POST['categoria'];
	
		$categoria = filter_var( FILTER_SANITIZE_STRING);
		 	echo $categoria."<br>";
			echo  htmlspecialchars(INPUT_POST,'categoria', ENT_QUOTES, 'UTF-8');

		if (is_int($id)) {
		 	echo $categoria."<br>";
			echo "hola " . htmlspecialchars($categoria, ENT_QUOTES, 'UTF-8');
		 }
	}

	if (isset($_POST['id_eliminar'])) {
		 
	}


 ?>