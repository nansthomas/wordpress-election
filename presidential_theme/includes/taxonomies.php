<?php

function category_taxonomy()
{
  $taxonomy = 'category-news';
  $object_type = 'new';
  $args = array(
      'label' => __( 'Categorie new' ),
      'rewrite' => array( 'slug' => 'category-news' ),
      'hierarchical' => false,
  );
  register_taxonomy( $taxonomy, $object_type, $args );
}