$( document ).ready(function() {
	$('.show1').click(function(){
		$('.hide1').show('slow');
		event.preventDefault();
	});
	$('.show2').click(function(){
		$('.hide2').show('slow');
		event.preventDefault();
	});
	$('.show3').click(function(){
		$('.hide3').show('slow');
		event.preventDefault();
	});
	$('.show4').click(function(){
		$('.hide4').show('slow');
		event.preventDefault();
	});
	$('.close-product').click(function(){
		$('.hide').hide('slow');
		event.preventDefault();
	});
 
});
