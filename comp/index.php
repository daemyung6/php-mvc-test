<?php
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}
include realpath(__DIR__)."/header/index.php";
include realpath(__DIR__)."/footer/index.php";


?>