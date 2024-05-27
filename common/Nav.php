<link rel="stylesheet" href="/public/css/nav.css">
<script src="/public/js/indicator.js"></script>

<header id="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container topNav" style="max-width:1200px !important;">
            <a class="navbar-brand" href="/">
                <img class="normalLogo" src="/public/img/main/merakl_update.png" style="width: 10rem;" alt="Logo">
                <img class="whiteLogo" src="/public/img/w_logo.png" style="width: 10rem;" alt="Logo">
            </a>
            <!--
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
-->
            <div class="mNavBtn">
                <img class="normalLogo" src="/public/img/b_navBtn.png" alt="navBtn">
                <img class="whiteLogo" src="/public/img/navBtn.png" alt="navBtn">
            </div>
            <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: right;">
                <ul class="navbar-nav d-flex justify-content-right align-items-center">
                    <li class="nav-item ">
                        <a class="over" href="#" id="aboutUsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="goToIntro()" style="font-size: 20px; font-weight: 600; color:#644D9D;">회사소개</a>
                        <div class="dd_menu" aria-labelledby="aboutUsDropdown">
                            <a class="dd_item" href="/pages/aboutus/aboutus.php">가치체계</a>
                            <a class="dd_item" href="/pages/aboutus/ci.php">CI</a>
                            <a class="dd_item" href="/pages/aboutus/history.php">연혁</a>
                            <!--                            <a class="dd_item" href="/pages/aboutus/organization.php">조직도</a>-->
                            <a class="dd_item" href="/pages/aboutus/member.php">조직도·팀원</a>
                            <a class="dd_item" href="/pages/aboutus/Certification.php">인증현황</a>
                            <a class="dd_item" href="/pages/aboutus/contact-us.php">오시는길</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/team/RNDS.php" style="font-size: 20px; font-weight: 600; color:#644D9D;">사업분야</a>
                        <div class="dd_menu" aria-labelledby="aboutUsDropdown">
                            <a class="dd_item" href="/pages/team/RNDS.php">플랫폼 엔지니어링 서비스
                            </a>
                            <a class="dd_item" href="/pages/team/GMAC.php">연구·개발 서비스
                            </a>
                            <a class="dd_item" href="/pages/team/IRDS.php">디자인 솔루션 서비스
                            </a>
                            <a class="dd_item" href="/pages/team/BMPS.php">엑셀러레이팅</a>
                            <a class="dd_item" href="/pages/team/eduService.php">교육서비스</a>
                            <a class="dd_item" href="/pages/team/support.php">파트너링</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/Portfolio.php" style="font-size: 20px; font-weight: 600; color:#644D9D;">포트폴리오</a>
                    </li>
                    <li class="nav-item ">
                        <a class="over" href="#" id="communicationDropdown" onclick="goToNotice()" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px; font-weight: 600; color:#644D9D;">소통공간</a>
                        <div class="dd_menu" aria-labelledby="communicationDropdown">
                            <a class="dd_item" href="/pages/communication/notice.php">공지사항</a>
                            <a class="dd_item" href="/pages/communication/New.php">뉴스</a>
                            <a class="dd_item" href="/pages/communication/qna.php">Q&A</a>
                            <a class="dd_item" href="/pages/communication/Gallery.php">갤러리</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" onclick="gotoBMDS()" style="font-size: 20px; font-weight: 600; color:#644D9D;">
                            BMDS</a>
                    </li>
                </ul>
                <!--
                <ul class="" style="margin-left:25%; width:10%;">
                    <li class="">
                        <a aria-haspopup="true" aria-expanded="false" style="font-size: 16px; font-weight: 600; color:#FFF;"></a>
                        <a class="over" href="#" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px; font-weight: 600; color:#FFF;">언어</a>
                        <div class="" aria-labelledby="languageDropdown">
                            <a class="" href='https://wemerakl.com' style="color:#FFF; text-decoration: none;">한국어</a>
                            <a class="" href='https://wemerakl.com/en' style="color:#FFF; text-decoration: none;">영어</a>
                        </div> 
                    </li>
                </ul> -->
            </div>
        </div>
    </nav>
</header>

