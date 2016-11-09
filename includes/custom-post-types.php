<?php 

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
