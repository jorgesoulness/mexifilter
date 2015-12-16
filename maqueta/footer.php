        
        <footer>
            <div class="generiContent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 logoFooter">
                            <a href=""><img src="<?php echo CARPETA; ?>img/logo_footer.png" alt="Mexifilter"></a>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <p>Dirección: Democracias #48 Col. San Miguel Amantla<br>C.P 02700  Azcapotzalco, México D.F</p>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <ul>
                                <li><i class="fa fa-phone"></i> Tel. 01 55 5359.0882</li>
                                <li><i class="fa fa-mobile"></i> Tel. 01 55 5359.0882</li>
                                <li><i class="fa fa-envelope-o"></i> Tel. 01 55 5359.0882</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- end.Footer -->
        
        </div>

        <script src="<?php echo CARPETA; ?>js/vendor/jquery-2.1.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo CARPETA; ?>js/vendor/jquery-2.1.4.min.js"><\/script>')</script>
        <script src="<?php echo CARPETA; ?>js/vendor/jquery.easing.1.3.js"></script>
        <script src="<?php echo CARPETA; ?>js/vendor/jquery.animate-enhanced.min.js"></script>
        <script src="<?php echo CARPETA; ?>js/plugins/bootstrap.min.js"></script>
        <script src="<?php echo CARPETA; ?>js/plugins/wow.min.js"></script>
        <script src="<?php echo CARPETA; ?>js/plugins/jquery.enllax.min.js"></script>
        <script src="<?php echo CARPETA; ?>js/plugins/jquery.superslides.min.js"></script>
        <script src="<?php echo CARPETA; ?>js/plugins/jquery.bxslider.min.js"></script>
        <script src="<?php echo CARPETA; ?>js/plugins.js"></script>
        <script src="<?php echo CARPETA; ?>js/main.js"></script>
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