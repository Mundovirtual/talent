

 <div class="container-fluid">
 	<!--==========================TITLE===========================================-->
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Institución
			</h3>
		</div>
	</div>

	<!--==========================TABLE===========================================-->
	<div class="row">
		 
		<div class="col-md-12"> 
			<table class="table" id="tabla_niveles">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Institución</th> 
			      <th scope="col">Clave</th> 
			      <th scope="col">Dirección</th>  
			      <th scope="col">Teléfono</th> 
			      <th scope="col">Correo</th> 
			      <th scope="col">Editar</th> 
			      <th scope="col">Eliminar</th> 
			    </tr>
			  </thead>
			  <tbody>
			    
			  </tbody>
			</table>

		</div> 
	</div>	
</div>
<!--==========================MODAL REGISTRAR===========================================-->
<div class="modal fade" id="modal_registrar_Institución" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Registrar Institución
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="formulario_registrar_institucion">
						<div class="form-group">
							<label>Institución</label>
							<input type="text" class="form-control" id="registrar_institucion" name="registrar_institucion" placeholder="Institución">
						</div> 
						<div class="form-group">
							<label >Clave institucional</label>
						 	<input type="text" class="form-control"  id="registrar_clave" name="registrar_clave" placeholder="Clave institucional">
						</div>
						<div class="form-row">
						    <div class="form-group col-md-6">
						      <label >Teléfono</label>
					      	  <input type="tel" class="form-control"  id="registrar_telefono" name="registrar_telefono" placeholder="Teléfono institucional">
						    </div>
						    <div class="form-group col-md-6">
						     <label >Correo</label> 
					      	 <input type="email" class="form-control"  id="registrar_correo" name="registrar_correo" placeholder="Correo institucional">
						    </div>
					 	</div>					  
				  
					  <div class="form-group">
					    <label>Dirección</label>
					    <textarea class="form-control" rows="2" id="registrar_direccion" name="registrar_direccion" placeholder="Dirección institucional"></textarea>
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
<div class="modal fade" id="modal_editar_Institución" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
					Editar Institución
				</h5> 
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				  <form id="formulario_editar_institucion">
						<div class="form-group">
							<label>Institución</label>
							<input type="text" class="form-control" id="editar_institucion" name="editar_institucion" placeholder="Institución">
						</div> 
						<div class="form-group">
							<label >Clave institucional</label>
						 	<input type="text" class="form-control"  id="editar_clave" name="editar_clave" placeholder="Clave institucional">
						</div>
						<div class="form-row">
						    <div class="form-group col-md-6">
						      <label >Teléfono</label>
					      	  <input type="tel" class="form-control"  id="editar_telefono" name="editar_telefono" placeholder="Teléfono institucional">
						    </div>
						    <div class="form-group col-md-6">
						     <label >Correo</label> 
					      	 <input type="email" class="form-control"  id="editar_correo" name="editar_correo" placeholder="Correo institucional">
						    </div>
					 	</div>					  
				  
					  <div class="form-group">
					    <label>Dirección</label>
					    <textarea class="form-control" rows="2" id="editar_direccion" name="editar_direccion" placeholder="Dirección institucional"></textarea>
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
			 <a id="modal-389176" href="#modal_registrar_Institución" role="button" class="btn" data-toggle="modal">nuevo</a>
 			
		</div>
 </div>
  <div class="row">
		<div class="col-md-1">
			 <a id="modal-389176" href="#modal_editar_Institución" role="button" class="btn" data-toggle="modal">editar</a>
 			
		</div>
	</div>
 