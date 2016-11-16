<?php
	/*
	Template Name: Page meetings
	*/

	get_header(); ?>
?>

<h1>Meetings à venir</h1>

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

<?php get_footer(); ?>