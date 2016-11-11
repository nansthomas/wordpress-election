<?php get_header(); ?>

<div class="content">
    <h1>hello</h1>
    <?php while ( have_posts() ) : the_post(); ?> 
    <?php the_content(); ?>
</div> <!-- /content -->
    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
<?php get_footer(); ?>