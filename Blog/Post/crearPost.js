/*$('#upload').on('click', function() {

    let titulo = document.getElementById('titulo').value;
    let subtitulo = document.getElementById('subtitulo').value;
    let contenido = CKEDITOR.instances.editor1.getData();
    let autor = document.getElementById('autor').value;
    let fecha = document.getElementById('fecha').value;

    var imagen = $('#pic').prop('files')[0];

    alert(imagen);

    /*var form_data = new FormData();  // Create a FormData object
    form_data.append('file', imagen);  // Append all element in FormData  object

    $.ajax({
            url         : 'upload.php',     // point to server-side PHP script 
            dataType    : 'text',           // what to expect back from the PHP script, if anything
            cache       : false,
            contentType : false,
            processData : false,
            data        : form_data,                         
            type        : 'post',
            success     : function(output){
                alert(output);              // display response from the PHP script, if any
            }
     });
     $('#pic').val('');                     /* Clear the input type file 
});*/

function subir(){

    let titulo = document.getElementById('titulo').value;
    let subtitulo = document.getElementById('subtitulo').value;
    let contenido = CKEDITOR.instances.contenido.getData();
    let autor = document.getElementById('autor').value;
    let fecha = document.getElementById('fecha').value;

    var form_data = new FormData();  // Create a FormData object

    var files = $('#pic')[0].files;
    
    console.log(files);

    form_data.append('file', files[0]);  // Append all element in FormData  object
    form_data.append('Titulo', titulo);
    form_data.append('Subtitulo', subtitulo);
    form_data.append('Contenido', contenido);
    form_data.append('Autor', autor);
    form_data.append('Fecha', fecha);

    $('.loader').show();

    $.ajax({
        type        : "POST",
        cache       : false,
        dataType    : 'text',
        contentType : false,
        processData : false,
        url         : "/Blog/Post/subirPost.php",
        data        : form_data,

        success: function (response) {
            console.log(response);

            $('.loader').hide();
            $('.mensaje').css('display', 'flex');
            if(response == 1){
                
                $('.mensaje').text('¡Post Creado Correctamente!');
                $('.mensaje').css('background-color', '#83967a');
            }else{

                $('.mensaje').text('Ups... Hubo un error, prueba intentarlo de nuevo.');
                $('.mensaje').css('background-color', '#702c2e');                
            }
        }
    });
}