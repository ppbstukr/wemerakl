<link rel="stylesheet" href="../../public/css/member.css">
<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../../common/Header.php') ?>
    <?php include('../communication/floatmenu.php') ?>
    <style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        background: linear-gradient(to bottom, rgba(100, 77, 157, 0.9), rgba(150, 137, 177, 0.9));
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-weight: bold;
        color: white;
    }

    .card:nth-child(1) {
        background-color: rgba(100, 77, 157, 0.9);
    }

    .card:nth-child(2) {
        background-color: #28a745;
    }

    .card:nth-child(3) {
        background-color: #17a2b8;
    }

    .card:nth-child(4) {
        background-color: #dc3545;
    }

    .card-text {
        color: white;
    }

    hr {
        border: none;
        /* 기본 border 제거 */
        height: 2px;
        /* 선의 높이 설정 */
        overflow: hidden;
        /* 동그란 점이 높이를 넘어가지 않게 하기 위해 */
        background-image: radial-gradient(circle, #FFF 50%, transparent 50%);
        /* 동그란 점 생성, 색상을 #FFF로 변경 */
        background-size: 8px 8px;
        /* 점의 크기 및 간격 설정 */
        background-position: 0 2px;
        /* 점의 위치 설정 */
        background-repeat: repeat-x;
        /* 가로 방향으로 반복 */
    }
    </style>
</head>

<body>
    <?php include('../../common/Nav.php') ?>

    <div class="team-banner">
        <div class="top-text">
            Member
        </div>
    </div>
    <div class="top_menu" style="margin-bottom: 50px;">
        <ul>
            <li><a href="aboutus.php">회사소개</a></li>
            <li><a href="ci.php">CI</a></li>
            <li><a href="history.php">연혁</a></li>
            <li><a href="organization.php">조직도</a></li>
            <li><a href="member.php">팀원소개</a></li>
            <li><a href="Certification.php">인증현황</a></li>
            <li><a href="wayToCome.php">오시는길</a></li>
        </ul>
    </div>

    <div class="subCont" style="width: 100% !important;">
        <div class="member-title">
            <h1>MERAKL People</h1>
            <h3>MERAKL은 상호 존중과 존경 아래에, 진정한 지식과 열정이 가득한 전문가 기질을 보유하고<br>
                고객에게 성공적 가치를 제공할 수 있는 기업 신념 아래 4개의 Lab 체계로 운영되고 있습니다. </h3>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">GMAC</h5>
                            <hr>
                            <p class="card-text">성장 중인 기업에게 기술시장조사는 미래의 비즈니스 기회를 포착하고 지속적인 성장을 위한 발판을 마련하는 중요한 역할을 합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <!--                todo-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">RNDS</h5>
                            <hr>
                            <p class="card-text">성장 중인 기업에게 기술시장조사는 미래의 비즈니스 기회를 포착하고 지속적인 성장을 위한 발판을 마련하는 중요한 역할을 합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <!--                todo-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">IRDS</h5>
                            <hr>
                            <p class="card-text">성장 중인 기업에게 기술시장조사는 미래의 비즈니스 기회를 포착하고 지속적인 성장을 위한 발판을 마련하는 중요한 역할을 합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <!--                todo-->
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">BMPS</h5>
                            <hr>
                            <p class="card-text">성장 중인 기업에게 기술시장조사는 미래의 비즈니스 기회를 포착하고 지속적인 성장을 위한 발판을 마련하는 중요한 역할을 합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex">
                <div>
                    <div class="ceoImg">
                        <img src="/public/img/member/ceo3.png">
                        <h1>이동규 대표이사</h1>
                    </div>
                </div>
                <div>
                    <div class="row">

                    </div>
                    <div>
                        <h5>▶ 전문분야</h5>
                        <div class="hello">hello</div>
                    </div>
                </div>
            </div>


            <div class="ceoImg">
                <img src="/public/img/member/cto3.png">
                <h1>김민정 대표이사</h1>
            </div>
            <div class="ceotext">
                <h1>▶ 전문이력</h1>
                <ul style="margin-bottom:1rem">
                    <li>· 부산대학교 로봇공학대학원 박사과정 수료</li>
                    <li>· 부산대학교 공학대학원 지형정보학과(GIS) 석사</li>
                    <li>· <span>現</span> (주)메라클 액셀러레이팅 대표이사</li>
                    <li>· <span>現</span> 글로벌 BIGS운영기관 및 글로벌 액셀러레이팅 총괄</li>
                    <li>· <span>現</span> 부산경제진흥원 기술창업 인큐베이팅 평가 심사위원</li>
                    <li>· <span>現</span> 경북창조경제혁신센터 글로벌액셀러레이팅 in 뉴욕 총괄</li>
                    <li>· <span>現</span> 부산 창조경제혁신센터 R&D멘토위원</li>
                    <li>· <span>現</span> 울산경제진흥원 청년CEO프로그램 멘토위원</li>
                    <li>· <span>現</span> 경남컨텐츠코리아랩 콘텐츠 창작자 전문멘토, IR심사 평가위원</li>
                    <li>· <span>現</span> 한국기업,기술가치평가협회 비즈니스모델 실무 강의</li>
                    <li>· <span>前</span> (주)메라클 기술이사</li>
                    <li>· <span>前</span> Comau Robotics Italy 기술마케팅 팀장</li>

                    <!--<li>· <span>前</span> (주)오성정밀금속 해외영업부 과장</li>
                <li>· <span>前</span> (주)Ex-Tech Korea EEHA 강사 재직</li>
                <li>· <span>前</span> (주)SNJ로보틱스 마케팅 및 기술영업지원 팀장</li>
                <li>· <span>前</span> 부산경제진흥원 IR 평가위원</li>-->
                </ul>
                <h1>▶ 전문분야</h1>
                <ul>
                    <!--<li>· Accelerator operation general manager</li>
                <li>· Support for global advancement and commercialization</li>
                <li>· StartUp education and management of childcare companies</li>-->
                    <li>. Head of Global Accelerating</li>
                    <li>. Global Expansion and Commercialization Support (BA)</li>
                    <li>. Startup Education and Incubation Support</li>
                    <li>. Tech-based Startup Education, Incubation & Investment</li>
                    <li>. Global IB Investment Attraction & IP Landing Fundraising</li>
                    <li>. New York AC Program Development & Attraction</li>
                </ul>
            </div>

            <div class="bottom-img">
                <img src='../../public/img/tbsp_is/20220930_bottom.jpg'>
            </div>
        </div>
    </div>
    <?php include("../../common/Footer.php") ?>
</body>

</html>