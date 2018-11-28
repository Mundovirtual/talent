 <?php 
  
	class enrutador{
		public function cargarVista($vista){
 		 
			switch ($vista) {
			    case "1": 
			        require_once "../../administrador/view/view/estudiantes.php";      
			        break;
			    case "2": 
			        require_once "../../administrador/view/view/tecnologias.php";			         
			        break;
			    case "3": 
			        require_once "../../administrador/view/view/niveles.php";			         
			        break;
		        case "4": 
			        require_once "../../administrador/view/view/categorias.php";			         
		        	break;
		        case "5": 
			        require_once "../../administrador/view/view/escuelas.php";			         
		        	break;
		        case "6": 
			        require_once "../../administrador/view/view/proyectos.php";			         
		        	break;
		         
			    default:
			    	require_once "../../administrador/view/view/error.php";
			    	break;	 
			}

		}
		
		public function validarGET($variable){ 
			if (empty($variable)) { 
				 include_once("../../administrador/view/index.php");

			}
			else{
				return true;
			}
		} 
	}


?>