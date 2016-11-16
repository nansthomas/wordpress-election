<?php
function my_acf_save_post($post_id) {
	
	if( !isset($_POST['acf']) )
		return;
	
	if(get_post_type($post_id) == 'my_custom_post_type') {
		$post = get_post($post_id);
		$custom = get_post_custom($post_id);
		
		$toEmail = 'arnaud.villani@gmail.com';
		$subject = 'Example Subject';		
		$email_body = 'Example Body Content';
		
		$was_email_sent = wp_mail($toEmail, $subject, $email_body);
	}
}

add_action('acf/save_post', array($this, 'acf-billets-form'), 20);