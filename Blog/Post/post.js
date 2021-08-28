$(document).ready(function () {
    $.ajax({
        url: "armopost.php",
        success: function (response) {
            $('#post').html(response);        
        }
    });
});

function post(id){
    location.href = id;
}