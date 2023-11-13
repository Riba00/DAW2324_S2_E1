$(document).ready(function() {
    if (typeof sesionIniciada !== 'undefined' && sesionIniciada) {
        console.log("Usuario ha iniciado sesión previamente.");
        var html = '<li class="nav-item position-absolute end-0 me-5" id="registre-li">' +
            '<a class="nav-link text-white" href="/Vistes/perfil.php">Perfil</a>' +
            '</li>';
        $('#registre-li').html(html); // Usamos jQuery para establecer el contenido del elemento
    } else {
        console.log("La sesión aún no ha sido iniciada");
    }
});
