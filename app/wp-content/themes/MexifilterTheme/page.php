<?php
/**
 * The template for displaying all pages
 *
 * @package WordPress
 * @subpackage mexifilter
 * @since Mexifilter Theme 1.0
 */

get_header(); ?>

		<main role="main">

		<?php if ( have_posts() ) : ?>
        
        <?php
			// Start the loop.
			while ( have_posts() ) : the_post();
				
            if(is_page('inicio')) {
			get_template_part( 'content', 'inicio' );
            } else if (is_page('nosotros')) {
                  get_template_part( 'content', 'nosotros' );
            } else if (is_page('servicios')) {
                  get_template_part( 'content', 'servicios' );
            } else if (is_page('galeria')) {
                  get_template_part( 'content', 'galeria' );
            } else if (is_page('contacto')) {
                  get_template_part( 'content', 'contacto' );
            } else {
            	'<h2>No existen datos</h2>';
            }

			// End the loop.
			endwhile; else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- end.Main -->

<?php get_footer(); ?>