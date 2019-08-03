$(document).ready(function(){

	$('.btn_ocultar').hide();
	$('.box_mostrar').hide();

	$('.btn_mostrar').click(function(){
		$('.btn_ocultar').show();
		$('.box_mostrar').slideDown();
		$('.btn_mostrar').hide();
	});

	$('.btn_ocultar').click(function(){
		$('.btn_ocultar').hide();
		$('.box_mostrar').slideUp();
		$('.btn_mostrar').show();
	});

});