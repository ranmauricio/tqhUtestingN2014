<?php get_header(); ?>
	<div class='container main_container'>
	    <!-- slide QUE ES TENEMOS QUE HABLAR-->
	    <?php $page = query_posts('pagename=que-es-tenemosquehablar');?>
        <?php if($page):?>
            <div class="row slide-tqhablar" id="que-es-tenemosquehablar">
            <div class="row">
                <h2><?php echo $page[0]->post_title; ?></h2>
                <p><?php echo $page[0]->post_content; ?></p>
            </div>
		</div>
        <?php endif; ?>
		<!--FIN slide QUE ES TENEMOS QUE HABLAR -->
		<!-- slide DE QUE TENEMOS QUE HABLAR -->
		<?php $page = query_posts('pagename=de-que-tenemosquehablar')?>
		<?php if($page):?>
            <div class="row slide-tqhablar" id="de-que-tenemosquehablar">
               <div class="row">
                  <h2><?php echo $page[0]->post_title; ?></h2>
                  <p><?php echo $page[0]->post_content; ?></p>
               </div>
            </div>
		<?PHP endif?>
		<!-- FIN slide DE QUE TENEMOS QUE HABLAR -->
		<!-- slide COMO VAMOS A HABLAR -->
		<?php $page = query_posts('pagename=como-vamosahablar')?>
		<?php if($page):?>
            <div class="row slide-tqhablar" id="como-vamosahablar">
                <div class="row">
                      <?php $page = query_posts('pagename=como-vamosahablar')?>
                      <h2><?php echo $page[0]->post_title; ?></h2>
                      <p><?php echo $page[0]->post_content; ?></p>

                </div>
            </div>
		<?php endif?>
		<!-- FIN slide COMO VAMOS A HABLAR-->
		<!-- slide Noticias -->
		<div class="row slide-tqhablar" id="noticias">
            <div class="row">
                <?php include('inc/noticiaCarrusel.php') ?>
            <div class="row nextSlide text-center">
                <a href="#home-image">arriba</a>
            </div>
		</div>
		<!-- FIN slide noticias-->
		<!-- slide Videos-->
		<div class="row slide-tqhablar" id="videos">
            <div class="row">
                <h1>Videos</h1>
                <h6>Acá los videos</h6>
            </div>
            <div class="row nextSlide text-center">
                <a href="#noticias">abajo</a>
            </div>
		    
		</div>
		<!-- FIN slide Videos-->
		
		<!-- slide Participa-->
		<div class="row slide-tqhablar" id="contacto">
            <div class="row">
               <?php $contacto = query_posts('pagename=contacto');?>
                <h1>¿Quieres hacer parte de este proyecto? Participa</h1>
                <div class="jumbotron">
                    <p><?php echo $contacto[0]->post_content; ?></p>
                    <?php echo do_shortcode('[contact-form-7 id="43" title="Contact form 1"]'); ?>
                </div>
		    </div>
        </div>
        <!-- FIN slide Participa-->
		    
	</div>
<?php get_footer(); ?>