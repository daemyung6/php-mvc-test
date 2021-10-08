<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}
if($_SERVER['REQUEST_URI'] === "/") {

    $app["header-select"] = -1;
    $app["page-name"] = "Main Page";
    $app["header"] .= '<link rel="stylesheet" href="./page/main/index.css??ver='.$app["version"].'">'."\n";

    function page_render($app) {
        include realpath(__DIR__)."/view.php";
    }
}
?>