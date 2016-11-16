
<?php get_header(); 

	if ( have_posts() ) {
		while(have_posts() ) {
			the_post();
			if(has_post_thumbnail())
			{ ?>
				<section class="largeHeader" style="background-image: url('<?php the_post_thumbnail_url("thumbnail_new_full"); ?>')">;
			<?php } ?>

<!-- set up the main image of the article in the attribute style -->
    
			    <div class="largeHeader__content">
					<h1 class="largeHeader__title"><?php the_field('ville')?></h1>
					<h3 class="largeHeader__subtitle"><?php the_field('date'); ?></h3>
					<h4><?php the_field('adresse'); ?></h4>
					<h5><?php the_field('heure'); ?></h5>
				</div>


			</section>
			<section class="reservation">
				<h2>Réservez votre place</h2>
					<iframe class="column large-8" height="400"
			frameborder="0" border:0"
			src="https://www.google.com/maps/embed/v1/search?q=<?php echo get_field('adresse').' '.get_field('ville'); ?>&key=AIzaSyCyyuOw5JoEX3cWOAXQesi9PyMXjT3QoI0" allowfullscreen>
			</iframe>
			</section>
<?php
		}
	}
?>
<?php get_footer(); ?>
