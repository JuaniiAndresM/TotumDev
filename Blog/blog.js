$(document).ready(function () {

    $.ajax({
        url: "/totumdev/Blog/armoblog.php",
        success: function (response) {
            $('#blog').html(response);
            document.getElementsByClassName('desc').innerText = truncateText('p', 120);
        }
    });
});

function truncateText(selector, maxLength) {
    var element = document.querySelector(selector),
        truncated = element.innerText;

    if (truncated.length > maxLength) {
        truncated = truncated.substr(0,maxLength) + '...';
    }
    return truncated;
}

function post(id){
    location.href = 'Post/' + id;
}