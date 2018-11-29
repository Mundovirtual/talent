 <?php 

 ?>

 <div class="container-fluid">
 	<!--==========================TITLE===========================================-->
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Categorias
			</h3>
		</div>
	</div>

	<!--==========================TABLE===========================================-->
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10"> 
			<table class="table" id="tabla_Categorias">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Categorias</th> 
			      <th scope="col"></th>  
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
<div class="modal fade" id="modal_registrar_Categorias" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Registrar Categoría
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				  <form id="formulario_registrar_Categorias">
					  <div class="form-group">
					    <label>categoría</label>
					    <input type="text" class="form-control" id="registrar_categoria" name="registrar_categoria" placeholder="categoria">
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
<div class="modal fade" id="modal_editar_Categorias" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Editar categoría
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				 <form id="formulario_editar_Categorias">
					  <div class="form-group">
					    <label>categoría</label>
					    <input type="text" class="form-control" id="editar_categoria" name="editar_categoria" placeholder="categoria">
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


<!--==========================MODAL Eliminrar===========================================-->
<div class="modal fade" id="modal_eliminar_categorias" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Eliminar categoría
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				  Estas seguro de eliminar  la categoría?
			</div>
			<div class="modal-footer">	
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					aceptar
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
			 <a id="modal-389176" href="#modal_registrar_Categorias" role="button" class="btn" data-toggle="modal">nuevo</a>
 			
		</div>
	</div>
  <div class="row">
		<div class="col-md-1">
			 <a id="modal-389176" href="#modal_editar_Categorias" role="button" class="btn" data-toggle="modal">editar</a>
 			
		</div>
	</div>
<script type="text/javascript" src="../model/categoria/categoria_model.js"></script>