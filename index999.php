<!DOCTYPE html>
<html lang="ko">

<head>
    <meta name="description" content="메라클 홈페이지의 홈화면입니다.">
    <title>메라클 홈페이지</title>
    <?php include("./common/Header.php") ?>
    <?php include('./db.php') ?>
    <?php //include("./pages/communication/floatmenu.php") 
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.6.0/jquery.marquee.min.js"></script> -->
    <style>
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
        min-height: 800px;
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

    /* .slide-button {
        margin-top: 1.5rem;
        background-color: #443189;
        text-decoration: none;
        color: white;
        border-radius: 7px;

    } */

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
        border-radius: 4px;
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
        border-radius: 45px 0 0 45px;
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
        border-radius: 15px;
        cursor: pointer;
    }

    .saupBtn:hover {
        background: #734CB7;
        transition: background 0.5s;
        color: white
    }

    .btnPur {
        width: 16rem;
        height: 3.4rem;
        background: linear-gradient(45deg, #755FCE, #5A86C3);
        border-radius: 30px;
        font-size: 20px;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        font-weight: 700;
        margin-left: 1rem;
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
        width: 50rem;
        height: 4rem;
        box-sizing: border-box;
        border-radius: 20px;
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
    </style>
</head>

<body>
    <?php include("./common/Nav.php") ?>
    <?php //include("./pages/communication/floatmenu.php") ?>
    <header class="header2"
        style="margin-top:4.5rem; background:white; border-width:2px 0 2px 0; border-style:solid; border-color:#7f5cde; height:4.5rem;">
        <nav class="nav2 d-flex justify-content-center align-items-center">
            <div style="width:24rem;"></div>
            <div class="wrap" style="width:59rem;">
                <!-- 배너표시영역 -->
                <div class="rolling-list">
                    <!-- 원본배너 -->
                    <ul>
                        <li>
                            <div style="font-size:21px;font-family:Reko !important; margin-top:8px;width:60rem;">
                                지금 내가 받을 수 있는&nbsp;&nbsp;<span
                                    style="color:#7f5cde; font-family:Reko !important; font-size:26px;">정부지원금</span>은
                                얼마? 지금 바로 확인하러 가기!
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center" style="width:35rem;">
                <div class="btnPur" onclick="goToMoney()">
                    <span style="margin-bottom:2px;">처음이신 분</span>
                </div>
                <div class="btnPur" onclick="goToList()">
                    <span style="margin-bottom:2px;">인증코드를 받으신 분</span>
                </div>
            </div>
            <div style="width:13rem;"></div>
        </nav>
    </header>
    <div class="slider-container">
        <div class="slider">
            <!-- 슬라이드 아이템들 -->
            <!-- <div class="slide"
                style="min-height: 800px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <main class="intro ">
                    <div class="content">
                        <h1>성공하는 기업보다는 가치있는 기업이 되고자 노력하는 메라클이 되겠습니다.</h1>
                    </div>
                    <a href="#section"><span></span><span></span><span></span>Scroll</a>
                </main>
            </div> -->
            <!-- <div class="slide"
                style="min-height: 800px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div class="slide-content">
                    <div class="slide-text d-flex" style="width:65%;">
                        <div class="">
                            <button class="slide-button" onclick="map2()"></button>
                            <button class="slide-button2" onclick="list2()">이미 알고있다면?</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="slide"
                style="min-height: 870px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div class="slide-content3">
                    <div class="slide-text d-flex" style="width:104rem; margin-top:9rem;">
                        <div class="d-flex" style="width:100%; height:44rem; border-radius:50px;">
                            <div class="d-flex justify-content-between align-items-center"
                                style="border-radius:50px; background:white; width:104rem; height:44rem;">
                                <div class="bImage">
                                    <div style="font-size:15px; font-weight:600; color:white;margin:2rem 0 0 3rem;">
                                        최근 3년간 지원기업 수
                                    </div>
                                    <div class="d-flex">
                                        <div class="count"
                                            style="font-size:30px; font-weight:600; color:white;margin:0 0 0 3rem;">
                                            0
                                        </div>
                                        <div style="font-size:30px; font-weight:600; color:white;margin:0 0 0 .5rem;">
                                            +
                                        </div>
                                    </div>
                                    <div style="height:20rem;"></div>
                                    <div style="margin:2rem 0 0 2rem;">
                                        <img src="./public/img/banner/G24G22.png" style="width:20rem; height:5rem;"
                                            alt="메라클로고">
                                    </div>
                                    <div style="font-size:22px; font-weight:600; color:white;margin:.5rem 0 0 3rem;">
                                        혁신적인
                                        비즈니스 솔루션으로</div>
                                    <div style="font-size:22px; font-weight:600; color:white;margin:.5rem 0 0 3rem;">
                                        성공을
                                        이끌어드립니다.</div>
                                </div>
                                <div class="d-flex justify-content-center align-items-center"
                                    style="width:78rem; height:44rem;">
                                    <div class="d-flex flex-column justify-content-center align-items-start"
                                        style="width:69rem; height:45rem; margin-top:1rem;">
                                        <div style="font-size:38px; font-weight:900; letter-spacing:-0.5px;">(주)메라클은
                                            성공하는
                                            기업보다는 여러분에게
                                            <mark class="highlighted">가치있는 진실한</mark>
                                            <mark class="highlighted">기업이 될 수 있도록 최선</mark>을 다하겠습니다.
                                        </div>
                                        <div style="margin:2.5rem 0; font-size:21px;letter-spacing:-0.5px;">
                                            메라클(MERAKL)은 Merak과 Meraki와 Miracle의 합성어로 혼신을 다하여 꿈을 이룰 수 있도록 기적같은 일을 하는
                                            사람들이라는 뜻입니다.</div>
                                        <div class="d-flex flex-column justify-content-between"
                                            style="width:69rem; height:18.9rem;">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex justify-content-between saupBtn"
                                                    onclick="searchDev()">
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:8rem;">
                                                        <div class="d-flex justify-content-center align-items-center"
                                                            style="width:5rem; height:5rem; border-radius:15rem; background:white;">
                                                            <img src="./public/img/banner/searchDev.png"
                                                                style="width:2.5rem; height:2.5rem;" alt="연구개발서비스">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center align-items-start"
                                                        style="width:18rem;letter-spacing:-1px;">
                                                        <div class="f1" style="font-size:22px; font-weight:600;">연구개발서비스
                                                        </div>
                                                        <div
                                                            style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                            혁신적인 R&D기획
                                                            서비스 및<br />성공적인 기술사업화 전략
                                                            수립
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between saupBtn" onclick="excel()">
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:8rem;">
                                                        <div class="d-flex justify-content-center align-items-center"
                                                            style="width:5rem; height:5rem; border-radius:15rem; background:white;">
                                                            <img src="./public/img/banner/excel.png"
                                                                style="width:2.5rem; height:2.5rem;" alt="액셀러레이팅">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center align-items-start"
                                                        style="width:18rem;letter-spacing:-1px;">
                                                        <div style="font-size:22px; font-weight:600;">액셀러레이팅</div>
                                                        <div
                                                            style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                            스타트업의 아이디어 검증
                                                            및 실현을<br />위한 글로벌 AC
                                                            프로그램 운영
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between saupBtn">
                                                    <!-- onclick="openTech()"> -->
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:8rem;">
                                                        <div class="d-flex justify-content-center align-items-center"
                                                            style="width:5rem; height:5rem; border-radius:15rem; background:white;">
                                                            <img src="./public/img/banner/BMplatform.png"
                                                                style="width:2.5rem; height:2.5rem;"
                                                                alt="플랫폼 솔루션 프로바이더">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center align-items-start"
                                                        style="width:18rem;letter-spacing:-1px;">
                                                        <div style="font-size:22px; font-weight:600; line-height:25px;">
                                                            플랫폼
                                                            솔루션<br />프로바이더(PSP)</div>
                                                        <div
                                                            style="font-size:15px; letter-spacing: -1px; margin-top:7px;">
                                                            플랫폼 비즈니스 구현 및
                                                            운영을<br />직접적으로 지원하여
                                                            수익 쉐어
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex justify-content-between saupBtn"
                                                    onclick="IRdesign()">
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:8rem;">
                                                        <div class="d-flex justify-content-center align-items-center"
                                                            style="width:5rem; height:5rem; border-radius:15rem; background:white;">
                                                            <img src="./public/img/banner/IRdesign.png"
                                                                style="width:2.5rem; height:2.5rem;" alt="IR 디자인 솔루션">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center align-items-start"
                                                        style="width:18rem;letter-spacing:-1px;">
                                                        <div style="font-size:22px; font-weight:600;">IR 디자인 솔루션</div>
                                                        <div
                                                            style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                            IR 기획과 피칭 전략을
                                                            수립하고<br />자료제작을 위한
                                                            디자인 솔루션
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between saupBtn"
                                                    onclick="BMplatform()">
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:8rem;">
                                                        <div class="d-flex justify-content-center align-items-center"
                                                            style="width:5rem; height:5rem; border-radius:15rem; background:white;">
                                                            <img src="./public/img/banner/support.png"
                                                                style="width:2.5rem; height:2.5rem;" alt="BM 디자인 솔루션">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center align-items-start"
                                                        style="width:18rem;letter-spacing:-1px;">
                                                        <div style="font-size:22px; font-weight:600;">BM 디자인 솔루션</div>
                                                        <div
                                                            style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
                                                            고객 아이템 실현 준비를
                                                            위한<br />Design
                                                            Thinking BM 방법론 제공
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between saupBtn"
                                                    onclick="openTech()">
                                                    <div class="d-flex justify-content-center align-items-center"
                                                        style="width:8rem;">
                                                        <div class="d-flex justify-content-center align-items-center"
                                                            style="width:5rem; height:5rem; border-radius:15rem; background:white;">
                                                            <img src="./public/img/banner/open.png"
                                                                style="width:2.5rem; height:2.5rem;" alt="창업/기술경영 교육">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center align-items-start"
                                                        style="width:18rem;letter-spacing:-1px;">
                                                        <div style="font-size:22px; font-weight:600;">창업/기술경영 교육</div>
                                                        <div
                                                            style="font-size:15px; letter-spacing: -1px; margin-top:3px;">
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
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="slide" style="min-height:800px; background-color: rgba(207, 124, 57, 0.2)">
                <div class="slide-content2 d-flex justify-content-between">
                    <div class="slide-text2">
                        <h1>WELCOME &nbsp;&nbsp;BACK &nbsp;&nbsp;TO</h1>
                        <div style="font-size:9rem; margin:0; height:11rem; margin-top:-2rem;">SCHOOL</div>
                        <h1 style="margin-top:1rem;">AUGUST &nbsp;&nbsp;FEST</h1>
                    </div>
                    <div class="slide-text2">
                        <div style="font-size:9rem; margin:0; width:25rem; height:11rem; text-align:right;">18</div>
                        <div style="font-size:8rem; margin-top:-4rem; width:25rem; height:11rem; text-align:right;">Aug.
                        </div>
                        <h4 style="font-size:2rem; width:25rem; text-align:right;">2023년 8월 18일, 메라클이!</h4>
                        <h4 style="font-size:2rem; width:25rem; text-align:right;">온라인 교육을 시작합니다!</h4>
                        <h4 style="font-size:2rem; width:25rem; text-align:right;">많은 참여 부탁드립니다!</h4>
                    </div>
                </div>
            </div>-->
        </div>
    </div>

    <!-- 실시간 상담 접수 현황 -->
    <!-- <section class="section" id="section">
        <div class="d-flex justify-content-center">
            <article class="counseling">
                <h2 class="counseling-tit fw-400">실시간 상담 접수 현황</h2>
                <ul>
                    <li class="list-item d-flex justify-content-between">
                        <span class="list-tit">신청자</span>
                        <span class="list-tit">연락처</span>
                        <span class="list-tit">신청일</span>
                        <span class="list-tit">신청현황</span>
                    </li>
                </ul>
                <div class="news-container">
                    <ul class="news-list">
                        <?php
                        $sql = "select buyer_name, buyer_tel, created_at, meetStat from payments order by created_at";
                        $res = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                        <li class="list-item d-flex justify-content-between">
                            <span
                                class="list-tit"><?php echo mb_substr($row['buyer_name'], 0, 1, 'UTF-8') . str_repeat('*', mb_strlen($row['buyer_name'], 'UTF-8') - 1) ?></span>
                            <span
                                class="list-tit"><?php echo explode("-", $row['buyer_tel'])[0] . "-" . substr_replace(explode("-", $row['buyer_tel'])[1], "***", 1, strlen(explode("-", $row['buyer_tel'])[1])) . "-" . str_repeat("*", strlen(explode("-", $row['buyer_tel'])[2])) ?></span>

                            <span class="list-tit"><?php echo $row['created_at'] ?></span>
                            <span class="list-stat <?php
                                                        if ($row['meetStat'] === '대기중') {
                                                            echo 'pink';
                                                        } else if ($row['meetStat'] === '취소됨') {
                                                            echo 'red';
                                                        } elseif ($row['meetStat'] === '완료됨') {
                                                            echo 'green';
                                                        } elseif ($row['meetStat'] === '확인됨') {
                                                            echo 'blue';
                                                        }
                                                        ?>"><?php echo $row['meetStat'] ?></span>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </article>
        </div>
    </section> -->
    <!-- <div class="row">
            <div class="col">
                <div class="row d-flex justify-content-center">
                    <span class="sa sa-up">
                        <div style="font-size:2.5rem; color: #644D9D; font-weight: 900; margin-top:4.5rem;">
                            사업분야</div>
                    </span>
                </div>
                <div class="row d-flex justify-content-center">
                    <span class="sa sa-up" data-sa-delay="200">
                        <hr style="border-top:3.5px solid #644D9D; width:150px; margin-bottom: 3rem;" />
                    </span>
                </div>
                <div class="row d-flex justify-content-center" style="margin-bottom:4rem;">
                    <span class="sa sa-up one mmm" data-sa-delay="400">
                        <a href="/pages/team/RNDS.php" class="main_img2">
                            <img src="./public/img/img_link/연구개발.png" alt="연구개발 서비스 소개" />
                        </a>
                    </span>
                    <span class="sa sa-up three mmm" data-sa-delay="600">
                        <a href="/pages/team/GMAC.php" class="main_img2">
                            <img src="./public/img/img_link/글로벌액셀.png" alt="글로벌 액셀러레이팅 & 비즈니스 어시스턴스 소개" />
                        </a>
                    </span>
                    <span class="sa sa-up four mmm" data-sa-delay="800">
                        <a href="/pages/team/IRDS.php" class="main_img2">
                            <img src="./public/img/img_link/IRDesign.png" alt="IR 디자인 지원 소개" />
                        </a>
                    </span>
                    <span class="sa sa-up four mmm" data-sa-delay="1000">
                        <a href="/pages/team/BMPS.php" class="main_img2">
                            <img src="./public/img/img_link/flatform.png" alt="플랫폼 서비스 지원 소개" />
                        </a>
                    </span>
                    <span class="sa sa-up two mmm" data-sa-delay="1200">
                        <a href="/pages/team/GMAC.php" class="main_img2">
                            <img src="./public/img/img_link/교육서비스.png" alt="창업/기술경영 교육 서비스 소개" />
                        </a>
                    </span>
                    <span class="sa sa-up four mmm" data-sa-delay="1400">
                        <a href="/pages/team/GMAC.php" class="main_img2">
                            <img src="./public/img/img_link/연계.png" alt="각종 지원사업 연계 소개" />
                        </a>
                    </span>
                </div>
            </div>
        </div> -->

    <?php include("./common/Footer.php") ?>
</body>
<script>
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
                top: -28 + "px"
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
</script>

</html>