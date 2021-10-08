<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}

header("HTTP/1.0 404 Not Found");
$app["header-select"] = -1;
$app["page-name"] = "Not Found";
function page_render($app) {
    include realpath(__DIR__)."/view.php";
}

?>