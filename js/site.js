jQuery( document ).ready(function($) {
		var numChild = 1;
	$(document).on('click','.age-button',function(){
		$(this).parent().children('.age-button').removeAttr("id", "chosen-age");
		$(this).attr("id","chosen-age");
		$(this).parent().children('.age-button').removeClass("active-option");
		$(this).addClass("active-option");
		var ageOption = $('.child-'+numChild + ' .active-option').val();
		$('.child-'+numChild+' .age-hidden').val(ageOption);
	});
		$(document).on('click','.session-button',function(){
		$(this).parent().children('.session-button').removeAttr("id", "chosen-session");
		$(this).attr("id","chosen-session");
		$(this).parent().children('.session-button').removeClass("active-group-session");
		$(this).addClass("active-group-session");
		var sessionOption = $('.child-'+numChild + ' .active-group-session').val();
		$('.child-'+numChild+' .hidden-session').val(sessionOption);
	});

	$(document).on('click','.language-button',function(e){
		e.preventDefault();
		$(this).parent().children('.language-button').removeAttr("id");
		$(this).attr("id","chosen-language");
		var langOption = $('.child-'+numChild + ' #chosen-language').val();
			console.log(langOption);	 
				 $('.child-'+numChild+' .hidden-language').val(langOption);
	});
	$(document).on('click','.button-location',function(e){
		e.preventDefault();
		$(this).parent().children('.button-location').removeAttr("id");
		$(this).attr("id","chosen-location");
		var langOption = $('.child-'+numChild + ' #chosen-location').val();
			console.log(langOption);	 
				 $('.child-'+numChild+' .hidden-location').val(langOption);
	});



	$('.add-child').on('click',function (e){
		e.preventDefault();
		numChild++;
		$(".child-clone ol").clone().addClass('child-'+numChild).removeClass('none').appendTo(".children-added");
	});
});