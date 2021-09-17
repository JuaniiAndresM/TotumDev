function subir(){
    let titulo = document.getElementById('titulo').value;
    let subtitulo = document.getElementById('subtitulo').value;
    let contenido = CKEDITOR.instances.editor1.getData();
    let imagen = "https://www.totumdev.uy/media/images/Imagen1.jpg";
    let autor = document.getElementById('autor').value;
    let fecha = document.getElementById('fecha').value;

    $('.loader').show();

    /*$.ajax({
        type: "POST",
        url: "https://totumdev.uy/Blog/Post/subirPost.php",
        data: {Titulo: titulo, Subtitulo: subtitulo, Contenido: contenido, Imagen: imagen, Autor: autor, Fecha: fecha},
        success: function (response) {
            $('.loader').hide();
            $('.mensaje').css('display', 'flex');
            if(response == 1){
                $('.mensaje').text('¡Post Creado Correctamente!');
                $('.mensaje').css('background-color', '#83967a');
            }else{
                console.log(response);
                $('.mensaje').text('Ups... Hubo un error, prueba intentarlo de nuevo.');
                $('.mensaje').css('background-color', '#702c2e');                
            }
        }
    });*/
}