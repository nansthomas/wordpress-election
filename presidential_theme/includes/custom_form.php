<?php
add_filter('acf/save_post' , 'new_user_acf', 10, 1 ); // On enregistre le nouveau membre

function new_user_acf(){

	// Pour ma part j’envoi un e-mail de bienvenue que je récupère ci-dessous
	$content = 'zzzzzzzzz';
	$headers = 'From: Monsite' . \r\n;
	$headers .= 'MIME-Version: 1.0' . \r\n;
	$headers .= 'Content-Type: text/html; charset=uft-8'. \r\n;
	wp_mail('arnaud.villani@gmail.com', 'Bienvenue sur Mon site', 'orfidooi', $headers);
}