<?php
require "config.php";

$url = isset($_GET["url"]) ? $_GET["url"]:"Index/index";
$url = explode("/", $url);
$controller = "";
$method = "";
if(isset($url[0])){
    $controller = $url[0];
}
if(isset($url[1])){ 
    if(($url[1] != '')){
        $method = $url[1];
    }
}
//Chama as constatantes do arquivo config.php
spl_autoload_register(function($class){
    if(file_exists(LBS.$class.".php")){
        require LBS.$class.".php";
    }
});
//$obj = new Controllers();
//echo $controller." ----- ".$method;
$controllersPath = "Controllers/".$controller.".php";
if(file_exists($controllersPath)){
    //Instanciamos a classe
    $controller = new $controller();
}


?>