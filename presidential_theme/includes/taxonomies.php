<?php

add_action('init', 'create_custom_taxonomy');
function create_custom_taxonomy(){
  $args = array(
	  'label' => 'Catégorie proposition',
	  'rewrite' => array( 'slug' => 'categorie-proposition' ),
	  'hierarchical' => false,
	);
  	register_taxonomy( 'categorie-proposition',array('proposition'),$args ); 
}