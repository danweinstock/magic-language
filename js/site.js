
jQuery( document ).ready(function($) {
	$('.language-button').click(function(){
		$(this).children('.overlay-color').fadeToggle('slow');

	})
	$('.add-student').click(function(){
		$('.additional-student').show();
	})
});