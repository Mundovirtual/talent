<?php 



 ?>

 <div class="container-fluid">
 	<!--==========================TITLE===========================================-->
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Tecnologías
			</h3>
		</div>
	</div>

	<!--==========================TABLE===========================================-->
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10"> 
			<table class="table" id="tabla_tecnologias">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Tecnología</th>
			      <th scope="col">Categoria</th> 
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
<div class="modal fade" id="modal_registrar_tecnologias" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Registrar tecnología
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				 <form id="formularioRegistrar">
					  <div class="form-group">
					    <label>Tecnología</label>
					    <input type="text" class="form-control" id="new_tecnologias" name="new_tecnologias" placeholder="php, java, Phyton, go">
					  </div>
					  <div class="form-group">
					    <label>Categoría</label>
					    	<div id="new_select_categorias" name="new_select_categorias">
					    		<select class="form-control">
							      <option value="1">php</option>
							      <option value="1">php</option>
							      <option value="1">php</option>
							      <option value="1">php</option>
							      <option value="1">php</option>
							    </select>
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
<!--==========================MODAL editar===========================================-->
<div class="modal fade" id="modal_editar_tecnologias" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Editar tecnología
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				 <form id="formularioeditar">
					  <div class="form-group">
					    <label>Tecnología</label>
					    <input type="text" class="form-control" id="Edit_tecnologias" name="Edit_tecnologias" placeholder="php, java, Phyton, go">
					  </div>
					  <div class="form-group">
					    <label>Categoría</label>
					    	<div id="Edit_select_categorias" name="Edit_select_categorias">
					    		<select class="form-control">
							      <option value="1">php</option>
							      <option value="1">php</option>
							      <option value="1">php</option>
							      <option value="1">php</option>
							      <option value="1">php</option>
							    </select>
					    	</div>
					  </div>
				 </form>
			</div>
			<div class="modal-footer">	
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					cerrar
				</button>						 
				<button type="button" class="btn btn-primary">
					editar
				</button> 
				
			</div>
		</div>
		
	</div>
	
</div>



 <div class="row">
		<div class="col-md-1">
			 <a id="modal-389176" href="#modal_registrar_tecnologias" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
			 <a id="modal-389176" href="#modal_editar_tecnologias" role="button" class="btn" data-toggle="modal">editar</a>
			
			
			
		</div>
 