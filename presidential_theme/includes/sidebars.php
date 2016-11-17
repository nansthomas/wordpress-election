<?php
register_sidebar( array(
    'name'          => __('Sidebar twitter feed'),
    'id'            => 'sidebar-twitter',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
)   );


register_sidebar( array(
    'name'          => __('Sidebar social links'),
    'id'            => 'sidebar-social',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
)   );

register_sidebar( array(
    'name'          => __('Sidebar social share'),
    'id'            => 'sidebar-social-share',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
)   );
