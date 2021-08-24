$(document).ready(function () {
    let mont1 = document.getElementById('mont1');
    let mont2 = document.getElementById('mont2');

    tamañoimagen();
});

$(window).resize(function () { 
    tamañoimagen();
});


function tamañoimagen(){

    let imagen = document.getElementById('img-index');
    let imagen2 = document.getElementById('img-index2');
    let img_height = imagen.clientHeight;
    let img_width = imagen.clientWidth;

    let img_height2 = imagen.clientHeight;
    let img_width2 = imagen.clientWidth;

    let window_width = window.innerWidth;

    if(img_height <= 400 || img_height2 <= 400){
        imagen.style.height = '100%';
        imagen.style.width = 'auto';

        imagen2.style.height = '100%';
        imagen2.style.width = 'auto';

        if(window_width > img_width || window_width > img_width2){
            imagen.style = width = '100%';
            imagen.style.height = 'auto';

            imagen2.style = width = '100%';
            imagen2.style.height = 'auto';
        }

    }else{
        imagen.style.width = '100%';
        imagen.style.height = 'auto';

        imagen2.style.width = '100%';
        imagen2.style.height = 'auto';
    }
}




window.addEventListener('scroll', function(){
    let value = window.scrollY

    mont1.style.top = value * 1.2 + 'px';
    mont2.style.top = value * 0.5 + 'px';
})