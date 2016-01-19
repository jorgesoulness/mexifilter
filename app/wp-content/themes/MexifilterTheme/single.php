<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage mexifilter
 * @since Mexifilter Theme 1.0
 */

get_header(); ?>

	<main>
			<section id="productosContent">
				<div class="prodTitle" data-enllax-ratio=".1" data-enllax-direction="horizontal">
					<div class="generiContent sectionMiddle">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 boxWhite roundedAll wow fadeInRight">
									<h2>Nuestros Productos</h2>
									<p>Contamos con el personal técnico con experiencia en los procesos más innovadores de tratamiento y uso del agua. Somos distruibuidores de todo tipo de suminitros para el mejor purificado de liquidos, mexifilter aporta a la salud y bienestar de tu familia.</p>
									<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="">Contacto</a>
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

				<?php while ( have_posts() ) : the_post(); ?>

						<div class="row">
							<div class="col-md-12">
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div>
						</div><!-- end.row -->
						<div class="clear h30"></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<figure class="interna roundedAll">
									<?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('full'); ?><?php } else { ?><img src="<?php echo get_template_directory_uri(); ?>/img/not-image-default.jpg" alt="<?php the_title(); ?>">
						<?php } ?>
								</figure>
							</div>
							<div class="col-md-6 col-sm-6">
								<h2>Características</h2>
								<!-- <p>Estas son las caracteriticas que se mostraran en el wordpres...en el cual llevarán información de cada producto.</p>
								<ul>
									<li>Resistente</li>
									<li>Económico</li>
									<li>Durabilidad alta</li>
									<li>Reforzado</li>
									<li>Lorem ipsum</li>
								</ul> -->
								<?php the_field('caracteristcias_del_procuto'); ?>
								<div class="clear h20"></div>
								<?php $file = get_field('pdf_ficha_tecnica'); if( $file ): ?>
								<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="<?php echo $file['url']; ?>"><i class="fa fa-file-pdf-o"></i> Descarga ficha técnica</a>
							    <?php endif; ?>
							</div><!-- end.caraterísticasdelProducto -->
						</div><!-- end.row -->

				<?php endwhile; ?>

						<div class="clear h30"></div>
						<div class="row">
							<div class="col-md-12">
								<h2>Otros Productos</h2>
								<?php query_posts('category_name=productos&order_by=DESC&post_per_page=-1'); ?>
								<ul class="sliderProd">
									<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						            <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></li>
						            <?php endwhile; else: ?>
						            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/algunprod.jpg" alt="Producto"></a></li>
						        	<?php endif; ?>
					            </ul>
					            <?php wp_reset_query(); ?>
							</div><!-- end.SliderInternoProductos -->
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
									<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="contacto/">Contacto</a>
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				</div><!-- end.NosotrosBanner -->
			</section><!-- end.DudasProductos -->
		</main><!-- end.Main -->

<?php
get_footer();
