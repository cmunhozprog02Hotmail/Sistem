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

});

 echo $controller." ----- ".$method;


?>