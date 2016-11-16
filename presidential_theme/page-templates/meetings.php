<?php
	/*
	Template Name: Page meetings
	*/

 	$args = array(
		'post_type' => 'meeting',
		);

 	$the_query = new WP_Query( $args );

	if ( $the_query->have_posts() ) {
		while($the_query->have_posts() ) {
			$the_query->the_post();
?>
	<div class="meeting">
		<?php
			if(has_post_thumbnail())
			{	
				echo '<div class="img">';
				the_post_thumbnail("thumbnail_meetingpage");
				echo '</div>';
			}
		?>
		<h1><?php the_field('ville'); ?></h1>
		<h2><?php the_field('date'); ?></h2>
		<a href="<?php the_permalink(); ?>">voir</a>
	</div>

<?php 
		}
		wp_reset_postdata();
	
	}

?>