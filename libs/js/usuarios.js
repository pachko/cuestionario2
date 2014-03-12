var link1 = 'http://localhost/test/cuestionario2/';
var link2 = '/test/cuestionario2/';

$(document).ready(function(){


	$( '#myModal' ).modal({
		keyboard: false,
	  	show:  false,
	  	backdrop: 'static'
	})

	$( '#myEdit' ).modal({
		keyboard: false,
	  	show:  false,
	  	backdrop: 'static'
	})


	$( '.btn_editar' ).click(function(){
		var el_ID = $( this ).attr( "el_id" );
		jQuery.ajax({
		  	type: "POST",
		  	url: link1 + 'master/usuario_get_by_id_JSON/' + el_ID,
		  	data: 'clv_ct=' + el_ID,       
		  	dataType: 'json',
		  	success: function( data ){
		     	if( data.exito == 1 ){
		     		$( '#edit_user input[name=id]' ).val( el_ID );
		     		$( '#edit_user input[name=nombre]' ).val( data.nombre );
		     		$( '#edit_user input[name=pass]' ).val( data.pass );
		     		$( '#edit_user input[name=user]' ).val( data.user );
		     		$( '#edit_user input[name=email]' ).val( data.email );
		     		$( '#edit_user input[name=menu_id]' ).val( data.menu_id );
		     		$( '#edit_user input[name=activo]' ).val( data.activo );
		     		$( '#edit_user .edit_menu_id' ).val( data.menu_id );
		     		$( '#edit_user .edit_activo' ).val( data.activo );		     		
		     	}else{
		     		
		     	}
		   }
		});
	});

	$( '.btn_elminar' ).click(function(){
		var el_ID = $( this ).attr( "el_id" );
		jQuery.ajax({
		  	type: "POST",
		  	url: link1 + 'master/usuario_get_by_id_JSON/' + el_ID,
		  	data: 'clv_ct=' + el_ID,       
		  	dataType: 'json',
		  	success: function( data ){
		     	if( data.exito == 1 ){
		     		$( '#delete_user input[name=id]' ).val( el_ID );
		     		$( '.eliminar_nombre' ).html( data.nombre + '(' + data.email + ')' );
		     	}
		   }
		});
	});

});