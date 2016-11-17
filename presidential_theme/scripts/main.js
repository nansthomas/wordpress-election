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
		var height_item = $('.propositionsList__item:first').height();
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
				$('.propositionsList__items').append(response);
				height_item = height_item * $('.propositionsList__item').length + 'px';
				$('.propositionsList__items').animate({opacity: 1, height: height_item },500);
			}
		);
	});


});