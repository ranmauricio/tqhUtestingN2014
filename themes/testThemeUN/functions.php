<?php

function obtener_noticias(){
    $noticias = query_posts('cetegory_name=Noticias');
    return $noticias;
}

function obtener_imagen_post($content){
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
    $imagen = $matches[1][0];
    return $imagen;
}


?>