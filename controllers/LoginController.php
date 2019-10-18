<?php 
class LoginController extends Login{
    private $usuario;

    public function __construct(){        
        try{
            $this->usuario = new  Usuario();
        }
        catch(Exception $error){
            die("Error found in file controllers/LoginController.php:: ".$error->getMessage());
        }
    }
    public function login(){
    //login form
    $title = "Home | Login";
    require_once("views/login/login.php");
    }

    public function register(){
    //register form

    }

    public function auth(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $usuario = $this->usuario->requestEmail($email);
        if((@$usuario->correo_usuario == $email) && (@$usuario->password_usuario == $password)){
            $_SESSION['user'] = $usuario;
            header("location:?class=Administrador&method=home");
        }
        else{
            header("location:?class=Login&method=login&ErrorLogin=true");
        }
        
    }
}
?>