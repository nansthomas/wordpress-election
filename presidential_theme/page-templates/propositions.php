
<?php
	/*
	Template Name: Page propositions
	*/

get_header();

?>

<h1 class="propositions__title">
	<a href="https://nans.ninja/wp-election/propositions/"><?php the_field('titre'); ?></a>
</h1>
<p class="proposition__text"><?php the_field('texte_introductif'); ?></p>
<?php
$terms = get_terms( 'categorie-proposition', 'orderby=count&hide_empty=0' );
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	    echo '<ul class="propositions__choice">';
	    foreach ( $terms as $term ) {
	        echo '<li class="proposition" domaine="' . $term->slug . '">' . $term->name . '</li>';
	    }
	    echo '</ul>';
	}
?>

<div class="propositionsList">

	<?php

		$args = array( 'post_type' => "proposition",
				'posts_per_page' => -1,
			);

		$the_query = new WP_Query( $args );
		echo "<ul class='propositionsList__items'>";
		if ( $the_query->have_posts() ) {
			while( $the_query->have_posts() ) {
				$the_query->the_post();
				echo "<li class='propositionsList__item'>";
				// Get the taxonomy for the post
				echo '<span class="propositionsList__itemTaxo" >';
				the_terms( get_the_ID(), 'categorie-proposition');
				echo '</span>';
	    		// Display proposition
	    		echo "<span class='propositionsList__itemTitle' >";
	    		the_title();
	    		echo "</span></li>";
			}
		}
		echo "</ul>";

	?>

</div>

<!-- FAFA -->
<script type="text/javascript">
  window.onload = function () {
    var params = {};
    params[FB.AppEvents.ParameterNames.CONTENT_TYPE] = 'Proposition Page';
    FB.AppEvents.logEvent(
      FB.AppEvents.EventNames.VIEWED_CONTENT,
      null,
      params
    );
  }
</script>
<!-- // FAFA -->

<?php get_footer(); ?>
