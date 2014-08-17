<div class="row">
    <div class="col-md-8">
        <h1>Noticias</h1>
    </div>
    <div class="col-md-4">
        <a href="#">Ver todas las noticias</a>
    </div>
</div>
<div class="row">
    <?php 
    $noticias = query_posts('category_name=noticias');
    if(have_posts()): 
    ?>
        <div class="carrusel-noticias">
            <?php while (have_posts()) : the_post();?>
                <div>
                    <a class="show-noticia" data-toggle="modal" data-contenido="<?php echo htmlentities($post->post_content) ?>" data-titulo="<?php echo $post->post_title ?>" href="#myModal">
                        <span>
                            <!-- Imagen -->
                            <img class="imagen-carr-noticia" src="<?php echo obtener_imagen_post($post->post_content); ?>" alt="<?php echo the_title()?>">
                            <!-- FIN Imagen-->
                            <!-- Fecha-->
                            <div class="fecha-carr-noticia">
                                <?php the_time('d/m/y')?>
                            </div>
                            <!-- FIN Fecha-->
                            <!-- Titulo-->
                            <div class="slug-carr-noticia">
                                <h4><?php the_title(); ?></h4>
                            </div>
                            <!-- Fin Titulo -->
                        </span>
                    </a>
                </div>
                <?php endwhile; ?>
        </div>
        <?php else:
            echo('No hay noticias');
        endif;
        ?>
</div>

<!-- Modal presentacion noticia -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body">
                <h1 id="titulo-modal-noticia"></h1>
                <span id="contenido-modal-noticia"></span>
            </div>
        </div>
    </div>
</div>
</div>