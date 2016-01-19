<?php
/**
 * The template for displaying Category pages
 *
 *
 * @package WordPress
 * @subpackage mexifilter
 * @since Mexifilter Theme 1.0
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
		<main>
			<section id="productosContent">
				<div class="prodTitle" data-enllax-ratio=".1" data-enllax-direction="horizontal">
					<div class="generiContent sectionMiddle">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 boxWhite roundedAll wow fadeInRight">
									<h2>Nuestros Productos</h2>
									<p>Contamos con el personal técnico con experiencia en los procesos más innovadores de tratamiento y uso del agua. Somos distruibuidores de todo tipo de suminitros para el mejor purificado de liquidos, mexifilter aporta a la salud y bienestar de tu familia.</p>
									<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="contacto/">Contacto</a>
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				</div><!-- end.NosotrosBanner -->
			</section><!-- end.TitleProductos -->

			<section id="prodDetail">

				<div id="CategoriasCont" class="listCategory hide-nav">
					<a id="openMenuCat" class="btnList"><i class="fa fa-list-ul"></i></a>
					<h2>Categorías</h2>
					<div class="clear"></div>
					<ul>
						<?php wp_list_categories('orderby=name&exclude=3,6&title_li='); ?>
					</ul>
				</div><!-- end.litadoCategorías -->

				<div class="generiContent listadoProd">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2><?php printf( __( 'Categoría: %s', 'mexifilter' ), single_cat_title( '', false ) ); ?></h2>
								<?php echo term_description( $term_id, $taxonomy ) ?>
							</div>
							<div class="clear h30"></div>
							<div class="col-md-12">
								<div class="row">

								<?php while (have_posts()) : the_post(); ?>

									<div class="col-md-4 centerText">
										<figure class="roundedAll">
											<?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('full'); ?><?php } else { ?><img src="<?php echo get_template_directory_uri(); ?>/img/not-image-default.jpg" alt="<?php the_title(); ?>">
						<?php } ?>
											<figcaption>
												<h4><?php the_title(); ?></h4>
												<p>Ver producto</p> 
												<a href="<?php the_permalink(); ?>">Ver ahora</a>
											</figcaption>
										</figure>
										<div class="clear h20"></div>
										<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="<?php the_permalink(); ?>">Leer más</a>
										<div class="clear h10"></div>
									</div>

								<?php endwhile; ?>

								</div>
							</div>
						</div><!-- end.row -->
					</div><!-- end.container -->
				</div><!-- end.genericcontent -->
			</section><!-- end.ResultadoDetalles -->

			<section id="dudadProdContent">
				<div class="prodDudas" data-enllax-ratio="-.1" data-enllax-direction="horizontal">
					<div class="generiContent sectionMiddle">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 boxWhite roundedAll wow fadeInRight">
									<h2>¿Dudas sobre algún producto?</h2>
									<p>Contáctanos al teléfono 01-55-5359-0882 o llena el siguiente formulario</p>
									<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="">Contacto</a>
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				</div><!-- end.NosotrosBanner -->
			</section><!-- end.DudasProductos -->
		</main><!-- end.Main -->

		<?php else :

		get_template_part( 'content', 'none' );

		endif;
		?>

<?php get_footer(); ?>