<?php
    /*
    Template Name: Page accueil
    */

get_header(); ?>

<section class="largeHeader">


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
    <div class="largeHeader__content">
		<h1 class="largeHeader__title"><?php the_field('titre');?></h1>
		<h3 class="largeHeader__subtitle"><?php the_field('sous-titre');?></h3>

		<a href="https://nans.ninja/wp-election/propositions/" class="button">
			<span><?php the_field('titre-bouton');?></span>
		</a>

	</div>

	<?php } } ?>

</section>

<div class="newsletterForm">

	<h3 class="newsletterForm__title"><?php the_field('newsletter-titre');?></h3>

	<div class="newsletterForm__fields">
        <?php echo do_shortcode('[mc4wp_form id="173"]'); ?>
	</div>

</div>

<section class="templateBlog">

    <div class="templateBlog__container">
		<?php
		if($the_query->have_posts()) {
			while ($the_query->have_posts() )
			{
				$the_query->the_post();
		?>
		<article class="templateBlog__article">
			<?php
				if(has_post_thumbnail())
				{
					echo '<div class="img">';
					the_post_thumbnail("thumbnail_new_homepage");
					echo '</div>';
				}
			?>
			<h5 class="templateBlog__articleTitle"><?php the_title(); ?></h5>
			<div class="templateBlog__articleDescription">
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


<div class="tweets">
	<?php dynamic_sidebar( 'sidebar-twitter' ); ?>
</div>

<?php
if( have_rows('flexible_bottom') )
{
     // loop through the rows of data
    while ( have_rows('flexible_bottom') )
    {
    	the_row();
    	$layout = get_row_layout();
    	include get_template_directory() . '/views/flexible-parts/'. $layout . '.php';
    }
}
?>

<div class="socials">
	<h4 class="socials__title">Nous rejoindre sur les réseaux sociaux</h4>
	<?php dynamic_sidebar( 'sidebar-social' ); ?>
</div>

<!-- FAFA -->
<script type="text/javascript">
  window.onload = function () {
    var params = {};
    params[FB.AppEvents.ParameterNames.CONTENT_TYPE] = 'Home Page';
    FB.AppEvents.logEvent(
      FB.AppEvents.EventNames.VIEWED_CONTENT,
      null,
      params
    );
  }
</script>
<!-- // FAFA -->

<?php get_footer(); ?>
