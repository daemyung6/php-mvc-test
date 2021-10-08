<?php
$app['header'] .= '<link rel="stylesheet" href="./comp/header/index.css?ver='.$app["version"].'">'."\n";

$app['header-select'] = null;


function comp_header($app) {
    include realpath(__DIR__)."/view.php";
}
?>