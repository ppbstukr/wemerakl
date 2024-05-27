<link rel="stylesheet" href="/en/public/css/nav.css">
<script src="../public/js/indicator.js"></script>

<style>
    #header{
        font-size: 0.9rem !important;
    }
    .bold{
        font-weight: bold;
    }
</style>
<script>
    // 국문 <=> 영문 홈피 토글버튼
    $(document).on('click', '.toggleBG', function () {
        var toggleBG = $(this);
        var toggleFG = $(this).find('.toggleFG');
        var left = toggleFG.css('left');
        if (left == '40px') {
            toggleBG.css('background', '#CCCCCC');
            toggleActionStart(toggleFG, 'TO_LEFT');
        } else if (left == '0px') {
            toggleBG.css('background', '#53FF4C');
            toggleActionStart(toggleFG, 'TO_RIGHT');
        }
    });

    // 토글 버튼 이동 모션 함수
    function toggleActionStart(toggleBtn, LR) {
        // 0.01초 단위로 실행
        var intervalID = setInterval(
            function () {
                // 버튼 이동
                var left = parseInt(toggleBtn.css('left'));
                left += (LR == 'TO_RIGHT') ? 5 : -5;
                if (left >= 0 && left <= 40) {
                    left += 'px';
                    toggleBtn.css('left', left);
                }
            }, 10);
        setTimeout(function () {
            clearInterval(intervalID);
        }, 201);
    }

    function getToggleBtnState(toggleBtnId) {
        const left_px = parseInt($('#' + toggleBtnId).css('left'));
        if (left_px > 0) {
            $("#buttonID").attr('value', 'EN');
            location.href = "https://wemerakl.com/en";
        } else {
            $("#buttonID").attr('value', 'KO');
            location.href = "https://wemerakl.com";
        }
    }

    // 네비게이션바 투명했다가 내려가면 불투명하게 하는거
    $(window).on('scroll', function () {
        let value = $(window).scrollTop();
        // console.log("scrollY = ", value);

        if (value > 250) {
            $("#header").css('background', "rgba(255,255,255,1)");
            $("header nav .navbar_menu>li>a").css('color', "#331a1a");

        } else {
            $("#header").css('background', "rgba(255,255,255,0)");
            $("header nav .navbar_menu>li>a").css('color', "#ede8e8");

        }
    });

</script>
<header id="header">
    <nav>
        <div id="scroll-indicator"></div>
        <div class="logo">
            <a href="/en"><img src="/en/public/img/main/merakl_update.png" style="margin-top : 1rem; width: 8rem"></a>
        </div>
        
        <ul class="navbar_menu">
            <li class="aboutus"><a class="bold" href="/en/pages_en/aboutus/aboutus.php">About&nbsp;Us</a>
                <ul class="sub_menu">
                    <li><a class="bold" href="/en/pages_en/aboutus/aboutus.php">About Us</a></li>
                    <li><a class="bold" href="/en/pages_en/aboutus/ci.php">CI</a></li>
                    <li><a class="bold" href="/en/pages_en/aboutus/history.php">History</a></li>
                    <li><a class="bold" href="/en/pages_en/aboutus/member.php">Member</a></li>
                    <li><a class="bold" href="/en/pages_en/aboutus/Certification.php">Certifications</a></li>
                    <li><a class="bold" href="/en/pages_en/aboutus/wayToCome.php">Way to come</a></li>
                </ul>
            </li>
            <li><a class="bold" href="/en/pages_en/team/RNDS.php">&nbsp;&nbsp;Business&nbsp;&nbsp;</a>
                <!--<ul class="sub_menu">
                    <li><a class="bold" href="/en/pages_en/team/RNDS.php">Introduction</a></li>

                </ul>-->
            </li>
            <li><a class="bold" href="/en/pages_en/Portfolio.php">Portfolio</a></li>
            <li>

                <a class="bold" href="/en/pages_en/communication/New.php">Communication</a>

                <ul class="sub_menu">
                    <li><a class="bold" href="/en/pages_en/communication/New.php">News</a></li>
                    <li><a class="bold" href="/en/pages_en/communication/qna.php">Q&A</a></li>
                    <li><a class="bold" href="/en/pages_en/communication/Gallery.php">Gallery</a></li>
                </ul>
            </li>
        </ul>
        
      <ul class="sns_menu sub_menu" style="margin-top: 1rem">
            <!--<li class="sns_menu_bmds">
                <a href="http://www.bmds.co.kr/" target="_blank">
                    <img src="/en/public/img/main/bmds_logo.png" style="width:60%; float:right;" />
                </a>
            </li>-->
