/*
HERE GOES THE MAIN SCRIPT
*/

jQuery(document).ready(function($)
{
	$('.propositions__choice').on('click', '.proposition', function(e){

		$('.proposition').removeClass('active');
		$(this).addClass('active');

		e.preventDefault();
		var height = $('.propositionsList__items').css('height');
		$('.propositionsList__items').animate({opacity:0, height: height},500, function(){
			$('.propositionsList__items').empty();
		});
		var loadProp = $(this).attr('domaine');
		// $('.load-more').remove();
		jQuery.post(
			ajaxurl,
			{
				'action' : 'filtre-propositions',
				'domaine' : loadProp,
			},
			function(response)
			{
				console.log($('.propositionsList__item'));
				var height = $('.propositionsList__item').length * parseInt($($('.propositionsList__item')[0]).css('height'));
				console.log(height);
				$('.propositionsList__items').append(response);
				$('.propositionsList__items').animate({opacity: 1, height: height},500);
			}
		);
	});


});