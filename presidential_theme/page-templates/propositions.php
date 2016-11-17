<?php
	/*
	Template Name: Page propositions
	*/

get_header();	

$terms = get_terms( 'categorie-proposition', 'orderby=count&hide_empty=0' );
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	    echo '<ul>';
	    foreach ( $terms as $term ) {
	        echo '<li class="proposition" domaine="' . $term->slug . '">' . $term->name . '</li>';
	    }
	    echo '</ul>';
	}
?>

<div class="propositions">
		
	<?php 

		$args = array( 'post_type' => "proposition" );

		$the_query = new WP_Query( $args );

		if ( $the_query->have_posts() ) {
			while( $the_query->have_posts() ) {
				$the_query->the_post();
	    		the_title();
			} 
		}

	?>

</div>

<?php get_footer(); ?>