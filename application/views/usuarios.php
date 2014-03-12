<div id="main" class="container">
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<?php
	      	echo validation_errors(); 
			$attributes = array( 'class'	=> 'form-horizontal', 'id' => 'f1', 'role' => 'role' );
	   		echo form_open( 'master/usuario_save' , $attributes ); 
	   		?>
			   	<div class="modal-content">
			      	<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span>&nbsp; Agregar nuevo usuario</h4>
			      	</div>
			      	<div class="modal-body">
						<div class="form-group">
					   	<label for="nombre" class="col-sm-2 control-label">Nombre </label>
					    	<div class="col-sm-10">
					      	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="user" class="col-sm-2 control-label">Usuario </label>
					    	<div class="col-sm-10">
					      	<input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="pass" class="col-sm-2 control-label">Password </label>
					    	<div class="col-sm-10">
					      	<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="email" class="col-sm-2 control-label">Email </label>
					    	<div class="col-sm-10">
					      	<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="menu_id" class="col-sm-2 control-label">Menu </label>
					    	<div class="col-sm-10">
					      	<select class="form-control" name="menu_id" id="menu_id">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="activo" class="col-sm-2 control-label">Activo </label>
					    	<div class="col-sm-10">
					      	<select class="form-control" name="activo" id="activo">
								  <option value="1">Activo</option>
								  <option value="0">Desactivado</option>
								</select>
					    	</div>
					  	</div>
			      	</div>
			      	<div class="modal-footer">
			        		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			        		<button type="submit" type="button" class="btn btn-primary">Guardar registro</button>
			      	</div>
		    	</div>
		   </form>
	  	</div>
	</div>

	
		<div class="modal-dialog">
			<?php
	      	echo validation_errors(); 
			$attributes = array( 'class'	=> 'form-horizontal', 'id' => 'f1', 'role' => 'role' );
	   		echo form_open( 'master/usuario_save' , $attributes ); 
	   		?>
			   	<div class="modal-content">
			      	<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span>&nbsp; Agregar nuevo usuario</h4>
			      	</div>
			      	<div class="modal-body">
						<div class="form-group">
					   	<label for="nombre" class="col-sm-2 control-label">Nombre </label>
					    	<div class="col-sm-10">
					      	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="user" class="col-sm-2 control-label">Usuario </label>
					    	<div class="col-sm-10">
					      	<input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="pass" class="col-sm-2 control-label">Password </label>
					    	<div class="col-sm-10">
					      	<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="email" class="col-sm-2 control-label">Email </label>
					    	<div class="col-sm-10">
					      	<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="menu_id" class="col-sm-2 control-label">Menu </label>
					    	<div class="col-sm-10">
					      	<select class="form-control" name="menu_id" id="menu_id">
								  <option value="1">1</option>
								  <option value="2">2</option>
								  <option value="3">3</option>
								  <option value="4">4</option>
								  <option value="5">5</option>
								</select>
					    	</div>
					  	</div>
					  	<div class="form-group">
					   	<label for="activo" class="col-sm-2 control-label">Activo </label>
					    	<div class="col-sm-10">
					      	<select class="form-control" name="activo" id="activo">
								  <option value="1">Activo</option>
								  <option value="0">Desactivado</option>
								</select>
					    	</div>
					  	</div>
			      	</div>
			      	<div class="modal-footer">
			        		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			        		<button type="submit" type="button" class="btn btn-primary">Guardar registro</button>
			      	</div>
		    	</div>
		   </form>
	  	</div>
	
   <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="pull-right">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Agregar <span class="glyphicon glyphicon-plus"></span>
				</button>
			</div>
		</div>
  	</div>
   	<div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-12	col-lg-12">
      		<h3>Usuarios registrados</h3>
      		<?php
      		if( $usuarios ){
      		?>
				<div class="table-responsive">
		    		<table class="table table-bordered table-striped table-hover">
						<thead>
				    		<tr>
					        	<th>Nombre completo</th>
					          	<th>Usuario</th>
					          	<th>Contraseña</th>
					          	<th>Email</th>
					          	<th>Status</th>
				          		<th></th>
							</tr>
						</thead>
						<tbody>
				    		<?php
				      		foreach( $usuarios as $value) {
				      		?>
								<tr>
						        	<td><?php echo $value->nombre; ?></td>
						          	<td><?php echo $value->user; ?></td>
						          	<td><?php echo $value->pass; ?></td>
						          	<td><?php echo $value->email; ?></td>
					          		<td><span class="label label-danger">In activo</span></td>
					          		<td>
					          			<a class="btn btn-info btn_editar" el_id="<?php echo $value->id; ?>">
					          				<span class="glyphicon glyphicon-pencil"></span>
					          			</a>
										<a class="btn btn-danger">
					          				<span class="glyphicon glyphicon-trash"></span>
					          			</a>
					          		</td>
					        	</tr>
					    	<?php
				      		}
				        	?>
						</tbody>
					</table>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

