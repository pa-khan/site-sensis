$(document).ready(function($) {

	$('.input_phone input').mask('+7 (000) 000-00-00');

	$('.about').tabs();	

	new WOW().init();

	$('form').submit(function() {
		$.ajax({
		    type: "POST",
		    url: "order.php",
		    data: $(this).serialize()
		}).done(function() {
		    $.fancybox.close();
		    $.fancybox.open({src  : '#popup-thanks',type : 'inline'});
		});
		return false;
	});
});
