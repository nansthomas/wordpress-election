<?php
	$args= array(
		'post_type' => 'proposition',
		'tax_query' => array(
				array(
			'taxonomy'  => 'categorie-proposition',
			'field' => 'slug',
			'terms' => $slug,
			),
		),
	);
	$the_query = new WP_Query( $args );
	if($the_query->have_posts()) {
		echo 'oooo';
	while ($the_query->have_posts() )
	{
		$the_query->the_post();
	?>
		<h2><?php the_title(); ?></h2>
		<h2><?php echo $domaine; ?></h2>
	<?php 
		}
		// restore original post data
		wp_reset_postdata();
	} 
	?>
