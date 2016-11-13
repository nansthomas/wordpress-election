<?php
    /*
    Template Name: Page accueil 
    */

get_header(); ?>

<section class="homeHeader">
    <?php 

 	$args = array(
		'post_type' => 'new',
		'posts_per_page' => 5,
		);

 	$the_query = new WP_Query( $args );

	if ( have_posts() ) {
		while(have_posts() ) {
			the_post();
	?>
    <div class="homeHeader__content">
		<h1 class="homeHeader__title"><?php the_field('titre');?></h1>
		<h3 class="homeHeader__subtitle"><?php the_field('sous-titre');?></h3>

		<a href="#" class="button">
			<span><?php the_field('titre-bouton');?></span>
		</a>

	</div>

</section>

<form class="newsletterForm">
	
	<h3 class="newsletterForm__title"><?php the_field('newsletter-titre');?></h3>
	
	<div class="newsletterForm__fields">
		<input type="text" placeholder="Prénom">
		<input type="mail" placeholder="Email">

		<input type="submit" value=<?php the_field('newsletter-bouton-texte');?>>
	</div>
	<?php
	}
} ?>
</form>

<section class="homeBlog">
    
    <div class="homeBlog__container">
		<?php 
		if($the_query->have_posts()) {
			while ($the_query->have_posts() )
			{
				$the_query->the_post();
		?>
		<article class="homeBlog__article">
			<?php
				if(has_post_thumbnail())
				{	
					echo '<div class="responsiveImage">';
					the_post_thumbnail("thumbnail_new_homepage");
					echo '</div>';
				}
			?>
			<h5 class="homeBlog__articleTitle"><?php the_title(); ?></h5>
			<div class="homeBlog__articleDescription">
				<?php echo get_excerpt(); ?>
			</div>
		</article>
		<?php 
			}
			// restore original post data
			wp_reset_postdata();
		}
		?>
	</div>

</section>

<?php 
if( have_rows('flexible_bottom') ) 
{
     // loop through the rows of data
    while ( have_rows('flexible_bottom') ) 
    {
    	the_row();
    	$layout = get_row_layout();
    	echo $layout;	
    	include get_template_directory() . '/views/flexible-parts/'. $layout . '.php';
    }
}
?>

<div class="socials">
	<h4 class="socials__title">Nous rejoindre sur les réseaux sociaux</h4>
	<!-- SIDEBAR SOCIALS HERE-->
</div>

<?php get_footer(); ?>