			
				<section id="nosotrosContent">

					<div class="NosotrosTitle" data-enllax-ratio=".1" data-enllax-direction="horizontal">
						<div class="generiContent sectionMiddle">
							<div class="container">
								<div class="row">
									<div data-wow-delay="0.4s" class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 wow fadeInRight">
										<?php the_content(); ?>
										<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="<?php the_field('botonPagina'); ?>">Contacto</a>
									</div>
								</div><!-- end.row -->
							</div><!-- end.container -->
						</div><!-- end.genericcontent -->
					</div><!-- end.NosotrosBanner -->

					<?php if( have_rows('nosotros_contenido') ): ?>

					<div class="noseGenContent">

					<div class="bg_nos_1"></div>

					<?php while ( have_rows('nosotros_contenido') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'bloque_1' ): ?>

					<div class="NosGen">
						<div class="generiContent">
							<div class="container">
								<div class="row">
									<div data-wow-delay="0.4s" class="col-md-6 col-sm-6 wow fadeInLeft">
										<h2><?php the_sub_field('titulo'); ?></h2>
										<p><?php the_sub_field('descripcion'); ?></p>
									</div>
								</div><!-- end.row -->
							</div><!-- end.container -->
						</div><!-- end.genericcontent -->
					</div><!-- end.Nosotros -->
					<?php endif; ?>
					<?php endwhile; ?>

					<?php while ( have_rows('nosotros_contenido') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'bloque_2' ): ?>

					<div class="NosGen">
						<div class="generiContent">
							<div class="container">
								<div class="row">
									<div data-wow-delay="0.4s" class="col-md-6 col-sm-6 wow fadeInLeft">
										<h2><?php the_sub_field('titulo'); ?></h2>
										<p><?php the_sub_field('descripcion'); ?></p>
										<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="<?php the_sub_field('boton_pagina'); ?>">Contacto</a>
									</div>
									<div data-wow-delay="0.8s" class="col-md-6 col-sm-6 wow bounceIn">
									<?php $imagen = get_sub_field('imagen'); if(!empty($imagen)) : ?>
										<figure>
											<img class="centerImg" src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>">
										</figure>
									<?php endif; ?>
									</div>
								</div><!-- end.row -->
							</div><!-- end.container -->
						</div><!-- end.genericcontent -->
					</div><!-- end.Misión -->

					<?php endif; ?>
					<?php endwhile; ?>

					<?php while ( have_rows('nosotros_contenido') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'bloque_3' ): ?>

					<div class="NosGen">
						<div class="generiContent">
							<div class="container">
								<div class="row">
									<div data-wow-delay="0.8s" class="col-md-6 col-sm-6 wow bounceIn">
									<?php $imagen_3 = get_sub_field('imagen'); if(!empty($imagen_3)) : ?>
										<figure>
											<img class="centerImg" src="<?php echo $imagen_3['url']; ?>" alt="<?php echo $imagen_3['alt']; ?>">
										</figure>
									<?php endif; ?>
									</div>
									<div data-wow-delay="0.4s" class="col-md-6 col-sm-6 wow fadeInRight">
										<h2><?php the_sub_field('titulo'); ?></h2>
										<p><?php the_sub_field('descripcion'); ?></p>
										<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="<?php the_sub_field('boton_pagina'); ?>">Contacto</a>
									</div>
								</div><!-- end.row -->
							</div><!-- end.container -->
						</div><!-- end.genericcontent -->
					</div><!-- end.Visión -->

					<?php endif; ?>
					<?php endwhile; ?>

					<?php while ( have_rows('nosotros_contenido') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'bloque_4' ): ?>

					<div class="NosGen">
						<div class="generiContent">
							<div class="container">
								<div class="row">
									<div data-wow-delay="0.4s" class="col-md-6 col-sm-6 wow fadeInLeft">
										<h2><?php the_sub_field('titulo'); ?></h2>
										<p><?php the_sub_field('descripcion'); ?></p>
										<a data-wow-delay="0.6s" class="btn btn-primary btn_mxGenerci wow bounceIn" href="<?php the_sub_field('boton_pagina'); ?>">Contacto</a>
									</div>
									<div data-wow-delay="0.8s" class="col-md-6 col-sm-6 wow bounceIn">
									<?php $imagen_4 = get_sub_field('imagen'); if(!empty($imagen_4)) : ?>
										<figure>
											<img class="centerImg" src="<?php echo $imagen_4['url']; ?>" alt="<?php echo $imagen_4['alt']; ?>">
										</figure>
									<?php endif; ?>
									</div>
								</div><!-- end.row -->
							</div><!-- end.container -->
						</div><!-- end.genericcontent -->
					</div><!-- end.Valores -->

					<?php endif; ?>
					<?php endwhile; ?>

					<div class="bg_nos_2"></div>

					</div>

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

				</section><!-- end.NosotrosContent -->
