/*
HERE GOES THE MAIN SCRIPT
*/

jQuery(document).ready(function($)
{
	$('.propositions__choice').on('click', '.proposition', function(e){
		e.preventDefault();
		$('.propositionsList__items').animate({opacity:0},500, function(){
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
				$('.propositionsList__items').animate({opacity: 1},500);
			}
		);
	});
});