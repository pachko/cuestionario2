<!-- Agregar nuevo grupo -->
<div id="deleteGrupoMenu" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
   	<div class="modal-content">
      	<?php
	      echo validation_errors(); 
			$attributes = array( 'id' => 'delete_menu', 'role' => 'role' );
	   	echo form_open( 'master/menu_grupo_delete' , $attributes ); 
	   	?>
			  	<div class="modal-content">
			     	<div class="modal-header">
		      		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span>&nbsp; Eliminar Grupo de menu</h4>
			     	</div>
			     	<div class="modal-body">
						<div class="alert alert-warning">
					   	<strong>Cuidado!</strong> Estas apunto de eliminar el menu: <strong class="eliminar_nombre"></strong>, estas totalmente seguro?.
					   </div>
			     	</div>
			     	<div class="modal-footer">
		        		<button type="submit" type="button" class="btn btn-danger">Si, Eliminar</button>
			     		<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>			     		
			     		<input type="hidden" name="id" id="id">
		      	</div>
		    	</div>
		   </form>
    	</div>
  	</div>
</div>
<!-- Fin Agregar nuevo grupo -->