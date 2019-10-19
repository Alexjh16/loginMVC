<?php 
class Usuario extends database{
    public function read(){
        try{
            $stm = parent::Connect()->prepare("SELECT * FROM usuarios");
            $stm->execute();
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        catch(Exception $error){
            die("Error found in file models/Usuario.php:: ".$error->getMessage());
        }
    }

    public function requestEmail($email){
        try{
            $stm = parent::Connect()->prepare("SELECT * FROM usuarios WHERE correo_usuario = ?");
            $stm->bindParam(1, $email, PDO::PARAM_STR);
            $stm->execute();
            $data = $stm->fetch(PDO::FETCH_OBJ);
            return $data;
        }
        catch(Exception $error){
            die("Error found in file models/Usuario.php:: ".$error->getMessage());
        }
    }

    public function insert($nombres, $apellidos, $descripcion, $correo, $password, $date){
        try{
            $date = date("Y-m-h");
            $stm = parent::Connect()->prepare("INSERT INTO usuarios(nombres_usuario, apellidos_usuario, descripcion_usuario,correo_usuario, password_usuario, created_at) VALUES('$nombres','$apellidos','$descripcion','$correo','$password','$date')");
            $stm->execute();
        }
        catch(Exception $error){
            die("Error found in file models/Usuario.php:: ".$error->getMessage());
        }
    }
}

?>