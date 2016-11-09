<?php
	/*
	Template Name: Page accueil 
	*/
?>

<?php get_header(); ?>
 <section class="container" id="listAnnonces">
 <?php
 	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1 ;
 	if(isset($_GET['sexe'])){
 		$sexe_filter = $_GET['sexe'];
 	} else {
 		$sexe_filter = '';
 	}
 	$args = array(
		'post_type' => 'lover',
		'posts_per_page' => 2,
		'paged' => $paged,
		'meta_key'	=> 'sexe',
		'meta_value'	=> $sexe_filter,
		);

 	$the_query = new WP_Query( $args );
	
	if($the_query->have_posts()) {
		while ($the_query->have_posts() )
		{
			$the_query->the_post();
		?>
			<article class="col-md-4">
				<?php
					if(has_post_thumbnail())
					{	
						echo '<div class="responsiveImage">';
						the_post_thumbnail("thumbnail_lover");
						echo '</div>';
					}
				?>
			</article>
		<?php 
		}
		// restore original post data
		wp_reset_postdata();
	} 
?>
 </section>

<?php get_footer(); ?>