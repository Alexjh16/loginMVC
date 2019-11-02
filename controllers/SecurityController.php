<?php 
class SecurityController extends Security{
    public function Exit(){
        session_destroy();
        header("location:?class=Login&method=login");
        exit;
    }
}
?>