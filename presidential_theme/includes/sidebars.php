<?php
register_sidebar( array(
    'name'          => __('Sidebar Footer 1'),
    'id'            => 'sidebar-footer-1',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
)   );

register_sidebar( array(
    'name'          => __('Sidebar Footer 2'),
    'id'            => 'sidebar-footer-2',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' 
)   );