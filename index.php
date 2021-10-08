<?php
// error_reporting( E_ALL );
// ini_set( "display_errors", 1 );

$app = array();
$app["header"] = "";
$app["title"] = "";
$app["version"] = "0.1";
include "./config.php";
include "./comp/index.php";
include "./page/index.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;500;900&display=swap" rel="stylesheet">
    <?php echo $app["header"] ?>
    <title>Lan+d - <?php echo $app["page-name"] ?></title>
</head>
<body>
    <?php comp_header($app) ?>
    <?php page_render($app) ?>
    <?php comp_footer($app) ?>
</body>
</html>