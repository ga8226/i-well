<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
<?php if (!defined("_INDEX_")) { ?>
    </div>
    
</div>
<?php } ?>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<footer>
<div class="supportBanner">
    <div>
         <div class="container-garim">
             <div class="d-flex justify-content-between">
            <?php echo latest('theme/fts','ft_section', 6 , 100); ?>
        </div>
    </div>
</div>
<div class="container-garim mt-5">
    <div id="tap">
        <ul class="d-flex">
            <li class="col mx-3"><div class="whitebox"><a href=""><p>아이웰성형외과<span>온라인상담</span></p></a></div></li>
            <li class="col mx-3"><div class="whitebox"><a href=""><p>아이웰성형외과<span>온라인예약</span></p></a></div></li>
            <li class="col mx-3"><div class="whitebox"><a href=""><p>아이웰성형외과<span>찾아오시는길</span></p></a></div></li>
        </ul>
    </div>
    <p class="text-center my-5">
        ※ 수술 후 출혈, 감염, 염증 등의 합병증이 있을 수 있으며 주관적인 만족도는 개인마다 차이가 있을 수 있으므로 의사와 상의하시기 바랍니다.
    </p>
</div>

<div class="fourBanner">
    <?php echo latest('theme/ft4','ft_banner', 4 , 100); ?>

</div>



<div id="ft" class="border-top">
    <div id="ft-top wrap" class="bg-white border-bottom py-2">
            <div id="ft-top" class="container-garlim">
                <ul class="d-flex">
                    <li><a href="">개인정보취급방침</a></li>
                    <li><a href="">이용약관</a></li>
                    <li><a href="">오시는길</a></li>
                    <li><a href="">수술후기</a></li>
                    <li><a href="">온라인예약</a></li>
                    <li><a href="">온라인상담</a></li>
                    <li><a href="">카톡상담</a></li>
                </ul>
            </div>
    </div>
    <div id="ft_wr">
        <div id="ft_company" class="ft_cnt container-garim w-auto py-5">
        	<ul class="d-flex">
                <li class="col title">
                    <h3>COMPANY INFORMATION</h3>
                    <ul class="nomal">
                        <li>주소 : (우)06031 서울특별시 강남구 논현로 843 EGI빌딩</li>
                        <li>4층 (신사동 583) ｜ 의료기관명칭 : 아이웰성형외과의원</li>
                        <li>｜사업자등록번호: 211-09-97205 ｜ TEL 02.542.2017 ｜</li>
                        <li>FAX 02.542.2018 ｜ E-MAIL : iwellps@naver.com</li>
                        <li>Copyright ⓒ 아이웰성형외과. All Rights Reserved.</li>
                    </ul>
                </li>
                <li class="col title">
                    <h3>CUSTOMER CENTER</h3>
                    <ul class="nomal">
                        <li>대표전화</li>
                        <li id="num">02-542-2017</li>
                    </ul>
                </li>
                <li class="col title">
                    <h3>SURGERY HOURS</h3>
                    <ul class="nomal">
                        <li class="py-2">진료시간</li>
                        <li class="py-1">평일 : AM 10:00~PM 07:00</li>
                        <li class="py-1">토요일 : AM 10:00~PM 05:00</li>
                        <li class="py-1">일요일·공휴일 : 휴진</li>
                    </ul>
                </li>
                <li class="col title">
                    <h3>LOCATION</h3>
                    <ul>
                        <li>
                            <a href="https://www.google.com/maps/place/%EC%95%84%EC%9D%B4%EC%9B%B0%EC%84%B1%ED%98%95%EC%99%B8%EA%B3%BC/@37.524457,127.027959,15z/data=!4m5!3m4!1s0x0:0xc562f09f04522024!8m2!3d37.5244567!4d127.0279595?hl=ko"><img src="https://www.iwellps.com/wp-content/uploads/2019/12/map.jpg" alt="지도사진첨부"></a></li>
                    </ul>
                </li>
            </ul>
	     
	    </div>
        
        
		
	</div>      

    <div class="position-fixed quick_menu">
        <ul>
            <li><a href=""><img src="https://www.iwellps.com/wp-content/uploads/2019/10/quick01-1.png"></a></li>
            <li><a href="" onclick="kakao_code()" target="_blank" rel="noopener noreferrer"><img src="https://www.iwellps.com/wp-content/uploads/2019/10/quick02.png"></a></li>
            <li><a href=""><img src="https://www.iwellps.com/wp-content/uploads/2019/10/quick03.png"></a></li>
            <li><a href=""><img src="https://www.iwellps.com/wp-content/uploads/2019/10/quick04.png"></a></li>
            <li><a href="https://www.youtube.com/channel/UC9583z-g3wJpEI6dvp382uQ" target="_blank" rel="noopener noreferrer"><img src="https://www.iwellps.com/wp-content/uploads/2020/10/quick07.png"></a></li>
            <li><a href=""><img src="https://www.iwellps.com/wp-content/uploads/2019/10/quick05.png"></a></li>
            <li><img src="https://www.iwellps.com/wp-content/uploads/2020/01/quick06.png"></li>
            <li><button id="top_btn">top</button></li>
        </ul>
    </div>
    
    
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>
</footer>   

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>

<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");