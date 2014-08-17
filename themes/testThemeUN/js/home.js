$(document).on("click",".show-noticia",function(){
    var noticiaTitulo = $(this).data('titulo');
    var noticiaContenido = $(this).data('contenido');
    $('.modal-body #titulo-modal-noticia').text(noticiaTitulo);
    $('.modal-body #contenido-modal-noticia').html(noticiaContenido);
    
});