<div id="mobileNavOverlay" class="overlay"></div>
<div id="mobileNav" class="collapse navbar-collapse">
    <div class="mNavTop">
        <img style="width:10rem" src="/public/img/w_logo.png" alt="">
        <img src="/public/img/closeBtn.png" alt="" class="navClose">
    </div>
    <ul class="navbar-nav d-flex justify-content-right align-items-center">
        <li class="nav-item dropdown">
            <a class="over" href="#" id="aboutUsDropdown">회사소개</a>
            <div class="dd_menu" aria-labelledby="aboutUsDropdown">
                <a class="dd_item" href="/pages/aboutus/aboutus.php">가치체계</a>
                <a class="dd_item" href="/pages/aboutus/ci.php">CI</a>
                <a class="dd_item" href="/pages/aboutus/history.php">연혁</a>
                <!--                            <a class="dd_item" href="/pages/aboutus/organization.php">조직도</a>-->
                <a class="dd_item" href="/pages/aboutus/member.php">조직도·팀원</a>
                <a class="dd_item" href="/pages/aboutus/Certification.php">인증현황</a>
                <a class="dd_item" href="/pages/aboutus/contact-us.php">오시는길</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="over" href="#">사업분야</a>
            <div class="dd_menu" aria-labelledby="aboutUsDropdown">
                <a class="dd_item" href="/pages/team/RNDS.php">플랫폼 엔지니어링 서비스
                </a>
                <a class="dd_item" href="/pages/team/GMAC.php">연구·개발 서비스
                </a>
                <a class="dd_item" href="/pages/team/IRDS.php">디자인 솔루션 서비스
                </a>
                <a class="dd_item" href="/pages/team/BMPS.php">엑셀러레이팅</a>
                <a class="dd_item" href="/pages/team/eduService.php">교육서비스</a>
                <a class="dd_item" href="/pages/team/support.php">파트너링</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="" href="/pages/Portfolio.php">포트폴리오</a>
        </li>
        <li class="nav-item dropdown">
            <a class="over" href="#" id="communicationDropdown" data-toggle="dropdown">소통공간</a>
            <div class="dd_menu" aria-labelledby="communicationDropdown">
                <a class="dd_item" href="/pages/communication/notice.php">공지사항</a>
                <a class="dd_item" href="/pages/communication/New.php">뉴스</a>
                <a class="dd_item" href="/pages/communication/qna.php">Q&A</a>
                <a class="dd_item" href="/pages/communication/Gallery.php">갤러리</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="" href="#" onclick="gotoBMDS()">BMDS</a>
        </li>
    </ul>
    <!--
                <ul class="" style="margin-left:25%; width:10%;">
                    <li class="">
                        <a aria-haspopup="true" aria-expanded="false" style="font-size: 16px; font-weight: 600; color:#FFF;"></a>
                        <a class="over" href="#" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 16px; font-weight: 600; color:#FFF;">언어</a>
                        <div class="" aria-labelledby="languageDropdown">
                            <a class="" href='https://wemerakl.com' style="color:#FFF; text-decoration: none;">한국어</a>
                            <a class="" href='https://wemerakl.com/en' style="color:#FFF; text-decoration: none;">영어</a>
                        </div> 
                    </li>
                </ul> -->
</div>


<script>
    $('#navbarNav').mouseenter(function() {
        $('#header').addClass('headerActive')
        $('#navbarNav').addClass('navActive')
    });
    $('#navbarNav').mouseleave(function() {
        $('#header').removeClass('headerActive')
        $('#navbarNav').removeClass('navActive')
    });


    // mNavBtn 클릭 이벤트 핸들러
    $('.mNavBtn').on('click', function() {
        $('#mobileNav').toggleClass("navActive");
        $('#mobileNavOverlay').show();
    });
    $('.navClose, #mobileNavOverlay').on('click', function() {
        $('#mobileNav').toggleClass("navActive");
        $('#mobileNavOverlay').hide();
    });

</script>
<script>
    function gotoBMDS() {
        window.open("http://bmds.co.kr", "_blank");
    }

    function goToIntro() {
        location.href = "/pages/aboutus/aboutus.php";
    }

    function goToNotice() {
        location.href = "/pages/communication/notice.php";
    }

</script>
<div class="t_banner">
    <h1 class="top-text">

    </h1>
