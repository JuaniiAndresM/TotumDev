function enviar(){
    let nombre = document.getElementById('nombre').value;
    let email = document.getElementById('email').value;
    let celular = document.getElementById('celular').value;
    let comentario = document.getElementById('comentario').value;

    $('.loader').show();

    $.ajax({
        type: "POST",
        url: "Contacto/PHP/mail.php",
        data: {nombre: nombre, email: email, celular: celular, comentario: comentario},
        success: function (response) {
            $('.loader').hide();
            $('.mensaje').css('display', 'flex');
            if(response == 1){
                $('.mensaje').text('¡Mail Enviado Correctamente!');
                $('.mensaje').css('background-color', '#83967a');
            }else{
                $('.mensaje').text('Ups... Hubo un error en el envío, prueba intentarlo más tarde.');
                $('.mensaje').css('background-color', '#702c2e');                
            }
        }
    });
}