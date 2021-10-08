<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}
if($_SERVER['REQUEST_URI'] === "/contact") {

    $app["header-select"] = 2;
    $app["page-name"] = "Contact";
    $app["header"] .= '<link rel="stylesheet" href="./page/about/index.css??ver='.$app["version"].'">'."\n";
    $app["header"] .= '<link rel="stylesheet" href="./page/contact/index.css??ver='.$app["version"].'">'."\n";

    function page_render($app) {
        include realpath(__DIR__)."/view.php";
    }
}
?>