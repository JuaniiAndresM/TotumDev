$(document).ready(function () {
    let mont1 = document.getElementById('mont1');
    let mont2 = document.getElementById('mont2');
});




window.addEventListener('scroll', function(){
    let value = window.scrollY

    mont1.style.top = value * 1.2 + 'px';
    mont2.style.top = value * 0.5 + 'px';

    console.log(value);
})