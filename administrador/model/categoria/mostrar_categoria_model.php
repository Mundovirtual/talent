<?php 
require_once("../../controller/categoria_controller.php"); 
$index= new categoria_controller(); 
$mostrar=$index->index(); 
$i=1;
$tabla="";
 foreach ($mostrar as $key) {
 
 	 $Editar='<button type=\"button\" class=\"btn btn-primary fas fa-edit\" onclick=\"actualizar_categorias('."'".$key['0']."','".$key['1']."'".')\" data-toggle=\"modal\" data-target=\"#modal_editar_Categorias\"></button>';
 	 
 	 
 	$Eliminar='<button type=\"button\" class=\"btn btn-danger fas fa-trash-alt\" data-toggle=\"modal\"  data-target=\"#modal_eliminar_categorias\" onclick=\"eliminar_categorias('."'".$key['0']."'".')\"></button>';

	 	$tabla.='{
					  "id":"'.$i.'",
					  "categoria":"'.$key['1'].'", 
					  "Editar":"'.$Editar.'",
					  "Eliminar":"'.$Eliminar.'"
				},';
 
		 	$i++;	
			}
$tabla= substr($tabla,0, strlen($tabla)-1); 
		echo '{"data":['.$tabla.']}';  
 
 

 ?>