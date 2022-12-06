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
           
		    the_content();

           
                       
        endwhile; // End of the loop.
    ?>
   
</div>



<?php get_footer(); ?>