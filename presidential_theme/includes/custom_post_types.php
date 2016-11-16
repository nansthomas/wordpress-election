<?php 

// WHEN CREATING A NEW CUSTOM TYPE, 
// DONT FOGET TO MODIFY THE ROLES.PHP FILE 
// ACCORDING TO THE CAPABILITIES YOU CREATE

add_action( 'init', 'creation_meetings' );
add_action( 'init', 'creation_propositions' );
add_action( 'init', 'creation_news' );
add_action( 'init', 'creation_billets' );

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

function creation_news()
{

  $labels = array(
        'name'               => 'news',
        'singular_name'      => 'new',
        'all_items'          => 'Tous les news',
        'add_new'            => 'Ajouter un new',
        'add_new_item'       => 'Ajouter un nouvel new',
        'edit_item'          => "Modifier le new",
        'new_item'           => 'Nouveau new',
        'view_item'          => "Voir le new",
        'search_items'       => "Rechercher un new",
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'new parent:',
        'menu_name'          => 'news',
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
        'rewrite'             => array( 'slug' => 'new' ),
        'capability_type' => 'new',
        'capabilities' => array(
            'publish_posts' => 'publish_news',
            'edit_posts' => 'edit_news',
            'edit_post' => 'edit_new',
            'delete_post' => 'delete_new'
        )
    );

    register_post_type( 'new' , $args );

}

function creation_billets()
{

  $labels = array(
        'name'               => 'billets',
        'singular_name'      => 'billet',
        'all_items'          => 'Tous les billets',
        'add_new'            => 'Ajouter un billet',
        'add_new_item'       => 'Ajouter un nouvel billet',
        'edit_item'          => "Modifier le billet",
        'new_item'           => 'Nouveau billet',
        'view_item'          => "Voir le billet",
        'search_items'       => "Rechercher un billet",
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'billet parent:',
        'menu_name'          => 'billets',
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
        'rewrite'             => array( 'slug' => 'billet' ),
        'capability_type' => 'billet',
        'capabilities' => array(
            'publish_posts' => 'publish_billets',
            'edit_posts' => 'edit_billets',
            'edit_post' => 'edit_billet',
            'delete_post' => 'delete_billet'
        )
    );

    register_post_type( 'billet' , $args );

}