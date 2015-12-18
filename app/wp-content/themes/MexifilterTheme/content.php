<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage mexifilter
 * @since Mexifilter Theme 1.0
 */
?>
			<?php query_posts('category_name=slider-principal&order_by=DESC&posts_per_page=-1'); ?>
			<section id="headeCont" role="heading">
                <div class="loading-container">
                    <div class="pulse"></div>
                </div><!-- end.loadSlide -->
                <div class="wide-heigSlider">
                    <div id="slides">
                        <div class="slides-container">
                        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
                            <li>
                                <?php the_post_thumbnail('full'); ?>
                                <div class="slideContainer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_mexi_slide.png" alt="Mexifiler oficial">
                                                <?php the_content(); ?>
                                                <a data-wow-delay="1.0s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="">Contacto</a>
                                            </div><!-- end.infoSlide -->
                                        </div><!-- end.row -->
                                    </div><!-- end.container -->
                                </div>
                            </li><!-- end.slide -->
                        <?php endwhile; else: ?>
                            <li>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/slider_home/Slide_home2.jpg" alt="Surly">
                                <div class="slideContainer">
                                    <div class="container"> 
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-6 col-md-offset-6">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_mexi_slide.png" alt="">
                                                <p>No se encontrarón datos en el slider.</p>
                                            </div><!-- end.infoSlide -->
                                        </div><!-- end.row -->
                                    </div><!-- end.container -->
                                </div>
                            </li><!-- end.slide -->
                        <?php endif; ?>
                        </div><!-- end.imgSlider -->
        
                        <nav class="slides-navigation">
                          <a href="#" class="next"><i class="fa fa-chevron-right"></i></a>
                          <a href="#" class="prev"><i class="fa fa-chevron-left"></i></a>
                        </nav><!-- end.navSlider -->
                    </div><!-- end.SliderHome -->
                </div>
            </section><!-- end.SectionSlider -->
            <?php wp_reset_query(); ?>

