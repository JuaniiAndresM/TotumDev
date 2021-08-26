$(document).ready(function () {
    let mont1 = document.getElementById('mont1');
    let mont2 = document.getElementById('mont2');

    tamañoimagen();
});

/*document.addEventListener('contextmenu', event => event.preventDefault());
 
document.onkeydown = function (e) {

    // disable F12 key
    if(e.keyCode == 123) {
        return false;
    }

    // disable I key
    if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
        return false;
    }

    // disable J key
    if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        return false;
    }

    // disable U key
    if(e.ctrlKey && e.keyCode == 85) {
        return false;
    }
}*/

$(window).resize(function () { 
    tamañoimagen();
});


function tamañoimagen(){

    let imagen = document.getElementById('img-index');
    let imagen2 = document.getElementById('img-index2');
    let img_height = imagen.clientHeight;
    let img_width = imagen.clientWidth;

    let img_height2 = imagen2.clientHeight;
    let img_width2 = imagen2.clientWidth;

    let window_width = window.innerWidth;

    if(window_width <= 400){
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

    if(window_width <= 400){
        imagen2.style.height = '100%';
        imagen2.style.width = 'auto';

        if(window_width > img_width2){
            imagen2.style = width = '100%';
            imagen2.style.height = 'auto';
        }
    }else{
        imagen2.style.width = '100%';
        imagen2.style.height = 'auto';
    }
}




window.addEventListener('scroll', function(){
    let value = window.scrollY

    mont1.style.top = value * 1.2 + 'px';
    mont2.style.top = value * 0.5 + 'px';
})