<!--          <li>-->
<!--              <div class="toggleBG" onclick="getToggleBtnState(`buttonID`);">-->
<!--                  <input type="button" id='buttonID' class='toggleFG' value="EN" />-->
<!--              </div>-->
<!--          </li>-->
        </ul>

        <ul class="navbar_menu">
            <li class="font_ddd">

                <p href="#" style="color: #331a1a; margin-bottom: 0;" class="lang">Language</p>

                <ul class="sub_menu">
                    <li><a href='https://wemerakl.com'>Korean</a></li>
                    <li><a href='https://wemerakl.com/en'>English</a></li>
                </ul>
            </li>
        </ul>
        <div class="mobile">
            <ul class="mobile_navbar">
                <li class="aboutus"><a href="/en/pages_en/aboutus.php">About Us</a>
                    <a href="#" class="submenu_Btn">
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="mobile_sub">
                        <li><a href="/en/pages_en/wayTocome.php">Way to come</a></li>
                        <li><a href="/en/pages_en/ci.php">CI</a></li>
                        <li><a href="/en/pages_en/history.php">History</a></li>
                        <!-- <li><a href="/pages_en/organization.php">Organization Chart</a></li> -->
                        <!-- <li><a href="/pages_en/Member.php">Our People</a></li> -->
                        <li><a href="/en/pages_en/Certification.php">Certifications</a></li>
                    </ul>
                </li>
                <li class="aboutus"><a href="/en/pages_en/team/GMAC.php">Team</a>
                    <a href="#" class="submenu_Btn">
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="mobile_sub">
                        <li><a href="/en/pages_en/team/GMAC.php">Introduction</a></li>
                        <li><a href="/en/pages_en/aboutus/member.php">Member</a></li>
                    </ul>
                </li>
                <!-- <li class="aboutus"><a href="/pages_en/ourbiz.php">Business Areas</a>
                    <a href="#" class="submenu_Btn">
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="mobile_sub">
                        <li><a href="#">area 1</a></li>
                        <li><a href="#">area 2</a></li>
                        <li><a href="#">area 3</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="/pages_en/ourbiz.php">Business Areas</a></li> -->
                <li class="aboutus"><a href="/en/pages_en/Portfolio.php">Portfolio</a>
                    <!-- <a href="#" class="submenu_Btn">
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="mobile_sub">
                        <li><a href="#">portfolio contents</a></li>
                    </ul> -->
                </li>
                <!-- <li><a href="/pages_en/Portfolio.php">Portfolio</a></li> -->
                <!-- <li><a href="/pages_en/bmds.php">BMDS</a></li> -->
                <li class="notice"><a href="/en/pages_en/qna.php">Communication</a>
                    <a href="#" class="noticesub_Btn">
                        <i class="fas fa-chevron-down arrow"></i>
                    </a>
                    <ul class="notice_sub">
                        <!-- <li><a href="/pages_en/notice.php">Notice</a></li> -->
                        <!-- <li><a href="/pages_en/article.php">Article</a></li> -->
                        <li><a href="/en/pages_en/New.php">News</a></li>
                        <li><a href="/en/pages_en/qna.php">Q&A</a></li>
                        <!-- <li><a href="/pages_en/faq.php">FAQ</a></li> -->
                        <li><a href="/en/pages_en/Gallery.php">Gallery</a></li>
                    </ul>
                </li>
                <!-- <li><a href="/pages_en/Contactus.php">Contact Us</a></li> -->
                <!-- irds -->
                <!-- <li><a herf="/pages/project.php">프로젝트</a></li> -->
            </ul>
        </div>
        <div>
            <a href="#" class="navbar_toggleBtn">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </nav>
</header>