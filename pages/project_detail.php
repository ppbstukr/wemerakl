<link rel="stylesheet" href="../public/css/project-detail.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../common/Header.php') ?>
</head>

<body>
    <?php include('../common/Nav.php') ?>
    <?php include('../pages/project-timer.php') ?>
    <div class="project-detail-container">
        <div class='project-detail-top'>
            <div class="prev-btn">
                <a href="/pages/project.php">
                    목록으로 돌아가기
                </a>
            </div>
            <div>
                <script>
                counter();
                </script>
            </div>
            <div class="detail-title">
                <h1>콘텐츠 서바이벌-투자연계 프로그램</h1>
                <span><?php  ?></span>
            </div>
            <!-- <div class="detail-photo">
                <div class="detail-photo-wrap">
                    <img src='/public/img/popup/ckl_pop3.png' alt='이미지1'>
                    <img src='/public/img/popup/ckl_card_1.png' alt='이미지2'>
                    <img src='/public/img/popup/ckl_card_2.png' alt='이미지3'>
                    <img src='/public/img/popup/ckl_card_3.png' alt='이미지4'>
                </div>
            </div>
        </div>
        <div class="detail-nav">
            <div class="detail-nav-wrap">
                <ul class="detail-nav-list">
                     <li>프로그램 소개</li>
                    <li>모집개요</li> -->
            <!-- <li>프로그램 요약</li> -->
            <!-- <li>참가혜택</li> -->
            <!-- </ul> -->
        </div>
        <div class="project-detail-main">
            <article class="project-detail-info">
                <!-- <h4>#프로그램 소개</h4> -->
                <img src="/public/img/popup/ckl_pop2.png">
            </article>
            <aside class="project-aside">
                <div class="aside-wrap">
                    <img src="/public/img/popup/ckl_pop3.png" alt="프로젝트 이미지">
                    <div class="aside-info">
                        <h2>콘텐츠 서바이벌-투자연계 프로그램</h2>
                        <p class="project-period">
                            2021.10.19 ~ 10.26 까지
                        </p>
                        <p class="project-people">
                            지원규모: 8개사 내외
                        </p>
                        <a href="http://www.gcaf.or.kr/bbs/board.php?bo_table=sub3_7&wr_id=887"
                            target="_blank"><span>신청하기</span></a>
                    </div>
                </div>
            </aside>
        </div>

    </div>

    </div>
    <?php include('../common/Footer.php') ?>
</body>

</html>
<script src="/public/js/project-detail.js" defer></script>