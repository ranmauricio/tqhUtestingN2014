		<!-- Footer Universidad Nacional-->
		<?php include('inc/footerUN.php');?>
		<!-- FIN Footer Universidad Nacional-->

	<?php wp_footer(); ?>
	<!-- INSERCION DE SCRIPTS-->
	<!-- Carga de Jquery-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script>jQuery(document).ready(function($){$('select','form').selectpicker();})</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/unal.js" type="text/javascript"></script>
	<!-- SCRIPTS DEL PROYECTO-->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/slick.min.js"></script>
	<script>
        $(document).ready(function(){
            $('.carrusel-noticias').slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 5,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/home.js"></script>
</body>
</html