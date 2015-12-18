<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage mexifilter
 * @since Mexifilter Theme 1.0
 */

get_header(); ?>
        
        <main role="main"><!--ss-->
                
        <?php if ( have_posts() ) : ?>
        
        <?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile; else :

			get_template_part( 'content', 'none' );

		endif;
		?>
		
        </main>


<?php get_footer(); ?>