</div>
<div class="t_menu" style="margin-bottom: 1px;">
    <ul>
        <li><a href="/pages/aboutus/aboutus.php">가치체계</a></li>
        <li><a href="/pages/aboutus/ci.php">CI</a></li>
        <li><a href="/pages/aboutus/history.php">연혁</a></li>
        <li><a href="/pages/aboutus/member.php">조직도·팀원</a></li>
        <li><a href="/pages/aboutus/Certification.php">인증현황</a></li>
        <li><a href="/pages/aboutus/contact-us.php">오시는길</a></li>

        <li class="m_on mobileQuickMenu">
            <img onclick="location.href='/'" src="/public/img/home.png" alt="">
            <p class="top-text"></p>
            <div class="top-select-wrapper">
                <div class="top-select">메뉴 선택</div>
                <div class="top-options">
                    <div data-value="/pages/aboutus/aboutus.php">가치체계</div>
                    <div data-value="/pages/aboutus/ci.php">CI</div>
                    <div data-value="/pages/aboutus/history.php">연혁</div>
                    <div data-value="/pages/aboutus/member.php">조직도·팀원</div>
                    <div data-value="/pages/aboutus/Certification.php">인증현황</div>
                    <div data-value="/pages/aboutus/contact-us.php">오시는길</div>
                    <!-- 다른 메뉴 항목들도 추가 -->
                </div>
            </div>
        </li>
    </ul>
    <ul>
        <li><a href="/pages/team/RNDS.php">플랫폼 엔지니어링 서비스</a></li>
        <li><a href="/pages/team/GMAC.php">연구·개발 서비스</a></li>
        <li><a href="/pages/team/IRDS.php">디자인 솔루션 서비스</a></li>
        <li><a href="/pages/team/BMPS.php">엑셀러레이팅</a></li>
        <li><a href="/pages/team/eduService.php">교육서비스</a></li>
        <li><a href="/pages/team/support.php">파트너링</a></li>
        <li class="m_on mobileQuickMenu">
            <img onclick="location.href='/'" src="/public/img/home.png" alt="">
            <p class="top-text"></p>
            <div class="top-select-wrapper">
                <div class="top-select">메뉴 선택</div>
                <div class="top-options">
                    <div data-value="/pages/team/RNDS.php">플랫폼 엔지니어링 서비스</div>
                    <div data-value="/pages/team/GMAC.php">연구·개발 서비스</div>
                    <div data-value="/pages/team/IRDS.php">디자인 솔루션 서비스</div>
                    <div data-value="/pages/team/BMPS.php">엑셀러레이팅</div>
                    <div data-value="/pages/team/eduService.php">교육서비스</div>
                    <div data-value="/pages/team/support.php">파트너링</div>
                    <!-- 다른 메뉴 항목들도 추가 -->
                </div>
            </div>
        </li>

    </ul>
    <ul>
        <li><a href="/pages/Portfolio.php">포트폴리오</a></li>
        <li class="m_on mobileQuickMenu">
            <img onclick="location.href='/'" src="/public/img/home.png" alt="">
            <p class="top-text"></p>
            <div class="top-select-wrapper">
                <div class="top-select">메뉴 선택</div>
                <div class="top-options">
                    <div data-value="/pages/Portfolio.php">포트폴리오</div>
                </div>
            </div>
        </li>

    </ul>
    <ul>
        <li><a href="/pages/communication/notice.php">공지사항</a></li>
        <li><a href="/pages/communication/New.php">뉴스</a></li>
        <li><a href="/pages/communication/qna.php">Q&A</a></li>
        <li><a href="/pages/communication/Gallery.php">갤러리</a></li>
        <li class="m_on mobileQuickMenu">
            <img onclick="location.href='/'" src="/public/img/home.png" alt="">
            <p class="top-text"></p>
            <div class="top-select-wrapper">
                <div class="top-select">메뉴 선택</div>
                <div class="top-options">
                    <div data-value="/pages/communication/notice.php">공지사항</div>
                    <div data-value="/pages/communication/New.php">뉴스</div>
                    <div data-value="/pages/communication/qna.php">Q&A</div>
                    <div data-value="/pages/communication/Gallery.php">갤러리</div>
                    <!-- 다른 메뉴 항목들도 추가 -->
                </div>
            </div>
        </li>

    </ul>
</div>

