<?php 
class Security{
    public function validate_session(){
        if(empty($_SESSION['user']) || is_null($_SESSION['user'])){
            header("location:?class=Login&method=login");
        }
    }
}
?>