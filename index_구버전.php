<!DOCTYPE html>
<html lang="ko">

<head>
    <meta name="description" content="메라클 홈페이지의 홈화면입니다.">
    <title>메라클 홈페이지</title>
    <?php include("./common/Header.php") ?>
    <?php include('./db.php') ?>
    <?php //include("./pages/communication/floatmenu.php") 
    ?>
    <style>
    .mmm:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
    }
    </style>
</head>

<body>
    <?php include("./common/Nav.php") ?>
    <main class="intro">
        <div class="content">
            <h1>성공하는 기업보다는 가치있는 기업이 되고자 노력하는 (주)메라클이 되겠습니다.</h1>
        </div>
        <a href="#section"><span></span><span></span><span></span>Scroll</a>
    </main>

    <section class="section" id="section">
        <div class="row">
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
        </div>
    </section>




    <?php include("./common/Footer.php") ?>


</body>

</html>