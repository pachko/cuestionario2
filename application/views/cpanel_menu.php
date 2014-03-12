<div id="main" class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="row caja">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>Grupos</h3>
					<div class="pull-right">
						<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#addGrupoMenu">
						  Agregar <span class="glyphicon glyphicon-th-list"></span>
						</button>
					</div>
					<?php
	      		if( $grupos ){
	      		?>
						<div class="table-responsive">
				    		<table class="table table-bordered table-stripe___d table-hover">
								<thead>
						    		<tr>
							        	<th>Grupo</th>
					          		<th></th>
									</tr>
								</thead>
								<tbody>
						    		<?php
						      		foreach( $grupos as $value) {
						      		?>
										<tr id="div_<?php echo $value->id; ?>">
								        	<td><?php echo $value->nombre; ?></td>
							          	<td class="text-center">
							          		<a class="btn btn-info btn-xs btn_editar" data-toggle="modal" data-target="#editGrupoMenu" el_id="<?php echo $this->encrypt->encode( $value->id ); ?>" el_nombre="<?php echo $value->nombre; ?>">
								          		<span class="glyphicon glyphicon-pencil"></span>
							          		</a>
												<a class="btn btn-danger btn-xs btn_elminar" data-toggle="modal" data-target="#deleteGrupoMenu" el_id="<?php echo $this->encrypt->encode( $value->id ); ?>" el_nombre="<?php echo $value->nombre; ?>">
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
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="row caja">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>Grupos</h3>
				</div>
			</div>
		</div>
  	</div>
</div>