<?php if( have_rows('contenido_inicio') ): ?>

			<section id="experiencia" data-enllax-ratio=".1" data-enllax-direction="horizontal">
				<div class="shapeDown"></div><!-- end.shapeDown -->
				
					<div class="story up">
                        <div class="container">
                            <div class="row">

                            <?php while ( have_rows('contenido_inicio') ) : the_row(); ?>
                            	<?php if( get_row_layout() == 'bloque_1' ): ?>

                                <div data-wow-delay="0.4s" class="col-sm-6 col-md-6 wow fadeInLeft">
                                    <h2><?php the_sub_field('titulo'); ?></h2>
                                    <p><?php the_sub_field('descripcion'); ?></p>
                                    <a class="btn btn-primary btn_mxGenerci" href="<?php the_sub_field('boton_generico'); ?>">Productos</a>
                                </div>
                                <div data-wow-delay="0.8s" class="col-sm-6 col-md-6 hidden-xs wow bounceIn">
                                <?php $image = get_sub_field('imagen'); if($image): ?>
	                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	                            <?php endif; ?>
                                </div>

                                <?php endif; ?>
                            <?php endwhile; ?>

                            </div><!-- end.row -->
                        </div><!-- end.container -->
                    </div><!-- end.story -->
                    
                    <div class="story down">
                        <div class="container">
                            <div class="row">

                            <?php while ( have_rows('contenido_inicio') ) : the_row(); ?>
                            	<?php if( get_row_layout() == 'bloque_2' ): ?>

                                <div data-wow-delay="0.8s" class="col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6 wow fadeInRight">
                                    <h2><?php the_sub_field('titulo'); ?></h2>
                                    <p><?php the_sub_field('descripcion'); ?></p>
                                    <a class="btn btn-primary btn_mxGenerci" href="<?php the_sub_field('boton_generico'); ?>">Productos</a>
                                </div>

                            	<?php endif; ?>
                            <?php endwhile; ?>

                            </div><!-- end.row -->
                        </div><!-- end.container -->
                    </div><!-- end.story -->

                    <div class="overlayGray"></div>
                    
			</section><!-- end.Experiencia -->
			
			<section id="garantia" data-enllax-ratio="-.1" data-enllax-direction="horizontal">
				<div class="overlayGray"></div>
				<div class="generiContent">
					<div class="container">
						<div class="row">

						<?php while ( have_rows('contenido_inicio') ) : the_row(); ?>
                            	<?php if( get_row_layout() == 'bloque_3' ): ?>

							<div data-wow-delay="0.6s" class="col-md-4 wow fadeInLeft">
								<h2><?php the_sub_field('titulo'); ?></h2>
                                <p><?php the_sub_field('descripcion'); ?></p>
								<a class="btn btn-primary btn_mxGenerci" href="<?php the_sub_field('boton_generico'); ?>">Contacto</a>
							</div><!-- end.InfoGarantia -->

							<?php endif; ?>
                        <?php endwhile; ?>

						</div><!-- end.row -->
					</div><!-- end.container -->
				</div><!-- end.genericContent -->
			</section><!-- end.garantia -->
			
			<section id="clientes">
				<div class="generiContent">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h2 data-wow-delay="0.8s" class="wow fadeInDown">Clientes</h2>
							</div>
						</div><!-- end.rowTíttulo -->
                        <div class="clear h30"></div>
						<div class="row">

						<?php $arrSegundoss = array('0.2', '0.4', '0.6', '0.8'); $b = 6;  while ( have_rows('contenido_inicio') ) : the_row(); ?>
                            	<?php if( get_row_layout() == 'clientes' ): ?>
								
							<?php $images = get_sub_field('logo_de_clientes'); if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								<?php if($i < 4) { $i++; } else { $i=0; } ?>
							<div data-wow-delay="<?php echo $arrSegundoss[$i]; ?>s" class="col-xs-6 col-sm-3 col-md-3 wow fadeIn">
								<a class="hvr-bounce-in" href=""><img class="centerImg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
							</div><!-- end.cliente -->
							<?php endforeach; ?>
							<?php endif; ?>

                        	<?php endif; ?>
                        <?php endwhile; ?>
							
						</div><!-- end.clientesImgs -->
					</div><!-- end.container -->
				</div><!-- end.GenericContent -->
			</section><!-- end.clientes -->

            <section id="testimonios" data-enllax-ratio=".5" data-enllax-direction="horizontal">
                <div class="overlayBlue"></div>
                <div class="generiContent">
                    <div class="container">
                        <div class="row">

                        <?php while ( have_rows('contenido_inicio') ) : the_row(); ?>
                            	<?php if( get_row_layout() == 'testimonios' ): ?>

                            <div data-wow-delay="0.8s" class="col-md-8 col-md-offset-2 wow bounceIn">
                                <h2>Testimonios</h2>
                                <?php the_sub_field('descripcion_del_testimonio'); ?>
                            </div><!-- end.Testimonios -->
                        </div><!-- end.row -->

                    		<?php endif; ?>
                    	<?php endwhile; ?>

                    </div><!-- end.container -->
                </div><!-- end.genericContent -->
            </section><!-- end.testimonios -->
            
            <section id="nuestrosServicios">
	            <div class="generiContent">
		            <div class="container">
			            <div class="row">
				            <div data-wow-delay="0.6s" class="col-md-12 wow fadeInUp">
					            <img class="centerImg" src="<?php echo get_template_directory_uri(); ?>/img/grifo.png" alt="Grifo Mexifilter">
					            <h2>Nuestros Servicios</h2>
				            </div><!-- end.TituloServicios -->
				            <div class="clear h30"></div>

				            <?php $i = 1; while ( have_rows('contenido_inicio') ) : the_row(); ?>
                            	<?php if( get_row_layout() == 'servicios' ): ?>

				            <div data-wow-delay="1.0s" class="col-md-4 boxNosotros wow fadeInUp">
					            <figure>
					            <?php $imageServ = get_sub_field('imagen_del_servicio'); if($imageServ): ?>
					            	<img src="<?php echo $imageServ['url']; ?>" alt="<?php echo $imageServ['alt']; ?>">
					            <?php endif; ?>
					            	<figcaption>
					            		<h5><?php echo $i; $i ++; ?></h5>
					            	</figcaption>
					            </figure>
					            <h4><?php the_sub_field('titulo_del_servicio'); ?></h4>
				            </div><!-- end.boxServicios -->

				            	<?php endif; ?>
                    		<?php endwhile; ?>

			            </div><!-- end.row -->
		            </div><!-- end.container -->
	            </div><!-- end.generiContent -->
	            <div class="gradOverlayBottom"></div><!-- end.overlaybottom -->
            </section><!-- end.NuestrosServicios -->
            
            <section id="previewProd">
	            <div class="overlayWhite"></div><!-- end.overlayWhite -->
	            <div class="generiContent">
		            <div class="container">
			            <div class="row">

						 <?php $i = 1; while ( have_rows('contenido_inicio') ) : the_row(); ?>
                            	<?php if( get_row_layout() == 'productos_home' ): ?>

				            <div data-wow-delay="0.6s" class="col-md-12 wow bounceInLeft">
					            <h2><?php the_sub_field('titulo'); ?></h2>
					            <p><?php the_sub_field('descripcion'); ?></p>
				            </div>
				            <div class="clear h30"></div>
				            <div class="col-md-12">
					            <ul class="sliderProd">
						            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/algunprod.jpg" alt="Producto"></a></li>
						            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/algunprod.jpg" alt="Producto"></a></li>
						            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/algunprod.jpg" alt="Producto"></a></li>
						            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/algunprod.jpg" alt="Producto"></a></li>
						            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/algunprod.jpg" alt="Producto"></a></li>
						            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/algunprod.jpg" alt="Producto"></a></li>
					            </ul>
				            </div>
				            <div class="clear h20"></div>
				            <div data-wow-delay="0.8s" class="col-md-4 col-md-offset-4 wow bounceIn">
					            <a class="btn btn-primary btn_mxGenerci" href="<?php the_sub_field('boton_productos'); ?>">Ver todos</a>
				            </div>

				        	<?php endif; ?>
                    	<?php endwhile; ?>

			            </div><!-- end.row -->
		            </div><!-- end.container -->
	            </div><!-- end.genericContent -->
            </section><!-- end.previewProd -->

<?php else: ?>

			<section id="garantia" data-enllax-ratio="-.1" data-enllax-direction="horizontal">
				<div class="overlayGray"></div>
				<div class="generiContent">
					<div class="container">
						<div class="row">
							<div data-wow-delay="0.6s" class="col-md-4 wow fadeInLeft">
								<h2>Upps!!!</h2>
								<p>No hay datos.</p>
							</div><!-- end.InfoGarantia -->
						</div><!-- end.row -->
					</div><!-- end.container -->
				</div><!-- end.genericContent -->
			</section><!-- end.garantia -->

<?php endif; ?>
		