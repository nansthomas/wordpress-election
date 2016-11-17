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
	while ($the_query->have_posts() )
	{
		$the_query->the_post();
		echo "<li class='propositionsList__item'><span class='propositionsList__itemTitle'>";
	    the_title();
		echo "</span></li>";
	}
		// restore original post data
		wp_reset_postdata();
	} 
	?>
