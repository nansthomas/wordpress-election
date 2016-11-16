<?php
	/*
	Template Name: Page meetings
	*/

 	$args = array(
		'post_type' => 'meeting',
		);

 	$the_query = new WP_Query( $args );

	if ( have_posts() ) {
		while(have_posts() ) {
			the_post();
?>
	<div class="meeting">
		<h1><?php the_field('ville'); ?></h1>
		<h2><?php the_field('date'); ?></h2>
		<a href="<?php the_permalink(); ?>">voir</a>
	</div>

<?php 
		}	
	}

?>