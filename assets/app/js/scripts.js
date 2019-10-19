$(document).ready(function(){
    $("#register").click(function(){
        event.preventDefault();
        window.location.href="?class=Usuarios&method=register";
    });
});