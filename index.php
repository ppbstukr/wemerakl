<!DOCTYPE html>
<html lang="ko">

<head>
    <meta name="description" content="VALUE, GROWTH, SOLUTION 생각을 현실로">
    <title>(주)메라클</title>
    <?php include("./common/Header.php") ?>
    <?php include('./db.php') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .footer {
            display: none;
        }
        .t_banner, .t_menu{display: none !important;}
        .popupImg2 {
            width: 47rem;
            height: 50rem;
            position: relative;
            background-image: url("./public/img/banner/자산 14.png");
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        #hoverClick {
            width: 8.2rem;
            height: 2rem;
            margin-right: 6.8rem;
        }

        .record {
            width: 100%;
            height: 2.5rem;
            float: right;
            display: flex;
            justify-content: end;
            align-items: center;
        }

        .tooltip {
            position: absolute;
            background-color: #f0f0f0;
            padding: 10px;
            border: 10px solid #ccc;
            display: inline-block;
            left: 50%;
            top: 50%;
            transform: translate(81%, -47%);
            z-index: 999;
            color: black;
            opacity: 1;
            width: 35rem;
            height: 31rem;
            background-image: url("./public/img/banner/merakl_ceo_profile_02.png");
            background-size: cover;
            background-position: center;
        }

        .popupImg {
            width: 48rem;
            height: 45rem;
            position: relative;
            /* overflow: hidden; */
            background-image: url("./public/img/banner/BMDS스페셜 이벤트 배너_1.png");
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .mmm:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }

        .slider-container {
            overflow: hidden;
        }

        .slider {
            display: flex;
            transition: transform 1.5s ease;
        }

        .slide {
            flex: 0 0 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide-content {
            display: flex;
            border: 1px solid #fff;
            width: 100%;
            height: 100%;
            background-image: url('/public/img/banner/정부지원금_배너2.png');
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            min-height: 800px;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 1rem;
            position: relative;
            min-width: 1700px;
            /* 원하는 최소 너비 */
            min-height: 800px;
            /* 원하는 최소 높이 */
        }

        .slide-content3 {
            display: flex;
            border: 1px solid #fff;
            width: 100%;
            height: 100%;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            min-height: 800px;
            background: #F7F7F7;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            min-width: 1700px;
            /* 원하는 최소 너비 */
            min-height: calc(100vh - 192px)
                /* 원하는 최소 높이 */
        }

        .slide-button {
            position: absolute;
            /* 절대적 위치 지정 */
            top: 82%;
            /* 상위 요소의 중앙에서 시작 */
            left: 50%;
            /* 상위 요소의 중앙에서 시작 */
            transform: translate(-50%, -50%);
            /* 버튼의 중앙으로 이동 */
            width: 280px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            cursor: pointer;
            opacity: 0;
        }

        .slide-button2 {
            position: absolute;
            /* 절대적 위치 지정 */
            top: 94%;
            /* 상위 요소의 중앙에서 시작 */
            left: 50%;
            /* 상위 요소의 중앙에서 시작 */
            transform: translate(-50%, -50%);
            /* 버튼의 중앙으로 이동 */
            width: 280px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            cursor: pointer;
        }

        .slide-content2 {
            display: flex;
            border: 1px solid #fff;
            width: 100%;
            height: 100%;
            background-image: url('/public/img/banner/정부 6.png');
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            min-height: 800px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 1rem;
            position: relative;
        }

        .slide-img {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 2rem;
        }

        .slide-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .slide-text2 {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .slide h2 {
            font-size: 4rem;
            margin: 0;
            font-weight: 600;
            color: #443189;
        }

        .slide h3 {
            font-size: 4rem;
            margin: 0;
        }

        .slide h4 {
            font-size: 3rem;
            margin: 0;
            margin-top: 1rem;
            font-weight: 500;
            color: #443189;
        }

        .slide p {
            font-size: 1.3rem;
            margin: 0;
            margin-top: 1rem;
            line-height: 1.5;
            color: #443189;
        }

        /* ////////////////////////////////////////////////////////////// */
        .vertical-slider {
            overflow: hidden;
            height: 300px;
            /* 원하는 높이로 설정 */
            position: relative;
        }

        .slide-item {
            width: 100%;
            transition: transform 2s;
            position: relative;
            top: 0;
            left: 0;
        }

        .vertical-slider .slide-item {
            animation: slideAnimation 20s infinite;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 300px;
            /* 슬라이드 컨테이너와 동일한 높이 */
        }

        @keyframes slideAnimation {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(-200%);
            }
        }

        /* ////////////////////////////////////////////////////////////// */
        .counseling {
            margin-top: 15px;
            line-height: 100%;
            border-bottom: 1px solid #eee;
            font-size: 12px;
            width: 30rem;
        }

        .counseling:after {
            content: "";
            position: relative;
            top: 35px;
            display: block;
            height: 1px;
            margin: 0 -15px;
            background: #ddd;
        }

        .counseling .counseling-tit {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
            color: #333;
            font-size: 15px;
        }

        .counseling .news-container {
            position: relative;
            width: 100%;
            height: 194px;
            overflow: hidden;
        }

        .counseling .news-list {
            position: absolute;
            top: 0px;
            width: 30rem;
        }

        .counseling .list-item {
            display: list-item;
            list-style-type: none;
            height: 28px;
        }

        .counseling .list-item:after {
            content: "";
            display: block;
            clear: both;
        }

        .counseling .list-item .list-tit {
            float: left;
            padding-top: 2px;
        }

        .counseling .list-item .list-tit:before {
            content: "";
            margin-right: 3px;
        }

        .counseling .list-item .list-stat {
            float: right;
            width: 82px;
            line-height: 16px;
            text-align: center;
            /* border-radius: 4px; */
            color: #fff;
            height: 16px;
        }

        .list-stat.green {
            background: #398e3d;
        }

        .list-stat.blue {
            background: #2879fe;
        }

        .list-stat.red {
            background: #d50100;
        }

        .list-stat.pink {
            background: #FE2EF7;
        }

        .bImage {
            background-image: url('/public/img/banner/사각형.png');
            background-size: cover;
            /* border-radius: 45px 0 0 45px; */
            background-repeat: no-repeat;
            height: 44rem;
            width: 26rem;
        }


        mark {
            background: linear-gradient(to top, #D1C2EB 52%, transparent 50%);
            background-size: 100% 80%;
            padding: 0;
        }

        .saupBtn {
            width: 22.5rem;
            height: 9rem;
            background: #F7F7F7;
            /* border-radius: 15px; */
            cursor: pointer;
        }

        .saupBtn:hover {
            background: #734CB7;
            transition: background 0.5s;
            color: white
        }

        .btnPur {
            width: 18rem;
            height: 3.4rem;
            background: linear-gradient(45deg, #755FCE, #5A86C3);
            /* border-radius: 30px; */
            font-size: 20px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-weight: 700;
        }


        /* =============================== */
        .wrap {
            display: flex;
            overflow: hidden;
        }

        .wrap .rolling-list ul {
            display: flex;
            margin-bottom: 0;
        }

        .wrap .rolling-list ul li {
            margin-left: 5rem;
            height: 4rem;
            box-sizing: border-box;
            /* border-radius: 20px; */
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }


        .rolling-list.original {
            animation: rollingleft1 33s linear infinite;
        }

        .rolling-list.clone {
            animation: rollingleft2 33s linear infinite;
        }


        .modalWrapBox {
            background-color: rgba(0, 0, 0, 0.125);
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        .modalDialog {
            display: inline-block;
            /* border-radius: 10px; */
            position: absolute;
            width: 90%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) !important;
            font-family: Pretendard_Rgula !important;
            overflow-y: scroll;
            max-height: 90vh;
        }

        .modalDialog::-webkit-scrollbar {
            width: 10px;
        }

        .modalDialog::-webkit-scrollbar-thumb {
            background-color: #bababa;
            /* border-radius: 10px; */
        }

        .modalDialog::-webkit-scrollbar-track {
            background-color: #eee;
            /* border-radius: 10px; */
        }

        .modalImgBox:first-child {
            border-right: 1px solid #ced4da;
        }

        .modalImgBox {
            width: 100%;
            background: #fff;
            padding: 1vw;
            border-top: 1px solid #ced4da;
            position: relative;
        }

        .modalImgBox img {
            width: 100%;
            height: 100%;
        }

        .modalGoverBtn {
            border-top: 0.5257623554153523vw solid #fff;
            display: flex;
        }

        .modalGoverBtn button:first-child {
            border-left: none;
            background: #6145be;
        }

        .modalGoverBtn button {
            border: 1px solid #fff;
            width: 33.3333%;
            padding: 0.7886435331230284vw 0;
            color: #fff;
            font-size: 1rem;
        }

        .modalGoverBtn button:last-child {
            border-right: none;
            background: #342b6a;
        }

        .record2 {
            width: 100%;
            position: absolute;
            top: 50%;
            left: 0;
            align-content: center;
            background-color: #ffffff00;
            cursor: pointer;
        }

        .numGoverSup,
        .record2 {
            display: flex;
            justify-content: center;
        }

        .modalHideBtn {
            background: #fff;
            /* border-radius: 0 0 10px 10px; */
            text-align: right;
            padding: 20px;
            border-top: 1px solid #ced4da;
        }

        .modalDialog {
            display: inline-block;
            /* border-radius: 10px; */
            position: absolute;
            /* top: 50%;
      left: 50%; */
            transform: translate(-50%, -50%);
            font-family: Pretendard_Rgula !important;
        }

        .modalHideBtn button {
            border: none;
            color: #fff;
            /* border-radius: 10px; */
            padding: 10px 15px;
        }

        .hideModalForTodayBtn {
            margin-right: 8px;
            background: #316cf4;
        }

        .hideModalBtn {
            background: #6e757c;
        }

        .numGoverSup {
            align-items: center;
            font-size: 3.7rem;
            font-weight: 700;
        }

        .modalGoverBtn button:nth-child(2) {
            background: #46358c;
        }

        .modal-dialog {
            pointer-events: auto !important;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 770px !important;
                margin: 1.75rem auto;
                width: 80%;
            }
        }

        @keyframes rollingleft1 {
            0% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-100%);
            }

            50.01% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        @keyframes rollingleft2 {
            0% {
                transition: translateX(0);
            }

            100% {
                transform: translateX(-200%);
            }
        }

        .banner_box {
            max-width: auto;
            margin: 2rem auto
        }

        .banner_box img {
            width: 100%;
            border-radius: 2rem
        }



        @media (max-width: 800px) {


            .numGoverSup {
                font-size: 3rem;
            }

            .mb_right {
                display: none !important;
            }

            .mb_left {
                width: 100% !important;
            }

            .bImage {
                width: 100% !important;
                background-position: center;
                background-size: 110%;
            }

            .slide-content3 div {
                width: 100% !important;
            }

            .header2 {
                margin-top: 3.1rem !important;
            }

            .mb_contents {
                margin-top: -3rem !important
            }

        }

        @media (max-width: 480px) {
            .numGoverSup {
                font-size: 2rem;
            }

        }

    </style>
</head>

<body>
    <?php include("./common/Nav.php") ?>
    <!--
    <header class="header2" style="margin-top:4.5rem; background:white; border-width:2px 0 2px 0; border-style:solid; border-color:#7f5cde; height:4.5rem;">
        <nav class="nav2 d-flex justify-content-start align-items-center">
            <div class="wrap">
                <div class="rolling-list">
                    <ul>
                        <li>
                            <div style="font-size:21px;font-family:Reko !important; margin-top:8px;width:60rem;">
                                지금 내가 받을 수 있는&nbsp;&nbsp;<span style="color:#7f5cde; font-family:Reko !important; font-size:26px;">정부지원금</span>은
                                얼마? 지금 바로 확인하러 가기!
                            </div>
                        </li>
                    </ul>
                </div>S
            </div>

            <div class="mb_left d-flex justify-content-center align-items-center" style="width:13rem; margin-left:3rem;">
                <div class="btnPur" onclick="goToBMDSList()">
                    <span style="margin-bottom:2px;">확인하러 가기</span>
                </div>
            </div>
        </nav>
    </header>
-->
    <div class="swiper ppbslide">

        <div class="swiper-wrapper">
            <div id="ppb01" class="swiper-slide">
                <div class="ppbcontainer">
                    <div class="motion">
                        <strong>VALUE,
                            GROWTH,
                            SOLUTION
                        </strong>
                        <p>생각을 현실로</p>
                    </div>
                </div>
                <div class="ppb01_bottom">
                    <div class="ppbcontainer02">
                        <h2>
                            <bold>MERAKL</bold>
                            ACHIEVEMENT
                            <p>여러 스타트업, 중소·중견 기업의 비즈니스의 성장과
                                지속성을 위해 달려온 메라클의 주요성과입니다. </p>
                        </h2>
                        <div class="cout_wrap">
                            <div class="cout_item">
                                <P>최근 3년간 지원기업 수</P>
                                <b class="cout_num" data-target="1650">0</b>
                            </div>
                            <div class="cout_item">
                                <P>최근 3년간 멘토링 멘티</P>
                                <b class="cout_num" data-target="300">0</b>
                            </div>
                            <div class="cout_item">
                                <P>글로벌엑셀, R&D 성과</P>
                                <b class="cout_num" data-target="180">0</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <script>
                //            숫자 카운트효과 js
                document.addEventListener('DOMContentLoaded', () => {
                    const counters = document.querySelectorAll('.cout_num');

                    counters.forEach(counter => {
                        const updateCount = () => {
                            const target = +counter.getAttribute('data-target');
                            const count = +counter.innerText;
                            const increment = target / 200; // 조정 가능한 속도 값

                            if (count < target) {
                                counter.innerText = Math.ceil(count + increment);
                                setTimeout(updateCount, 1); // 반복 시간 간격
                            } else {
                                counter.innerText = target;
                            }
                        };

                        const handleScroll = () => {
                            const rect = counter.getBoundingClientRect();
                            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                                updateCount();
                                window.removeEventListener('scroll', handleScroll);
                            }
                        };

                        window.addEventListener('scroll', handleScroll);
                        handleScroll(); // 페이지 로드 시에도 확인
                    });
                });

            </script>
