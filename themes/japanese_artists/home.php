<?php
/**
 * The homepage template file
 * 
 * Template Name: Home
 *
 * @package japanese_artists
 */
?>

<?php get_header(); ?>

<!-- Body -->
<div class="home">

    <?php

        while ( have_posts() ) :
            the_post();
           
            get_template_part( 'template-parts/content', 'page' );
           
                       
        endwhile; // End of the loop.
    ?>
   
</div>



<?php get_footer(); ?>