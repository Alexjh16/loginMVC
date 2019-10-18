<?php 
class AdministradorController{
    public function home(){
        $title = "Home | User";
        require_once("views/administrador/home.php");
    }
    public function profile(){
        require_once("views/administrador/profile.php");
    }

    public function logout(){
        session_destroy();
        header("location:?class=Login&method=login");
        exit;
    }
}

?>