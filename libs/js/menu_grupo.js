var link1 = 'http://localhost/test/cuestionario2/';
var link2 = '/test/cuestionario2/';

$(document).ready(function(){


	$( '#addGrupoMenu' ).modal({
		keyboard: false,
	  	show:  false,
	  	backdrop: 'static'
	});


	$( '#editGrupoMenu' ).modal({
		keyboard: false,
	  	show:  false,
	  	backdrop: 'static'
	});


	$( '.btn_elminar' ).click(function(){
		var el_ID = $( this ).attr( "el_id" );
		var el_nombre = $( this ).attr( "el_nombre" );
		$( '.eliminar_nombre' ).html( el_nombre );
		$( '#delete_menu input[name=id]' ).val( el_ID );
	});


	$( '.btn_editar' ).click(function(){
		var el_ID = $( this ).attr( "el_id" );
		var el_nombre = $( this ).attr( "el_nombre" );
		console.log( el_nombre );
		$( '#edit_menu input[name=nombre]' ).val( el_nombre );
		$( '#edit_menu input[name=id]' ).val( el_ID );
	});


	




});