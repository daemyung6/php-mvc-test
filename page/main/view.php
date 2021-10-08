<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}
?>
<?php if(isset($app)):?>
<div id="page" class="page-width">

    <div class="main">
        <div class="device"></div>
        <div class="description-box">
            <div class="logo"></div>
            <div class="title">
                세상에 단 하나뿐인<br />
                커스터마이징 메타버스
            </div>
            <div class="description">
                우리만의 공간을 만들어<br />
                새로운 세상에서<br />
                제약없는 행사를 진행하는 행사전용 플랫폼
            </div>
            <div class="bt-box">
                <div class="bt">
                    앱 다운로드
                </div>
                <div class="bt">
                    pc버전 바로가기
                </div>
            </div>
        </div>
    </div>

</div>
<?php endif; ?>