<?php
/**
 * @package _tk
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<a class="thumbnail" href="<?php the_permalink(); ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) {
		the_post_thumbnail("small");	} ?></a>

	
</article><!-- #post-## -->
