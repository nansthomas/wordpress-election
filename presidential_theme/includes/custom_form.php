<?php
add_action('acf/save_post', 'my_save_post');

function my_save_post( $post_id ) {
	
	// bail early if not a contact_form post
	// if( get_post_type($post_id) !== 'billet' ) {
		
	// 	return;
		
	// }
	
	
	// // bail early if editing in admin
	// if( is_admin() ) {
		
	// 	return;
		
	// }
	
	
	// vars
	// $post = get_post( $post_id );
	
	
	// get custom fields (field group exists for content_form)
	$nom = get_field('nom', $post_id);
	$prenom = get_field('prenom', $post_id);
	$mail = get_field('mail', $post_id);
	$content = 'Hello';
	
	// email data
	$to = $mail;
	$headers = 'From: ' . $nom . ' <' . 'clement.vion@hetic.net' . '>' . "\r\n";
	$subject = 'ooooo';
	$body = $content;
	
	
	// send email
	wp_mail($to, $subject, $body, $headers );
	
}