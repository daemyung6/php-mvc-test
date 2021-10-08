<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}
?>
<?php if(isset($app)):?>
<div id='header' >
    <div class='page-width'>
        <div class='left'>
            <a href='./'>
                <div class='item logo'></div>
            </a>
            <div class='item <?php echo ($app['header-select'] == 0 ? 'selected pupple' : '') ?>'>
                <a href='/about'>ABOUT US</a>
            </div>
            <div class='item <?php echo ($app['header-select'] == 1 ? 'selected pupple' : '') ?>'>
                <a href='/service'>SERVICE</a>
            </div>
            <div class='item <?php echo ($app['header-select'] == 2 ? 'selected pupple' : '') ?>'>
                <a href='/contact'>CONTACT</a>
            </div>
            <div class='item demo <?php echo ($app['header-select'] == 3 ? 'selected pupple' : '') ?>'>
                <a href='/demo'>DEMO</a>
            </div>
        </div>
        <div class='right'>
            <div class='item download'>
                <a href=''>앱 다운로드 <div class='icon'></div></a>
            </div>
            <div class='item pc'>
                <a href=''>pc버전 바로가기 <div class='icon'></div></a>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>