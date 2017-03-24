$(document).ready(function(){
    $('.trashlistclass').on('click', 'a', function() {
        var id = $(this).closest('li').attr('id');
        window.location.href = "http://localhost:8080/OST/Finalwelcomepage/trash.php?id=" + id;
    })
})