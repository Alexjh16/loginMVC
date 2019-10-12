<?php 
require_once("core/core.php");

$class = (isset($_GET['class'])) ? ($_GET['class'])  : "Usuarios";
$method = (isset($_GET['method'])) ? ($_GET['method']) :  "index";

$class = $class."Controller";

require_once("controllers/$class".".php");


$Controller = new $class;
$Controller->$method();

?>