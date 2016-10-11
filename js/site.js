jQuery( document ).ready(function($) {
	$('.language-button').click(function(){
		$(this).children('.overlay-color').fadeToggle('slow');

	})
	$('.add-student').click(function(){
		$('.additional-student').show();
	})
});
function chooseHome(){
	jQuery("input:button[name=atHome]").css('background','red');
}
function chooseGroup(){
	jQuery("input:button[name=atGroup]").css('background','red');
}