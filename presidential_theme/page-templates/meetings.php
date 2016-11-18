<?php
	/*
	Template Name: Page meetings
	*/

	get_header();
?>

<h1 class="meetings__title">Meetings à venir</h1>

<section class="templateBlog">

    <div class="templateBlog__container">

		<?php
		$args = array(
			'post_type' => 'meeting',
		);

		 	$the_query = new WP_Query( $args );

			if ( $the_query->have_posts() ) {
				while($the_query->have_posts() ) {
					$the_query->the_post();
		?>
		<article class="templateBlog__article">
			<?php
				if(has_post_thumbnail())
				{
					echo '<div class="img">';
					the_post_thumbnail("thumbnail_meetingpage");
					echo '</div>';
				}
			?>
			<h5 class="templateBlog__articleTitle"> <a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></h5>
			<h5 class="templateBlog__articleDate"> <a href=" <?php the_permalink(); ?> "><?php the_field('date'); ?></a></h5>
		</article>
		<?php
			}
			// restore original post data
			wp_reset_postdata();
		}
		?>
	</div>

</section>
<!-- FAFA -->
<script type="text/javascript">
  window.onload = function () {
    var params = {};
    params[FB.AppEvents.ParameterNames.CONTENT_TYPE] = 'All Meetings';
    FB.AppEvents.logEvent(
      FB.AppEvents.EventNames.VIEWED_CONTENT,
      null,
      params
    );
  }
  var subscribeMeeting = document.querySelector('#nf-field-9');
  subscribeMeeting.addEventListener('click', function () {
    console.log('SUBSCRIBE SEND');
    FB.AppEvents.logEvent('SUBSCRIBE_MEETING');
  });
</script>

<!-- // FAFA -->

<?php get_footer(); ?>
