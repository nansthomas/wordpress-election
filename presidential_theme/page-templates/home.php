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

<form class="newsletterForm">
	<h3 class="newsletterForm__title"><?php the_field('newsletter-titre');?></h3>
	<div class="newsletterForm__fields">
	        <!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		<form action="//nansthomas.us14.list-manage.com/subscribe/post?u=db095afda9eb2230fb8694eb1&amp;id=fab50def93" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
		<div class="mc-field-group">
			<label for="mce-EMAIL"><span class="asterisk">*</span>
		</label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_db095afda9eb2230fb8694eb1_fab50def93" tabindex="-1" value=""></div>
		    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		    </div>
		</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
	</div>
</form>

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

<?php get_footer(); ?>