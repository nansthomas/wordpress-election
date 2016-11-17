/*
HERE GOES THE MAIN SCRIPT
*/

jQuery(document).ready(function($)
{
	$('.propositions__choice').on('click', '.proposition', function(e){
		console.log('click');
		e.preventDefault();
		var loadProp = $(this).attr('domaine');
		console.log(loadProp);
		// $('.load-more').remove();
		jQuery.post(
			ajaxurl,
			{
				'action' : 'filtre-propositions',
				'domaine' : loadProp,
			},
			function(response)
			{
				console.log(response);
				$('.propositions').empty();
				$('.propositions').append(response);
			}
		);
	});
});