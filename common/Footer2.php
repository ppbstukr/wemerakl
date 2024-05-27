<div id="footer">
    <div id="copyright">
        <a style="color: white;"
            href="https://www.law.go.kr/%ED%96%89%EC%A0%95%EA%B7%9C%EC%B9%99/(%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%EB%B3%B4%ED%98%B8%EC%9C%84%EC%9B%90%ED%9A%8C)%20%ED%91%9C%EC%A4%80%20%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%20%EB%B3%B4%ED%98%B8%EC%A7%80%EC%B9%A8">개인정보처리방침</a>
    </div>
    <?php
    if (IS_NULL($_SESSION['adminId'])) {
    ?>
    <div class="navbar_login" onclick="location.href='/pages/login.php'">
        .
    </div>
    <?php
    } else {
    ?>
    <div class="navbar_login" onclick="location.href='/pages/admin.php'">
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
var mi_date = "" + mi_y + (mi_m <= 9 ? "0" : "") + mi_m + (mi_d <= 9 ? "0" : "") + mi_d + (mi_h <= 9 ? "0" : "") + mi_h;
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