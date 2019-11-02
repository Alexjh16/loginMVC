<?php 
class AdministradorController{
    private $security;
    public function __construct(){
        try{
            $this->security = new Security();
            $this->security->validate_session();
        }
        catch(Exception $error){
            die("Error found in file controllers/AdministradorController.php:: ".$error->getMessage());
        }
    }

    public function home(){
        $title = "Home | User";
        require_once("views/administrador/home.php");
    }
    public function profile(){
        require_once("views/administrador/profile.php");
    }
}

?>