<?php 
if(!isset($app)) {
    header("HTTP/1.0 404 Not Found");
    exit();
}
?>
<?php if(isset($app)):?>
<div id="page" >
    <div class="page-width">
        <div class="inner">
            <h1>CONTACT</h1>
            <h2>EVENT REQUEST</h2>
            <hr>
            <div class="EVENT-title">
                랜플디와 함께 세상에 단 하나뿐인<br />
                행사를 만들어보세요!
            </div>
            <div class="EVENT-description">커스터마이징 메타버스로 새로운 가치와 가능성을 제공해 드리겠습니다.</div>
            <div class="EVENT-bt-line">
                <div class="bt">DEMO 체험</div>
                <div class="bt">행사 문의</div>
            </div>
            <br />
            <br />
            <br />
            <h2>LOCATION</h2>
            <hr>
            <div class="LOCATION-box">
                <div class="left">
                    서울 중랑구 신내역로3길 40-36, 신내데시앙플렉스 A동 804호<br />
                    <br />
                    T 02.2277.0102 <br />
                    F 02.2277.0112 <br />
                    M imc@xplqn.co.kr
                </div>
                <div class="right">
                    <div class="map">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>