<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}

include realpath(__DIR__)."/main/index.php";
include realpath(__DIR__)."/about/index.php";
include realpath(__DIR__)."/service/index.php";
include realpath(__DIR__)."/contact/index.php";


if(function_exists('page_render') != true) {
    include realpath(__DIR__)."/404/index.php";
}
?>