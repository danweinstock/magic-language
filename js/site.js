jQuery( document ).ready(function($) {
	$('.language-button').click(function(){
		$(this).children('.overlay-color').fadeToggle('slow');

	})
	$('.add-student').click(function(){
		$('.additional-student').show();
	})

  jQuery(".location-button").on('click', function(event) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $("#map-info").offset().top
      }, 800);

  });
});