-->

            <div id="ppb02" class="swiper-slide">
                <div class="ppbcontainer">
                    <h2 class="ftf_gs">MERAKL <b>BUSINESS</b><br>
                    </h2>
                    <p class="ftf_nnm">메라클은 성공적인 비즈니스를 완성시키기 위한 4가지 전문분야를 운영중입니다.</p>
                    <div class="meraklGrid01">
                        <div>
                            <img src="/public/img/main/mg01.png" alt="">
                            <div>
                                <h4>플랫폼 엔지니어링 서비스</h4>
                                <p>플랫폼 비즈니스 구현 및 운영을
                                    직접적으로 지원하여 수익쉐어</p>
                            </div>
                        </div>
                        <div>
                            <img src="/public/img/main/mg02.png" alt="">
                            <div>
                                <h4>연구·개발 서비스</h4>
                                <p>서비스 혹은 아이템의 신규개발/고도화를
                                    위한 시업모델 및 사업계획 수립을 지원</p>
                            </div>
                        </div>
                        <div>
                            <img src="/public/img/main/mg03.png" alt="">
                            <div>
                                <h4>디자인 솔루션 서비스</h4>
                                <p>IR기획과 피칭전략을 수립하고
                                    자료제작을 위한 디자인 솔루션 </p>
                            </div>
                        </div>
                        <div>
                            <img src="/public/img/main/mg04.png" alt="">
                            <div>
                                <h4>엑셀러레이팅</h4>
                                <p>스타트업의 아이디어 검증 및 실현을
                                    위한 글로벌 AC프로그램 운영</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div id="ppb03" class="swiper-slide">
                <div class="ppbcontainer">
                    <div class="meraklGrid02">
                        <div class="itemWrap">
                            <p>
                                <bold>도약·날개짓</bold>
                                방법을 몰라서 비상하지 못하는 원석
                                한 단계 더 올라설 수 있지만 그러지 못하는 보물
                                그 원석들을 찾아내어 비상할 수 있도록
                                도약의 발판을 지원하는 일이 메라클의 일입니다.
                            </p>
                            <img src="/public/img/mgbg03.png" alt="">
                        </div>
                        <div class="arrowWrap">
                            <div style="z-index:5">아이템선정·시장조사</div>
                            <div style="z-index:4">제품/서비스 개발</div>
                            <div style="z-index:3">MVP 및 고객평가</div>
                            <div style="z-index:2">시장론칭</div>
                            <div style="z-index:1">고객개발·시장확장</div>
                        </div>
                        <a href="">BMDS 프로세스 자세히 보러가기</a>
                    </div>
                </div>
            </div>
            <div id="ppb04" class="swiper-slide">
                <div class="ppbcontainer">
                    <div class="meraklGrid03">
                        <div class="portfolio">
                            <img src="/public/img/portfolio01.png" alt="">
                            <img src="/public/img/portfolio02.png" alt="">
                            <img src="/public/img/portfolio03.png" alt="">
                        </div>
                        <div class="right">
                            <h2>MERAKL
                                <bold>PORTFOLIO</bold>
                            </h2>
                            <p>R&D사업, 플랫폼 엔지니어링 사업,
                                IR디자인, 중소중견기업의 멘토링까지
                                메라클이 수행해온 업적들에 관한 포트폴리오입니다.</p>
                            <a href="/pages/Portfolio.php">포트폴리오 자세히 보러가기</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="ppb05" class="swiper-slide">
                <div class="meraklGrid04">
                    <div class="ppbcontainer">
                        <h2>2024년
                            청년창업사관학교 지원사업 (울산)
                            공식민간운영사<img src="/public/img/logoWrap.png" alt=""></h2>
                    </div>

                </div>

                <div class="meraklGrid05">
                    <div class="ppbcontainer">
                        <div class="mgWrap05">
                            <p>체계적이고 검증된 방법을 통해 아직 날개를 펴지 못한 아이템을
                                세상에 드러나게 하는것이 메라클의 일입니다.</p>
                            <div class="mlbutton">
                                <div onclick="location.href='/pages/team/RNDS.php'">
                                    사업분야 소개 <small>Merakl professionalism</small>
                                </div>
                                <div onclick="location.href='/pages/aboutus/contact-us.php'">
                                    메라클 <b>Contact Point</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="ppb07" class="swiper-slide">
                <div class="ppbcontainer pt_footer">
                    <b class="ftf_nnm"><img src="/public/img/footerLogo.png" alt=""></b>
                    <b>대표이사 : 이동규 | 전화 : 051-911-3330~7 | Fax : 051-911-2220 | 이메일 : office1@meraklus.com
                        사업자 등록번호 : 617-86-09934 | 통신판매업 신고번호 : 2018-부산해운대-0428
                        주소 : 부산광역시 해운대구 센텀중앙로 97(재송동), 센텀스카이비즈 A동 2407호

                        COPYRIGHTS © 2024 MERAKL Co.,Ltd.All Rights Reserved.</b>
                </div>

            </div>
        </div>
        <!--        <div class="swiper-pagination"></div>-->
        <div class="m_nav_wrap">
            <div class="m_nav_container">
                <div>
                    <a href="/">
                        <!--					<img src="/img/ppb_logo.png" alt="">-->
                        (주)메라클
                    </a>
                    <span class="material-symbols-outlined m_c_btn">close</span>

                </div>
                <div class="mNavWrap">
                    <a href="#">회사소개</a>
                    <a href="#">사업분야</a>
                    <a href="#">포트폴리오</a>
                    <a href="#">소통공간</a>
                    <a href="#">BMDS</a>

                </div>
                <p>
                    <b class="ftf_nnm">(주)메라클</b> <br>
                    대표이사 : 이동규
                    주소 : 부산광역시 해운대구 센텀중앙로 97(재송동), 센텀스카이비즈 A동 2407호
                    전화 : 051-911-3330~7
                </p>
            </div>
        </div>
    </div>

    <!--
    <div class="slider-container">
        <div class="slider">
            <div class="slide" style="min-height: 870px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div class="slide-content3">
                    <div class="mb_contents slide-text d-flex" style="width:104rem; margin-top:12rem;">
                         <div class="d-flex" style="width:100%; height:44rem; border-radius:50px;"> 
                        <div class="mb_left d-flex justify-content-between align-items-center" style="border-radius:50px; background:white; width:104rem; height:44rem;">
                            <div class="bImage">
                                <div style="font-size:15px; font-weight:600; color:white;margin:2rem 0 0 3rem;">
                                    최근 3년간 지원기업 수
                                </div>
                                <div class="d-flex">
                                    <div class="count" style="font-size:30px; font-weight:600; color:white;margin:0 0 0 3rem;">
                                        1650+
                                    </div>
                                    <div style="font-size:30px; font-weight:600; color:white;margin:0 0 0 .5rem;">
                                        
                                    </div>
                                </div>
                                <div style="height:20rem;"></div>
                                <div style="margin:2rem 0 0 2rem;">
                                    <img src="./public/img/banner/G24G22.png" style="width:20rem; height:5rem;" alt="메라클로고">
                                </div>
                                <div style="font-size:22px; font-weight:400; color:white;margin:.5rem 0 0 3rem;color:#ddd">
                                    혁신적인
                                    비즈니스 솔루션으로</div>
                                <div style="font-size:22px; font-weight:400; color:white;margin:.5rem 0 0 3rem;color:#ddd">
                                    성공을
                                    이끌어드립니다.</div>
                            </div>
                            <div class="mb_right d-flex justify-content-center align-items-center" style="width:78rem; height:44rem;">
                                <div class="d-flex flex-column justify-content-center align-items-start" style="width:69rem; height:45rem; margin-top:1rem;">
                                    <div style="font-size:38px; font-weight:500; letter-spacing:-0.5px; white-space:pre-line">(주)메라클은 성공하는 기업보다는
                                        여러분에게 <mark class="highlighted">가치있는 진실한</mark><mark class="highlighted"> 기업이 될 수 있도록
                                            최선</mark>을 다하겠습니다.
                                    </div>
                                    <div style="margin:1.125rem 0 2.5rem; font-size:21px;letter-spacing:-0.5px; white-space:pre-line">메라클(MERAKL)은 Merak과 Meraki와 Miracle의 합성어로
                                        혼신을 다하여 꿈을 이룰 수 있도록 기적같은 일을 하는 사람들이라는 뜻입니다.</div>
                                    <div class="d-flex flex-column justify-content-between" style="width:69rem; height:18.9rem;">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex justify-content-between saupBtn" onclick="searchDev()">
                                                <div class="d-flex justify-content-center align-items-center" style="width:8rem;">
                                                    <div class="d-flex justify-content-center align-items-center">

                                                        <img src="./public/img/banner/searchDev.png" style="width:2.5rem; height:2.5rem;" alt="연구개발서비스">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center align-items-start" style="width:18rem;letter-spacing:-1px;">
                                                    <div class="f1" style="font-size:22px; font-weight:600;">연구개발서비스
                                                    </div>
                                                    <div style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                        혁신적인 R&D기획
                                                        서비스 및<br />성공적인 기술사업화 전략
                                                        수립
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between saupBtn" onclick="excel()">
                                                <div class="d-flex justify-content-center align-items-center" style="width:8rem;">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="./public/img/banner/excel.png" style="width:2.5rem; height:2.5rem;" alt="액셀러레이팅">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center align-items-start" style="width:18rem;letter-spacing:-1px;">
                                                    <div style="font-size:22px; font-weight:600;">액셀러레이팅</div>
                                                    <div style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                        스타트업의 아이디어 검증
                                                        및 실현을<br />위한 글로벌 AC
                                                        프로그램 운영
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between saupBtn">
                                                <div class="d-flex justify-content-center align-items-center" style="width:8rem;">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="./public/img/banner/BMplatform.png" style="width:2.5rem; height:2.5rem;" alt="플랫폼 솔루션 프로바이더">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center align-items-start" style="width:18rem;letter-spacing:-1px;">
                                                    <div style="font-size:22px; font-weight:600; line-height:25px;">
                                                        플랫폼
                                                        솔루션<br />프로바이더(PSP)</div>
                                                    <div style="font-size:15px; letter-spacing: -1px; margin-top:7px;">
                                                        플랫폼 비즈니스 구현 및
                                                        운영을<br />직접적으로 지원하여
                                                        수익 쉐어
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex justify-content-between saupBtn" onclick="IRdesign()">
                                                <div class="d-flex justify-content-center align-items-center" style="width:8rem;">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="./public/img/banner/IRdesign.png" style="width:2.5rem; height:2.5rem;" alt="IR 디자인 솔루션">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center align-items-start" style="width:18rem;letter-spacing:-1px;">
                                                    <div style="font-size:22px; font-weight:600;">IR 디자인 솔루션</div>
                                                    <div style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                        IR 기획과 피칭 전략을
                                                        수립하고<br />자료제작을 위한
                                                        디자인 솔루션
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between saupBtn" onclick="BMplatform()">
                                                <div class="d-flex justify-content-center align-items-center" style="width:8rem;">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="./public/img/banner/support.png" style="width:2.5rem; height:2.5rem;" alt="BM 디자인 솔루션">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center align-items-start" style="width:18rem;letter-spacing:-1px;">
                                                    <div style="font-size:22px; font-weight:600;">BM 디자인 솔루션</div>
                                                    <div style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                        고객 아이템 실현 준비를
                                                        위한<br />Design
                                                        Thinking BM 방법론 제공
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between saupBtn" onclick="openTech()">
                                                <div class="d-flex justify-content-center align-items-center" style="width:8rem;">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img src="./public/img/banner/open.png" style="width:2.5rem; height:2.5rem;" alt="창업/기술경영 교육">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center align-items-start" style="width:18rem;letter-spacing:-1px;">
                                                    <div style="font-size:22px; font-weight:600;">창업/기술경영 교육</div>
                                                    <div style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                        전문적인 강사진과
                                                        체계적인 커리<br />큘럼으로 창업 및
                                                        사업화
                                                        역량 강화
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="banner_box">
                            <img src="/public/img/main_banner01.png" alt="">
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
-->

    <!-- 팝업창 -->
    <div id="popup1" class="modalWrapBox modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modalDialog">
            <div style="display: flex; align-items: center">
                <div class="modalImgBox">
                    <img src="./public/img/banner/ulsan.png" alt="" />
                </div>

            </div>
            <div class="modal-footer modalHideBtn">
                <button type="button" class="btn btn-secondary hideModalBtn" data-dismiss="modal">
                    닫기
                </button>
                <button id="closeButton" class="btn btn-primary hideModalForTodayBtn">
                    오늘 하루 동안 보지 않기
                </button>
            </div>
        </div>
    </div>

    <div id="popup3" class="modalWrapBox modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modalDialog">
            <div style="display: flex; align-items: center">

                <div class="modalImgBox" onclick="goToRoadMap()">
                    <img src="./public/img/banner/자산 14.png" alt="" />
                    <div class="record2">
                        <div class="count2 numGoverSup">0</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer modalHideBtn">
                <button type="button" class="btn btn-secondary hideModalBtn" data-dismiss="modal">
                    닫기
                </button>
                <button id="closeButton" class="btn btn-primary hideModalForTodayBtn">
                    오늘 하루 동안 보지 않기
                </button>
            </div>
        </div>
    </div>
    <?php include("./common/Footer.php") ?>
