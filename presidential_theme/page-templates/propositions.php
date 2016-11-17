<?php
	/*
	Template Name: Page propositions
	*/
?>

<?php 
$terms = get_terms( 'categorie-proposition', 'orderby=count&hide_empty=0' );
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	    echo '<ul>';
	    foreach ( $terms as $term ) {
	        echo '<li>' . $term->name . '</li>';
	        var_dump($term);
	    }
	    echo '</ul>';
	}
