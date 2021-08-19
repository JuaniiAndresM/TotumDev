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
    let img_height = imagen.clientHeight;
    let img_width = imagen.clientWidth;

    let window_width = window.innerWidth;

    if(img_height <= 400){
        imagen.style.height = '100%';
        imagen.style.width = 'auto';

        if(window_width > img_width){
            imagen.style = width = '100%';
            imagen.style.height = 'auto';
        }

    }else{
        imagen.style.width = '100%';
        imagen.style.height = 'auto';
    }
}




window.addEventListener('scroll', function(){
    let value = window.scrollY

    mont1.style.top = value * 1.2 + 'px';
    mont2.style.top = value * 0.5 + 'px';
})