</body>
<script>
    // Get the tooltip element
    let tooltip = document.querySelector('.tooltip');

    // Function to show the tooltip
    function showTooltip() {
        tooltip.style.display = "";
    }

    // Function to hide the tooltip
    function hideTooltip() {
        tooltip.style.display = "none";
    }

    // Attach the event listeners to your hover element (hoverClick)
    document.getElementById('hoverClick').addEventListener('mouseover', showTooltip);
    document.getElementById('hoverClick').addEventListener('mouseout', hideTooltip);

    function map2() {
        location.href = "/pages/load/Map2.php";
    }

    function list2() {
        location.href = "/pages/load/list.php";
    }

    function searchDev() {
        location.href = "/pages/team/RNDS.php";
    }

    function excel() {
        location.href = "/pages/team/GMAC.php";
    }

    function openTech() {
        location.href = "/pages/team/GMAC.php";
    }

    function IRdesign() {
        location.href = "/pages/team/IRDS.php";
    }

    function BMplatform() {
        location.href = "/pages/team/BMPS.php";
    }

    function support() {
        location.href = "/pages/team/GMAC.php";
    }

    function goToBMDSList() {
        window.open("https://bmds.co.kr/", "_blank");
    }
    // 슬라이드를 자동으로 이동하는 함수
    function autoSlide() {
        // 슬라이더 요소 가져오기
        const slider = document.querySelector(".slider");

        // 슬라이더 아이템 개수와 슬라이드 너비 가져오기
        const slideCount = slider.children.length;
        const slideWidth = slider.clientWidth;

        // 현재 슬라이드 인덱스 초기화
        let currentSlide = 0;

        // 자동 슬라이드 함수
        const slide = () => {
            // 다음 슬라이드로 이동
            currentSlide++;
            if (currentSlide >= slideCount) {
                currentSlide = 0; // 마지막 슬라이드면 처음으로 돌아감
            }

            // 슬라이더를 이동시키는 애니메이션 설정
            slider.style.transform = `translateX(-${slideWidth * currentSlide}px)`;

            // 일정 시간 간격으로 자동 슬라이드 실행
            setTimeout(slide, 8000); // 5초마다 슬라이드 이동
        };

        // 최초 실행을 5초 후로 지연
        setTimeout(() => {
            slide();
        }, 8000);
    }


    // 페이지 로드 시 자동 슬라이드 시작
    //autoSlide();

