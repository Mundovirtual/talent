<?php 



 ?>

 <div class="container-fluid">
 	<!--==========================TITLE===========================================-->
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Niveles
			</h3>
		</div>
	</div>

	<!--==========================TABLE===========================================-->
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10"> 
			<table class="table" id="tabla_niveles">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Niveles</th> 
			      <th scope="col">Editar</th> 
			      <th scope="col">Eliminar</th> 
			    </tr>
			  </thead>
			  <tbody>
			    
			  </tbody>
			</table>

		</div>
		<div class="col-md-1">
		</div>
	</div>	
</div>
<!--==========================MODAL REGISTRAR===========================================-->
<div class="modal fade" id="modal_registrar_niveles" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Registrar niveles
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				  <form id="formulario_registrar_niveles">
					  <div class="form-group">
					    <label>Nivel</label>
					    <input type="text" class="form-control" id="registrar_nivel" name="registrar_nivel" placeholder="bajo, medio, avanzado">
					  </div>					   
				 </form>
			</div>
			<div class="modal-footer">	
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					cerrar
				</button>						 
				<button type="button" class="btn btn-primary">
					Registrar
				</button> 
				
			</div>
		</div>
		
	</div>				
</div>


<!--==========================MODAL EDITAR===========================================-->
<div class="modal fade" id="modal_editar_niveles" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Editar nivel
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				 <form id="formulario_editar_niveles">
					  <div class="form-group">
					    <label>Nivel</label>
					    <input type="text" class="form-control" id="editar_nivel" name="editar_nivel" placeholder="bajo, medio, avanzado">
					  </div>					   
				 </form>
			</div>
			<div class="modal-footer">	
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					cerrar
				</button>						 
				<button type="button" class="btn btn-primary">
					Editar
				</button> 
				
			</div>
		</div>
		
	</div>				
</div>


 <div class="row">
		<div class="col-md-1">
			 <a id="modal-389176" href="#modal_registrar_niveles" role="button" class="btn" data-toggle="modal">nuevo</a>
 			
		</div>
	</div>
  <div class="row">
		<div class="col-md-1">
			 <a id="modal-389176" href="#modal_editar_niveles" role="button" class="btn" data-toggle="modal">editar</a>
 			
		</div>
	</div>
 