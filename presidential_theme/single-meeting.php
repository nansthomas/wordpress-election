
<?php
 acf_form_head();
 get_header(); 

	if ( have_posts() ) {
		while(have_posts() ) {
			the_post();
			if(has_post_thumbnail())
			{ ?>
				<section class="largeHeader" style="background-image: url('<?php the_post_thumbnail_url("thumbnail_new_full"); ?>')">
				<div class="largeHeader__layer"></div>
			<?php } ?>

<!-- set up the main image of the article in the attribute style -->
    
			    <div class="largeHeader__content">
					<h1 class="largeHeader__title"><?php the_field('ville')?></h1>
					<h3 class="largeHeader__subtitle"><?php the_field('date'); ?></h3>
					<h4><?php the_field('adresse'); ?></h4>
					<h5><?php the_field('heure'); ?></h5>
				</div>
<?php
		}
	}
?>

			</section>
			
			<h2>Réservez votre place</h2>

			<section class="reservation">
				
			<iframe class="map" height="400"
			frameborder="0"
			src="https://www.google.com/maps/embed/v1/search?q=<?php echo get_field('adresse').' '.get_field('ville'); ?>&key=AIzaSyATj2xDYI8V_JZtWs0irnKq4GmorB84F_0" allowfullscreen>
			</iframe>
			<?php
			acf_form(array(
				'post_id'		=> 'new_post',
				'post_title'	=> 'billet',
				'post_content'	=> false,
				'new_post'		=> array(
					'post_type'		=> 'billet',
					'post_status'	=> 'publish'
				),
				'submit_value'	=> 'Send'
			));

			?>	
			</section>
<?php get_footer(); ?>
