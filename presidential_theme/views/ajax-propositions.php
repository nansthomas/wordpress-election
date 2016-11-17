<?php
	$args= array(
		'post_type' => 'proposition',
		'tax_query' => array(
				array(
			'taxonomy'  => 'categorie-proposition',
			'field' => 'term_id',
			'terms' => $domaine,
			),
		),
	);
	$the_query = new WP_Query( $args );

	if($the_query->have_posts()) {
	while ($the_query->have_posts() )
	{
		$the_query->the_post();
	?>
		<h2><?php the_title(); ?></h2>
	<?php 
		}
		// restore original post data
		wp_reset_postdata();
	} 
	?>