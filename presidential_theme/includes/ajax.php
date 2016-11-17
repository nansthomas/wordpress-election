<?php
	add_action( 'wp_ajax_filtre-propositions', 'filtre_propositions_function');
	add_action( 'wp_ajax_nopriv_filtre-propositions', 'filtre_propositions_function');

	function filtre_propositions_function()
	{
		global $wpdb, $_POST;
		$term_id = $_POST['domaine'];
		include get_template_directory().'/views/ajax-propositions.php';

		die();
	}