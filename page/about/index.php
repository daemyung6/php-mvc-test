<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}
if($_SERVER['REQUEST_URI'] === "/about") {

    $app["header-select"] = 0;
    $app["page-name"] = "About Us";
    $app["header"] .= '<link rel="stylesheet" href="./page/about/index.css??ver='.$app["version"].'">'."\n";

    function page_render($app) {
        include realpath(__DIR__)."/view.php";
    }
}
?>