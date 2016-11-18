
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
			</section>

			<h2 class="reservation__title">Réservez votre place</h2>

			<section class="reservation">

			<iframe class="map" height="400"
			frameborder="0"
			src="https://www.google.com/maps/embed/v1/search?q=<?php echo get_field('adresse').' '.get_field('ville'); ?>&amp;key=AIzaSyATj2xDYI8V_JZtWs0irnKq4GmorB84F_0" allowfullscreen>
			</iframe>
			<?php
				$form_shortcode = get_field('form_shortcode');
				echo $form_shortcode;
				// echo do_shortcode($form_shortcode);
		}
	}
?>

			</section>
      <!-- FAFA -->
      <script type="text/javascript">
        window.onload = function () {
          var params = {};
          params[FB.AppEvents.ParameterNames.CONTENT_TYPE] = 'Meeting Page';
          params[FB.AppEvents.ParameterNames.CONTENT_ID] = '<?php the_field('ville')?>';
          FB.AppEvents.logEvent(
            FB.AppEvents.EventNames.VIEWED_CONTENT,
            null,
            params
          );
        }
      </script>
      <!-- // FAFA -->
<?php get_footer(); ?>
