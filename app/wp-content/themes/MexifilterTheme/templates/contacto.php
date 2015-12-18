		
		<main>
			<section id="contactoContent">
				<div class="overlayBlue"></div>
				<div class="generiContent sectionMiddle">
					<div class="container">
						<div class="row">
							<div data-wow-delay="0.6s" class="col-md-6 col-sm-6 contactoForm wow fadeInLeft">
								<h2>Contacto</h2>
								<form name="formContact" id="formContact" method="post" action="">
								 	<div class="form-group">
								    	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
								  	</div>
								  	<div class="form-group">
								    	<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
								  	</div>
								  	<div class="form-group">
								    	<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								  	</div>
								  	<div class="form-group">
								    	<input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto">
								  	</div>
								  	<div class="form-group">
								  		<textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" rows="3"></textarea>
								  	</div>
								  	<button type="submit" class="btn btn-primary">Enviar formulario</button>
								</form>
								<div class="clear h20"></div>
								<p class="bg-success">Mensaje envíado correctamente</p>
							</div><!-- end.FormContacto -->
							<div data-wow-delay="0.8s" class="col-md-6 col-sm-6 wow fadeInRight">
								<img class="centerImg" src="<?php echo CARPETA; ?>img/contactCircle.png" alt="Contacto">
								<p>En mexifilter queremos atenderte de la mejor forma, contactános a los teléfonos y correo indicados, con gusto responderemos cualquier duda.</p>
							</div><!-- end.infoContacto -->
						</div><!-- end.row -->
					</div><!-- end.container -->
				</div><!-- end.generiContent -->
			</section><!-- end.ContactoContent -->
		</main><!-- end-main -->