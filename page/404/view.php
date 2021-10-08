<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}
?>
<?php if(isset($app)):?>
    <div style="color: white;
    font-size: 72px;
    min-height: calc(100% - 80px);
    display: flex;
    align-items: center;
    justify-content: center;">404 Not Found</div>
<?php endif; ?>