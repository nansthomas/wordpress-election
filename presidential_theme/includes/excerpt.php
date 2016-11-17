<?php 

function get_excerpt(){
$permalink = get_the_permalink();
$excerpt = get_the_content();
$excerpt = preg_replace(" ([.*?])",'',$excerpt);
$excerpt = strip_shortcodes($excerpt);
$excerpt = strip_tags($excerpt);
$excerpt = substr($excerpt, 0, 218);
$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
$excerpt = $excerpt.'... <a href="'.$permalink.'">plus</a>';
return $excerpt;
}