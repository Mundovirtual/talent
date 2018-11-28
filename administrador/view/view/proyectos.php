<?php 



 ?>

 <div class="container-fluid">
 	<!--==========================TITLE===========================================-->
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Proyectos
			</h3>
		</div>
	</div>

	<!--==========================TABLE===========================================-->
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10"> 
			<table class="table" id="tabla_proyectos">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Inicio</th>
			      <th scope="col">Fin</th>
			      <th scope="col">Descripcion</th> 
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
<div class="modal fade" id="modal_registrar_proyectos" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Registrar proyecto
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				 <form id="formulario_Registrar_proyecto">
					  <div class="form-group">
					    <label>Proyecto</label>
					    <input type="text" class="form-control"  id="nuevo_proyecto" name="nuevo_proyecto" placeholder="Nombre del proyecto">
					  </div>
					  <div class="form-group">
					    <label>Descripción</label>
					       <textarea class="form-control" rows="2" id="nuevo_proyecto_descripcion" name="nuevo_proyecto_descripcion"></textarea>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6 text-center">
					      <label>Inicio</label>
					      <input type="date" class="form-control" id="nuevo_inicio_proyecto" name="nuevo_inicio_proyecto">
					    </div>
					    <div class="col-md-6  text-center">
					      <label >Fin</label>
					      <input type="date" class="form-control"  id="nuevo_fin_proyecto" name="nuevo_fin_proyecto">
					    </div>
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
<!--==========================MODAL Editar===========================================-->
<div class="modal fade" id="modal_editar_proyectos" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Editar proyecto
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				 <form id="formulario_Registrar_proyecto">
					  <div class="form-group">
					    <label>Proyecto</label>
					    <input type="text" class="form-control"  id="editar_proyecto" name="editar_proyecto" placeholder="Nombre del proyecto">
					  </div>
					  <div class="form-group">
					    <label>Descripción</label>
					       <textarea class="form-control" rows="2" id="editar_proyecto_descripcion" name="editar_proyecto_descripcion"></textarea>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6 text-center">
					      <label>Inicio</label>
					      <input type="date" class="form-control" id="editar_inicio_proyecto" name="editar_inicio_proyecto">
					    </div>
					    <div class="col-md-6  text-center">
					      <label >Fin</label>
					      <input type="date" class="form-control"  id="editar_fin_proyecto" name="editar_fin_proyecto">
					    </div>
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



 <div class="row">
		<div class="col-md-1">
			 <a id="modal-389176" href="#modal_registrar_proyectos" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
			 <a id="modal-389176" href="#modal_editar_proyectos" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
			
			
			
		</div>
	</div>
 