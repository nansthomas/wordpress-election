<?php
	echo $term_id;
	$args= array(
		'post_type' => 'proposition',
		'tax_query' => array(
				array(
			'taxonomy'  => 'categorie-proposition',
			'field' => 'term_id',
			'terms' => $term_id,
			),
		),
	);
	$the_query = new WP_Query( $args );
	echo "je suis là";
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
