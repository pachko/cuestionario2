$( '#myModal' ).modal({
	keyboard: false,
  	show:  false,
  	backdrop: 'static'
})

$( '.btn_editar' ).click(function(){
	console.log( 'hola ' + $( this ).attr( "el_id" ) );
});
