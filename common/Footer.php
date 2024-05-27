<!--
<div id="footer" style="background-color: rgba(56,56,56,1); padding:0 1rem">
    <div class="d-flex justify-content-between align-items-center" style="width:100%; margin:auto; max-width:1920px">
        <div id="copyright" style="color: rgb(255,255,255); padding:2.5rem 0rem; font-size:14px; line-height: 13px; ">
            (주)메라클 | 대표 : 이동규 | 전화:051)911-3330~7 | FAX:051)911-2220<br><br>
            사업자 번호 : 617-86-09934&nbsp;&nbsp;&nbsp;&nbsp;통신판매신고번호 : 제2018-부산해운대-0428호<br><br>
            본사(부산) : 부산광역시 해운대구 센텀중앙로 97, 센텀스카이비즈 A동 2407호<br><br>
            창업보육센터 : 부산광역시 해운대구 센텀중앙로 97, 센텀스카이비즈 A동 3608호<br><br>
            <a style="font-size: 9pt; color: white;">개인정보처리방침</a><br>
            U.S Office: 2020 Stonington Avenue, Suite 160 Hoffman Estates, Illinois 60169 U.S.A.<br>
            Since 2013 © 2023 MERAKL Inc. ALL rights reserved.
        </div>
        <div class="nav-item d-flex flex-column justify-content-end">
            <a href="#" onclick="gotoBMDS()" style="font-size: 20px; font-weight: 600; color:#644D9D;">
                <img src="/public/img/banner/bmds-logo-gray.png" alt="bmdsLogo" style="width:15rem; height:4rem;" /></a>
        </div>
    </div>
    <?php
    if (IS_NULL($_SESSION['adminId'])) {
    ?>
    <div class="navbar_login" onclick="location.href='/pages/admin/login.php'">
        .
    </div>
    <?php
    } else {
    ?>
    <div class="navbar_login" onclick="location.href='/pages/admin/admin.php'">
        관리자
    </div>

    <?php
    }
    ?>
</div>
-->
<div data-v-1c32b11c="" class="footer">
    <footer data-v-1c32b11c="" class="">
        <div data-v-1c32b11c="" class="row justify-content-between">
            <div data-v-1c32b11c="" class="">
<!--
                <div data-v-1c32b11c="" class="mb-3 ft_Lline"><img data-v-1c32b11c="" src="data:image/png;base64,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">
                    <div data-v-1c32b11c=""><b data-v-1c32b11c="" class="fs-5">(주)메라클</b>
                    <a data-v-1c32b11c="" href="/main/termsCom" class="ms-3 text-decoration-none">개인정보처리방침</a>
                    <a data-v-1c32b11c="" href="/main/termsCom" class="ms-3 text-decoration-none">이용약관</a>
                    </div>
                </div>
                <div data-v-1c32b11c="" class="small"> 대표이사 : 이동규 | 전화 : 051-911-3330~7 | 이메일 : office1@meraklus.com<br data-v-1c32b11c=""> 사업자 등록번호 : 617-86-09934 | 통신판매업 신고번호 : 2018-부산해운대-0428<br data-v-1c32b11c=""> 주소 : 부산광역시 해운대구 센텀중앙로 97(재송동), 센텀스카이비즈 A동 2407호 </div>
                <div data-v-1c32b11c="" class="small mb-0"> Since 2019 © 2023 MERAKL Co.,Ltd.All Rights Reserved<span data-v-1c32b11c="">.</span></div>
-->
                
                 <div class="ppbcontainer pt_footer">
                    <b class="ftf_nnm"><img src="/public/img/footerLogo.png" alt=""></b>
                    <b>대표이사 : 이동규 | 전화 : 051-911-3330~7 | Fax : 051-911-2220 | 이메일 : office1@meraklus.com
                        사업자 등록번호 : 617-86-09934 | 통신판매업 신고번호 : 2018-부산해운대-0428
                        주소 : 부산광역시 해운대구 센텀중앙로 97(재송동), 센텀스카이비즈 A동 2407호

                        COPYRIGHTS © 2024 MERAKL Co.,Ltd.All Rights Reserved.</b>
                </div>

            </div>
        </div>
    </footer>
</div>


<script>
const headerNav = document.querySelector("#header");

// 스크롤 이벤트 리스너 추가
window.addEventListener("scroll", () => {
    // 현재 스크롤 위치
    const scrollPosition = window.scrollY;

    // 헤더가 특정 스크롤 위치 이상으로 스크롤되면 클래스를 추가하거나 제거
    if (scrollPosition > 88) { // 예: 스크롤이 100px 이상 되었을 때
        headerNav.classList.add("headerNavActive"); // headerActive 클래스 추가
    } else {
        headerNav.classList.remove("headerNavActive"); // headerActive 클래스 제거
    }
    
});



    
</script>
<script>
function setViewportHeight() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
}

// 초기 설정 및 윈도우 리사이즈 이벤트에 핸들러 추가
setViewportHeight();
window.addEventListener('resize', setViewportHeight);
</script>
<script>
  AOS.init();
</script>
<!-- Mirae Log Analysis Script Ver 1.0   -->
<!-- <script TYPE="text/javascript">
var mi_adkey = "qivhfDi";
var mi_is_defender = "";
var mi_dt = new Date(),
    mi_y = mi_dt.getFullYear(),
    mi_m = mi_dt.getMonth() + 1,
    mi_d = mi_dt.getDate(),
    mi_h = mi_dt.getHours();
var mi_date = "" + mi_y + (mi_m <= 9 ? "0" : "") + mi_m + (mi_d <= 9 ? "0" : "") + mi_d + (mi_h <= 9 ? "0" : "") +
    mi_h;
var mi_script = "<scr" + "ipt " + "type='text/javascr" + "ipt' src='//log1.toup.net/mirae_log.js?t=" + mi_date +
    "' charset='utf-8' async='true'></scr" + "ipt>";
document.writeln(mi_script); -->

<!-- Mirae Log Analysis Script END  -->

<!-- NAVER SCRIPT -->
<!-- <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if (!wcs_add) var wcs_add = {};
wcs_add["wa"] = "s_4372fbb40a1c";
if (!_nasa) var _nasa = {};
if (window.wcs) {
    wcs.inflow("merakl.co.kr");
    wcs_do(_nasa);
}
</script> -->
<!-- NAVER SCRIPT END -->
