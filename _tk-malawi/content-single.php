<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="page-title"><?php the_title(); ?></h1>
		
		<div class="entry-meta">
			<?php _tk_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	
	<div class="row">
		<div class="col-md-2 hidden-sm hidden-xs">

		<?php if ( is_single() ) : // navigation links for single posts ?>
			<?php previous_post_link( '%link', '<span class="meta-nav arrows">' . _x( ) . ' <img src="/wp-content/uploads/2015/03/arrow-left.png" alt="arrow" class="arrow-back"> </span>' ); ?>
		<?php endif; ?>
		
		</div>
		<div class="col-md-8">
			<div class="entry-content"><h1>This is content-single.php</h1>
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
		<div class="col-md-2 hidden-sm hidden-xs">
		
		<?php if ( is_single() ) : // navigation links for single posts ?>
			<?php next_post_link( '%link', '<span class="meta-nav arrows">' . _x( ) . ' <img src="/wp-content/uploads/2015/03/arrow-right.png" alt="arrow" class="arrow-next"> </span>' ); ?>	
		<?php endif; ?>
		
		</div>
	</div>
	
	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma 
			$category_list = get_the_category_list( __( ', ', '_tk' ) );

			
			$tag_list = get_the_tag_list( '', __( ', ', '_tk' ) );

			if ( ! _tk_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
				} else { 
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
				}

			} // end check for categories on this blog

			printf( 
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(), 
				the_title_attribute( 'echo=0' ) 
			); */
		?>

		<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
