
<?php get_header(); 

	if ( have_posts() ) {
		while(have_posts() ) {
			the_post();
?>

			<?php
				if(has_post_thumbnail())
				{
					echo '<section class="largeHeader" style="background-image: url('. the_post_thumbnail("thumbnail_new_full") .')">';
				}
			?>
<!-- set up the main image of the article in the attribute style -->
    
    <div class="largeHeader__content">
		<h1 class="largeHeader__title"><?php the_title(); ?></h1>
		<h3 class="largeHeader__subtitle"><?php get_field('subtitle'); ?></h3>
		<h4><?php the_time('j F Y'); ?></h4>
	</div>


</section>

<div class="articleContent"><?php the_content(); ?></div>

<?php get_footer(); ?>