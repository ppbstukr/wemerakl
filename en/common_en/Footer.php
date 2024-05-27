<div id="footer" style="background-color: rgba(56,56,56,1);">
    <div style="width:94rem; margin:auto;">
        <div id="copyright" style="color: rgb(255,255,255); padding: 2.5rem 5rem;
    font-size: 0.8rem;
    line-height: 12px;
    margin-left: -5.5rem">
            MERAKL Col, Ltd | CEO: Lee Dong-gyu | Tel:051)911-3330~7 | FAX:051)911-2220<br><br>
            Headquarters(Busan): 2407, Centum Skybiz Building A, 97, Centum Jungang-ro, Haeundae-gu, Busan<br><br>
            Business Incubation Center: 3608, Centum Skybiz Building A, 97, Centum Jungang-ro, Haeundae-gu, Busan<br><br>
            Since 2013 © 2023 MERAKL Inc. ALL rights reserved.
        </div>
    </div>
    <?php
    if (IS_NULL($_SESSION['adminId'])) {
    ?>
    <div class="navbar_login" onclick="location.href='/en/pages_en/admin/login.php'">
        .
    </div>
    <?php
    } else {
    ?>
    <div class="navbar_login" onclick="location.href='/en/pages_en/admin/admin.php'">
        admin
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
        wcs.inflow("wemerakl.com");
        wcs_do(_nasa);
    }
</script>