</script>
<script>
    var ul = $(".news-list");
    var switch_move = 0;
    var li_first = $(ul).find("li:first-child");
    var li_clone = $(li_first).clone();

    function move() {
        setInterval(function() {
            if (switch_move == 1) {
                $(li_first).remove();
                $(ul).append(li_clone);
                $(ul).css("top", 0);
                switch_move = 0;
            } else {
                $(ul).animate({
                    top: "-28px"
                });
                switch_move = 1;
            }
            li_first = $(ul).find("li:first-child");
            li_clone = $(li_first).clone();
        }, 1000);
    }
    $(document).ready(function() {
        move();
    });

</script>
<script>
    const counter = ($counter, max) => {
        let now = max;

        const handle = setInterval(() => {
            $counter.innerHTML = Math.ceil(max - now).toLocaleString();

            // 목표수치에 도달하면 정지
            if (now < 1) {
                clearInterval(handle);
            }

            // 증가되는 값이 계속하여 작아짐
            const step = now / 10;

            // 값을 적용시키면서 다음 차례에 영향을 끼침
            now -= step;
        }, 50);
    };

    window.onload = () => {
        // 카운트를 적용시킬 요소
        const $counter = document.querySelector(".count");

        // 목표 수치
        const max = 2320;

        // 화면 뜨고나서 0.5초 뒤에 카운트시작
        setTimeout(() => counter($counter, max), 500);
    };

    const counter2 = (max) => {
        const animatedValue = max;
        const range = animatedValue - 0;
        const startTime = new Date().getTime();

        const animate = () => {
            const currentTime = new Date().getTime();
            const elapsed = currentTime - startTime;
            const progress = elapsed / 3000;

            if (progress < 1) {
                const counter = Math.round(0 + range * progress);

                // DOM에 값을 적용
                document.querySelector('.count2').innerHTML = `총 ${counter.toLocaleString()}원`;
                requestAnimationFrame(animate);
            } else {
                // 애니메이션 완료 시 최종 값 적용
                document.querySelector('.count2').innerHTML = `총 ${animatedValue.toLocaleString()}원`;
            }
        };

        // 애니메이션 시작
        requestAnimationFrame(animate);
    };

    window.onload = () => {
        // 목표 수치
        const max = 352554231;

        // 화면 뜨고 나서 0.5초 뒤에 카운트 시작
        setTimeout(() => counter2(max), 500);
    };


    function goToMoney() {
        location.href = "./pages/load/Map2.php";
    }

    function goToList() {
        location.href = "./pages/load/list.php";
    }

    // 롤링 배너 복제본 생성
    let roller = document.querySelector(".rolling-list");
    roller.id = "roller1"; // 아이디 부여

    let clone = roller.cloneNode(true);
    // cloneNode : 노드 복제. 기본값은 false. 자식 노드까지 복제를 원하면 true 사용
    clone.id = "roller2";
    document.querySelector(".wrap").appendChild(clone); // wrap 하위 자식으로 부착

    document.querySelector("#roller1").style.left = "0px";
    document.querySelector("#roller2").style.left =
        document.querySelector(".rolling-list ul").offsetWidth + "px";
    // offsetWidth : 요소의 크기 확인(margin을 제외한 padding값, border값까지 계산한 값)

    roller.classList.add("original");
    clone.classList.add("clone");
    //
    //    // 페이지 로딩 시 자동으로 팝업 띄우기
    //    $(document).ready(function() {
    //        // 저장된 날짜 가져오기
    //        const hideModal = localStorage.getItem("hideModalForToday");
    //        const currentDate = new Date().toDateString();
    //
    //        // 저장된 날짜와 현재 날짜 비교
    //        if (hideModal !== currentDate) {
    //            $('#popup1').modal('show');
    //        }
    //        
    //        // 오늘 하루 동안 보지 않기 버튼 클릭 시
    //        document.getElementById('closeButton').addEventListener('click', function() {
    //            // 오늘 날짜를 저장
    //            localStorage.setItem("hideModalForToday", currentDate);
    //            $('#popup1').modal('hide'); // 팝업을 숨깁니다.
    //        });
    //        
    //        // 저장된 날짜와 현재 날짜 비교
    //        if (hideModal !== currentDate) {
    //            $('#popup2').modal('show');
    //        }
    //        
    //        // 오늘 하루 동안 보지 않기 버튼 클릭 시
    //        document.getElementById('closeButton').addEventListener('click', function() {
    //            // 오늘 날짜를 저장
    //            localStorage.setItem("hideModalForToday", currentDate);
    //            $('#popup2').modal('hide'); // 팝업을 숨깁니다.
    //        });
    //        
    //        // 저장된 날짜와 현재 날짜 비교
    //        if (hideModal !== currentDate) {
    //            $('#popup3').modal('show');
    //        }
    //        
    //        // 오늘 하루 동안 보지 않기 버튼 클릭 시
    //        document.getElementById('closeButton').addEventListener('click', function() {
    //            // 오늘 날짜를 저장
    //            localStorage.setItem("hideModalForToday", currentDate);
    //            $('#popup3').modal('hide'); // 팝업을 숨깁니다.
    //        });
    //    });
    //
    //    function goToBMLearning() {
    //        window.open("https://bmds.co.kr/main/BMLearning", "_blank");
    //    }
    //
    //    function goToYoutube() {
    //        window.open("https://www.youtube.com/@MeraklCompany/streams",
    //            "_blank");
    //    }
    //
    //    function goToJoin() {
    //        window.open("https://bmds.co.kr/main/bmds/buildup/list", "_blank");
    //    }
    //
    //    function goToRoadMap() {
    //        $('#popup1').modal('hide');
    //        window.open("https://bmds.co.kr/main/BMLearning/main/roadmap", "_blank");
    //    }


    $(document).ready(function() {
        // 페이지 로딩 시 자동으로 팝업 띄우기
        showModal('#popup1', 'hideModalForToday1');
        showModal('#popup2', 'hideModalForToday2');
        showModal('#popup3', 'hideModalForToday3');

        // 오늘 하루 동안 보지 않기 버튼 클릭 시
        $('.hideModalForTodayBtn').click(function() {
            var popupId = $(this).closest('.modalWrapBox').attr('id');
            var storageKey = popupId.replace('popup', 'hideModalForToday');
            var currentDate = new Date().toDateString();
            localStorage.setItem(storageKey, currentDate);
            $('#' + popupId).modal('hide'); // 팝업을 숨깁니다.
        });
    });

    function showModal(popupId, storageKey) {
        // 저장된 날짜 가져오기
        var hideModal = localStorage.getItem(storageKey);
        var currentDate = new Date().toDateString();

        // 저장된 날짜와 현재 날짜 비교
        if (hideModal !== currentDate) {
            $(popupId).modal('show');
        }
    }

    function goToBMLearning() {
        window.open("https://bmds.co.kr/main/BMLearning", "_blank");
    }

    function goToYoutube() {
        window.open("https://www.youtube.com/@MeraklCompany/streams", "_blank");
    }

    function goToJoin() {
        window.open("https://bmds.co.kr/main/bmds/buildup/list", "_blank");
    }

    function goToRoadMap() {
        $('#popup1').modal('hide');
        window.open("https://bmds.co.kr/main/BMLearning/main/roadmap", "_blank");
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.7.1/dist/gsap.min.js"></script>

<script>
    // 첫 번째 Swiper 인스턴스 초기화
    var swiper1 = new Swiper(".ppbslide", {
        direction: "vertical",
        slidesPerView: "auto",
        speed: 700,
        autoHeight: true,
        mousewheel: true,
        freeMode: true,
            preloadImages: false, // 필요할 때 이미지를 로드합니다.
    lazy: {
        loadPrevNext: true, // 현재 슬라이드의 이전과 다음 슬라이드를 미리 로드합니다.
    },
        hashNavigation: {
            watchState: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function(index, className) {
                return '<div class="' + className + '"><span>' + (index + 1) + '</span></div>';
            },
        },
        nested: true,
        breakpoints: {
            640: {},
            768: {},
            1024: {
                freeMode: {
                    enabled: false,
                    sticky: false,
                },
            },
        },
        on: {
            slideChangeTransitionEnd: function() {
                const activeSlide = document.querySelector('.swiper-slide-active');
                if (activeSlide) {
                    const counters = activeSlide.querySelectorAll('.cout_num');
                    counters.forEach(counter => animateCount(counter));
                }
            }
        }
    });

    swiper1.on('slideChange', function() {
        if (swiper1.activeIndex !== 0) {
            $('#header').addClass('headerNavActive');
        } else {
            $('#header').removeClass('headerNavActive');
        }
    });

    function animateCount(element) {
        const targetValue = parseInt(element.getAttribute('data-target'), 10);
        gsap.fromTo(element, {
            innerHTML: 0
        }, {
            innerHTML: targetValue,
            duration: 2,
            ease: 'power1.inOut',
            snap: {
                innerHTML: 1
            },
            onUpdate: function() {
                element.innerHTML = Math.floor(element.innerHTML);
            }
        });
    }

    // Initialize the counter for the first slide
    const initialSlide = document.querySelector('.swiper-slide-active');
    if (initialSlide) {
        const counters = initialSlide.querySelectorAll('.cout_num');
        counters.forEach(counter => animateCount(counter));
    }

</script>

<script>
// JavaScript를 사용하여 컨테이너의 높이를 동적으로 설정합니다.
function setContainerHeight() {
    const container = document.querySelector('.swiper');
    const windowHeight = window.innerHeight; // 뷰포트의 높이를 가져옵니다.
    container.style.height = windowHeight + 'px'; // 컨테이너의 높이를 뷰포트의 높이로 설정합니다.
}

// 페이지 로드 및 리사이즈 시 컨테이너의 높이를 설정합니다.
window.addEventListener('load', setContainerHeight);
window.addEventListener('resize', setContainerHeight);
</script>

</html>
