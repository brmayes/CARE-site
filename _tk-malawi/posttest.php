<?php
/**
 * Template Name: PostTest
 *
 *
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php _tk_content_nav( 'nav-below' ); ?>

	<?php endwhile; // end of the loop. ?>
        
        <p>TEST</p>

<?php get_footer(); ?>