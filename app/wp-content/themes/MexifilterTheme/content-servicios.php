		
			<section id="serviciosContent">

				<div class="service" data-enllax-ratio=".1" data-enllax-direction="horizontal">
					<div class="generiContent sectionDown">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 boxWhite wow fadeInRight">
									<h2><?php the_title(); ?></h2>
									<?php the_content(); ?>
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				</div><!-- end.service -->

<?php if( have_rows('servicios_contenido') ): ?> 

			<?php while ( have_rows('servicios_contenido') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'bloque_1' ): ?>

				<div class="venta">
					<div class="generiContent">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-sm-6 wow fadeInLeft">
									<h2><?php the_sub_field('titulo'); ?></h2>
									<p><?php the_sub_field('descripcion'); ?></p>
								</div>
								<div data-wow-delay="0.8s" class="col-md-6 col-sm-6 wow bounceIn">
								<?php $imagen = get_sub_field('imagen'); if(!empty($imagen)) : ?>
									<img class="centerImg" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>">
								<?php endif; ?>
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				</div><!-- end.Venta -->

				<?php endif; ?>
			<?php endwhile; ?>

			<?php while ( have_rows('servicios_contenido') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'bloque_2' ): ?>

				<div class="soporteCont" data-enllax-ratio=".1" data-enllax-direction="vertical">
					<div class="generiContent">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 boxWhite wow fadeInRight">
									<h2><?php the_sub_field('titulo'); ?></h2>
									<p><?php the_sub_field('descripcion'); ?></p>
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				<?php $imagen_1 = get_sub_field('imagen'); if(!empty($imagen_1)) : ?>
					<img data-wow-delay="0.8s" class="imgSoprte hidden-xs wow bounceIn" src="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_1['alt']; ?>"><!-- end.img -->
				<?php endif; ?>
				</div><!-- end.soporte -->

				<?php endif; ?>
			<?php endwhile; ?>

			<?php while ( have_rows('servicios_contenido') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'bloque_3' ): ?>

				<div class="asesoriaCont">
					<div class="generiContent">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-sm-6 wow fadeInLeft">
									<h2><?php the_sub_field('titulo'); ?></h2>
									<p><?php the_sub_field('descripcion'); ?></p>
								</div>
								<div data-wow-delay="0.8s" class="col-md-6 col-sm-6 wow bounceIn">
								<?php $imagen_2 = get_sub_field('imagen'); if(!empty($imagen_2)) : ?>
									<img class="centerImg" src="<?php echo $imagen_2['url']; ?>" alt="<?php echo $imagen_2['alt']; ?>">
								<?php endif; ?>
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				</div><!-- end.Venta -->

				<?php endif; ?>
			<?php endwhile; ?>

<?php else: ?>

				<div class="asesoriaCont">
					<div class="generiContent">
						<div class="container">
							<div class="row">
								<div data-wow-delay="0.4s" class="col-md-6 col-sm-6 wow fadeInLeft">
									<h2>UPSSSSS!</h2>
									<p>No se econtraron datos.</p>
								</div>
								<div data-wow-delay="0.8s" class="col-md-6 col-sm-6 wow bounceIn">
									<img class="centerImg" src="<?php echo get_template_directory_uri(); ?>/img/garantiaservicios.jpg" alt="">
								</div>
							</div><!-- end.row -->
						</div><!-- end.container -->
					</div><!-- end.genericcontent -->
				</div><!-- end.Venta -->

<?php endif; ?>
				
			</section><!-- end.Servicios -->