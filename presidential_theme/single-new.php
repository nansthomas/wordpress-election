
<?php get_header(); 

	if ( have_posts() ) {
		while(have_posts() ) {
			the_post();
			if(has_post_thumbnail())
			{ ?>
				<section class="largeHeader" style="background-image: url('<?php the_post_thumbnail_url("thumbnail_new_full"); ?>')">;
				<div class="largeHeader__layer"></div>
			<?php } ?>

<!-- set up the main image of the article in the attribute style -->
    
			    <div class="largeHeader__content">
					<h1 class="largeHeader__title"><?php the_title(); ?></h1>
					<h3 class="largeHeader__subtitle"><?php the_field('sous-titre'); ?></h3>
					<h4><?php the_time('j F Y'); ?></h4>
				</div>


			</section>

			<div class="articleContent"><?php the_content(); ?></div>
			<div class="sharing">
					<?php dynamic_sidebar( 'sidebar-social-share' ); ?>
			</div>
<?php
		}
	}
?>
<?php get_footer(); ?>
