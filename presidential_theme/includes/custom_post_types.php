<?php 

// WHEN CREATING A NEW CUSTOM TYPE, 
// DONT FOGET TO MODIFY THE ROLES.PHP FILE 
// ACCORDING TO THE CAPABILITIES YOU CREATE

add_action( 'init', 'creation_meetings' );

function creation_meetings()
{

  $labels = array(
        'name'               => 'meetings',
        'singular_name'      => 'meeting',
        'all_items'          => 'Tous les meetings',
        'add_new'            => 'Ajouter un meeting',
        'add_new_item'       => 'Ajouter un nouvel meeting',
        'edit_item'          => "Modifier le meeting",
        'new_item'           => 'Nouveau meeting',
        'view_item'          => "Voir le meeting",
        'search_items'       => "Rechercher un meeting",
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'meeting parent:',
        'menu_name'          => 'meetings',
  );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => -2,
        'menu_icon'           => 'dashicons-cart',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'meeting' ),
        'capability_type' => 'meeting',
        'capabilities' => array(
            'publish_posts' => 'publish_meetings',
            'edit_posts' => 'edit_meetings',
            'edit_post' => 'edit_meeting',
            'delete_post' => 'delete_meeting'
        )
    );

    register_post_type( 'meeting' , $args );

}

add_action( 'init', 'creation_propositions' );

function creation_propositions()
{

  $labels = array(
        'name'               => 'propositions',
        'singular_name'      => 'proposition',
        'all_items'          => 'Tous les propositions',
        'add_new'            => 'Ajouter un proposition',
        'add_new_item'       => 'Ajouter un nouvel proposition',
        'edit_item'          => "Modifier le proposition",
        'new_item'           => 'Nouveau proposition',
        'view_item'          => "Voir le proposition",
        'search_items'       => "Rechercher un proposition",
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'proposition parent:',
        'menu_name'          => 'propositions',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => -2,
        'menu_icon'           => 'dashicons-cart',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'proposition' ),
        'capability_type' => 'proposition',
        'capabilities' => array(
            'publish_posts' => 'publish_propositions',
            'edit_posts' => 'edit_propositions',
            'edit_post' => 'edit_proposition',
            'delete_post' => 'delete_proposition'
        )
    );

    register_post_type( 'proposition' , $args );

}