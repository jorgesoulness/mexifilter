        <div class="footer">
    <div id="part6">
	<div class="container">
		<div class="span12 back-to-top">
			<a href="#home" id="home-top"><img class="back-to-top-1" src="<?php echo CARPETA; ?>img/back-to-top.png" alt="Go back to top" /><img class="back-to-top-2" src="<?php echo CARPETA; ?>img/back-to-top-hover.png" alt="Go back to top" /></a>
		</div>
		<div class="row">
			<div class="span12">
			<p class="footer-social">				
				<a href="#" title="Facebook" data-gal="tooltip" data-placement="top" data-original-title="Facebook"><span class='symbol'>&#xe227;</span></a>
				<a href="#" title="Twitter" data-gal="tooltip" data-placement="top" data-original-title="Twitter"><span class='symbol'>&#xe286;</span></a>
				<a href="#" title="Pinterest" data-gal="tooltip" data-placement="top" data-original-title="Pinterest"><span class='symbol'>&#xe264;</span></a>
				<a href="#" title="Skype" data-gal="tooltip" data-placement="top" data-original-title="Skype"><span class='symbol'>&#xe274;</span></a>
				<a href="#" title="Flickr" data-gal="tooltip" data-placement="top" data-original-title="Flickr"><span class='symbol'>&#xe229;</span></a>
				<a href="#" title="Google Plus" data-gal="tooltip" data-placement="top" data-original-title="Google Plus"><span class='symbol'>&#xe239;</span></a>
				<a href="#" title="Picassa" data-gal="tooltip" data-placement="top" data-original-title="Picassa"><span class='symbol'>&#xe263;</span></a>
				<a href="#" title="Linkedin" data-gal="tooltip" data-placement="top" data-original-title="Linkedin"><span class='symbol'>&#xe252;</span></a>
				<a href="#" title="Youtube" data-gal="tooltip" data-placement="top" data-original-title="Youtube"><span class='symbol'>&#xe299;</span></a>
				<a href="#" title="Instagram" data-gal="tooltip" data-placement="top" data-original-title="Instagram"><span class='symbol'>&#xe300;</span></a>
			</p>
			</div>
		</div>
	</div>
	</div>
	</div>
	
    </div> <!-- /map-content -->
 
	<!-- Javascript -->


        <script src="<?php echo CARPETA; ?>js/vendor/jquery-2.1.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo CARPETA; ?>js/vendor/jquery-2.1.4.min.js"><\/script>')</script>
        <script type="text/javascript" src="<?php echo CARPETA; ?>bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo CARPETA; ?>js/device.min.js"></script>
		<script type="text/javascript" src="<?php echo CARPETA; ?>js/jquery.countdown.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="<?php echo CARPETA; ?>js/jquery.gmap.min.js"></script>
		<script type="text/javascript" src="<?php echo CARPETA; ?>js/jquery.scrollTo-1.4.3.1-min.js"></script>
		<script type="text/javascript" src="<?php echo CARPETA; ?>js/twitterfeed.js"></script>
		<script type="text/javascript" src="<?php echo CARPETA; ?>js/fss.js"></script>
		<script type="text/javascript" src="<?php echo CARPETA; ?>js/scripts.js"></script>
		<script type="text/javascript" src="<?php echo CARPETA; ?>js/canvas.js"></script>
        <?php if(isset($_GET['sec']) && $_GET['sec'] != '') { ?><script src="<?php echo CARPETA; ?>js/scripts/<?php echo $_GET['sec'].'.js'; ?>"></script>
        <?php } else { ?><script src="<?php echo CARPETA; ?>js/scripts/inicio.js"></script><?php } ?><!-- ScriptCustom -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>