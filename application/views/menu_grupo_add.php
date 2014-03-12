<!-- Agregar nuevo grupo -->
<div id="addGrupoMenu" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
   	<div class="modal-content">
      	<?php
	      echo validation_errors(); 
			$attributes = array( 'id' => 'delete_user', 'role' => 'role' );
	   	echo form_open( 'master/menu_grupo_add' , $attributes ); 
	   	?>
			  	<div class="modal-content">
			     	<div class="modal-header">
		      		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span>&nbsp; Eliminar usuario</h4>
			     	</div>
			     	<div class="modal-body">
						<div class="form-group">
					    	<label for="nombre">Nombre del nuevo grupo</label>
					    	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del nuevo grupo">
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
</div>
<!-- Fin Agregar nuevo grupo -->