<script>
    $(document).ready(function() {
        // 각 페이지에 따라 상단 텍스트 및 활성화된 메뉴 항목 설정
        if (window.location.href.includes("/pages/aboutus/")) {
            setMenuActive(0, '회사소개');
        } else if (window.location.href.includes("/pages/team/")) {
            setMenuActive(1, '사업분야');
        } else if (window.location.href.includes("/pages/Portfolio")) {
            setMenuActive(2, '포트폴리오');
        } else if (window.location.href.includes("/pages/communication/")) {
            setMenuActive(3, '소통공간');
        }

        // 활성화된 메뉴 항목 설정 함수
        function setMenuActive(index, topText) {
            $('.top-text').text(topText);
            $('.t_menu ul').eq(index).addClass('t_menuActive');

            var path = window.location.pathname;
            var menuIndex = -1;
            switch (path) {
                case '/pages/aboutus/aboutus.php':
                    menuIndex = 0;
                    break;
                case '/pages/aboutus/ci.php':
                    menuIndex = 1;
                    break;
                case '/pages/aboutus/history.php':
                    menuIndex = 2;
                    break;
                case '/pages/aboutus/member.php':
                    menuIndex = 3;
                    break;
                case '/pages/aboutus/Certification.php':
                    menuIndex = 4;
                    break;
                case '/pages/aboutus/contact-us.php':
                    menuIndex = 5;
                    break;
                case '/pages/team/RNDS.php':
                    menuIndex = 0;
                    break;
                case '/pages/team/GMAC.php':
                    menuIndex = 1;
                    break;
                case '/pages/team/IRDS.php':
                    menuIndex = 2;
                    break;
                case '/pages/team/BMPS.php':
                    menuIndex = 3;
                    break;
                case '/pages/team/eduService.php':
                    menuIndex = 4;
                    break;
                case '/pages/team/support.php':
                    menuIndex = 5;
                    break;
                case '/pages/Portfolio.php':
                    menuIndex = 0;
                    break;
                case '/pages/communication/notice.php':
                    menuIndex = 0;
                    break;
                case '/pages/communication/notice-detail.php':
                    menuIndex = 0;
                    break;
                case '/pages/communication/New.php':
                    menuIndex = 1;
                    break;
                case '/pages/communication/qna.php':
                    menuIndex = 2;
                    break;
                case '/pages/communication/Gallery.php':
                    menuIndex = 3;
                    break;
                default:
                    menuIndex = -1;
            }
            if (menuIndex !== -1) {
                $('.t_menuActive li').eq(menuIndex).addClass('active');
            }
        }
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectWrappers = document.querySelectorAll('.top-select-wrapper');

        selectWrappers.forEach(wrapper => {
            const customSelect = wrapper.querySelector('.top-select');
            const customOptions = wrapper.querySelector('.top-options');
            const customOptionDivs = customOptions.querySelectorAll('div');
            const currentPath = window.location.pathname;

            // 현재 페이지명을 드롭다운 버튼에 표시
            let isPageFound = false;
            customOptionDivs.forEach(option => {
                const value = option.getAttribute('data-value');
                if (currentPath.includes(value)) {
                    customSelect.textContent = option.textContent;
                    isPageFound = true;
                }
            });
            // 일치하는 페이지가 없을 경우 기본 텍스트 유지
            if (!isPageFound) {
                customSelect.textContent = '메뉴 선택';
            }

            // 드롭다운 토글
            customSelect.addEventListener('click', function() {
                customOptions.classList.toggle('show');
                customSelect.classList.toggle('active');
            });

            // 옵션 클릭 이벤트
            customOptionDivs.forEach(option => {
                option.addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    customSelect.textContent = this.textContent;
                    customOptions.classList.remove('show');
                    customSelect.classList.remove('active');
                    window.location.href = value;
                });
            });

            // 드롭다운 외부 클릭 시 닫기
            window.addEventListener('click', function(e) {
                if (!customSelect.contains(e.target) && !customOptions.contains(e.target)) {
                    customOptions.classList.remove('show');
                    customSelect.classList.remove('active');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.navbar-nav .nav-item a').click(function(){
            if ($(this).hasClass('navItemActive')) {
                $(this).removeClass('navItemActive');
            } else {
                $('.navbar-nav .nav-item a').removeClass('navItemActive');
                $(this).addClass('navItemActive');
            }
        });
    });
</script>


<script>
    // selectbox가 변경될 때 페이지를 이동하는 함수
    document.getElementById('t_menu_select').addEventListener('change', function() {
        var selectedPage = this.value; // 선택된 페이지의 URL
        window.location.href = selectedPage; // 페이지 이동
    });

    // 현재 페이지의 URL을 선택된 옵션으로 설정
    var currentPageUrl = window.location.pathname;
    document.querySelectorAll('#t_menu_select option').forEach(function(option) {
        if (option.value === currentPageUrl) {
            option.selected = true;
        }
    });

</script>
