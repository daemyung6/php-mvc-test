<?php
$app["header"] .= '<link rel="stylesheet" href="./comp/footer/index.css?ver='.$app["version"].'">'."\n";
function comp_footer($app) {
    include realpath(__DIR__)."/view.php";
}
?>