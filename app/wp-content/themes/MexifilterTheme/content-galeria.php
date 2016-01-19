			
			<section id="galeriaCont">

				<div class="galeriaTitle" data-enllax-ratio=".1" data-enllax-direction="horizontal">
					<div class="generiContent sectionMiddle">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 wow fadeInRight">
									<h2><?php the_title(); ?></h2>
									<!-- <p>Los mejores productos y todo lo relacionado a la filtración sólo en mexifilter. Papel filtro, cartuchos, filtros de aire y más, contáctanos y pregunta por nuestros materiales.</p> -->
									<?php the_content(); ?>
									<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="<?php the_field('liga'); ?>">Contacto</a>
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				</div><!-- end.service -->
		        
		        <div class="Collage effect-parent">
		        <?php query_posts('category_name=galeria&order_by=DESC&posts_per_page=-1'); ?>
		        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

		        	<div class="Image_Wrapper" data-caption="<?php the_content(); ?>"><?php if ( has_post_thumbnail() ) { ?><?php the_post_thumbnail('full'); ?><?php } else { ?><img src="<?php echo get_template_directory_uri(); ?>/img/not-image-default.jpg" alt="<?php the_title(); ?>">
						<?php } ?></a>
			        </div>

			    <?php endwhile; else: ?>

			        <div class="Image_Wrapper">
			            <a><img src="<?php echo get_template_directory_uri(); ?>/img/not-image-default.jpg"></a>
			        </div>

			    <?php endif; ?>
			    <?php wp_reset_query(); ?>

			        <!-- <div class="Image_Wrapper" data-caption="Tiutlo 2">
			            <a><img src="<?php echo CARPETA; ?>img/galeria/galeria-2.png"></a>
			        </div>

			        <div class="Image_Wrapper" data-caption="Tiutlo 3">
		            	<a><img src="<?php echo CARPETA; ?>img/galeria/galeria-5.png"></a>
			        </div>

			        <div class="Image_Wrapper">
			            <a><img src="<?php echo CARPETA; ?>img/galeria/galeria-4.png"></a>
			        </div>

			        <div class="Image_Wrapper" data-caption="Tiutlo 3">
			            <a><img src="<?php echo CARPETA; ?>img/galeria/galeria-6.png"></a>
			        </div>

			        <div class="Image_Wrapper" data-caption="Tiutlo 4">
			            <a><img src="<?php echo CARPETA; ?>img/galeria/galeria-7.png"></a>
			        </div>

			        <div class="Image_Wrapper">
			            <a><img src="<?php echo CARPETA; ?>img/galeria/galeria-3.png"></a>
			        </div>

			        <div class="Image_Wrapper" data-caption="Tiutlo 2">
			            <a><img src="<?php echo CARPETA; ?>img/galeria/galeria-2.png"></a>
			        </div>

			        <div class="Image_Wrapper" data-caption="Tiutlo 3">
		            	<a><img src="<?php echo CARPETA; ?>img/galeria/galeria-5.png"></a>
			        </div>

			        <div class="Image_Wrapper">
			            <a><img src="<?php echo CARPETA; ?>img/galeria/galeria-4.png"></a>
			        </div> -->
		        </div><!-- end.galeria -->

			</section><!-- end.Galeriacontent -->