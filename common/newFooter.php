<div id="footer" style="background-color: rgba(56,56,56,1);">
    <div style="width:71rem; margin:auto;">
        <div id="copyright"
            style="color: rgb(255,255,255); padding:2.5rem 5rem; font-size:1rem; line-height: 15px; margin-left: -10rem;">
            (주)메라클 | 대표 : 이동규 | 전화:051)911-3330~7 | FAX:051)911-2220<br><br>
            본사(부산) : 부산광역시 해운대구 센텀중앙로 97, 센텀스카이비즈 A동 2407호<br><br>
            창업보육센터 : 부산광역시 해운대구 센텀중앙로 97, 센텀스카이비즈 A동 3608호<br><br>
            <!-- <a style="font-size: 9pt; color: white;">개인정보처리방침</a><br> -->
            <!-- U.S Office: 2020 Stonington Avenue, Suite 160 Hoffman Estates, Illinois 60169 U.S.A.<br> -->
            Since 2013 © 2023 MERAKL Inc. ALL rights reserved.
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


<!-- Mirae Log Analysis Script Ver 1.0   -->
<script TYPE="text/javascript">
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
document.writeln(mi_script);
</script>
<!-- Mirae Log Analysis Script END  -->

<!-- NAVER SCRIPT -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if (!wcs_add) var wcs_add = {};
wcs_add["wa"] = "s_4372fbb40a1c";
if (!_nasa) var _nasa = {};
if (window.wcs) {
    wcs.inflow("merakl.co.kr");
    wcs_do(_nasa);
}
</script>
<!-- NAVER SCRIPT END -->