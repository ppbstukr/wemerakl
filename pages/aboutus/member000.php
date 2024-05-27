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
        width: 100%;
        height: 100%;
    }

    .card1 {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
    }

    .card-title {
        font-weight: bold;
        color: white;
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

    .m35 {
        margin: 3rem 0 5rem 0;
    }

    .long_card {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 48%;
        height: 126px;
        transition: all 0.3s ease;
    }

    .long_card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
    }

    .big_card {
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .ceoImg2 {
        width: 14rem;
        height: 18rem;
        border-radius: 10px 0 0 10px;
        /* border: 1px solid #8C8C8C; */
        text-align: center;
    }

    .ceoImg2>h1 {
        margin-top: 1rem;
        font-size: 1rem;
    }

    .ceotext2 {
        width: 22rem;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        /* border:1px solid #8C8C8C; */
    }

    .ceotext2>h1 {
        font-size: 1rem;
        color: #644D9D;
        margin: 1rem 0;
    }

    .ceotext2>ul>li {
        font-size: 0.6rem;
        margin-bottom: 2px;
        color: #8d8d8d;
    }

    .ceotext2>ul>li>span {
        font-family: 'Roboto', sans-serif !important;
        font-size: 0.6rem;
        color: #8d8d8d;
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
                    <div class="card" style="background:rgba(250,128,114,0.7);">
                        <div class="card-body">
                            <h5 class="card-title">GMAC</h5>
                            <p class="card-text">
                                창업자의 창업역량과 일반기업 임직원들의 핵심역량을 강화할 수 있는 교육서비스를 지원하며, 유망 스타트업을 발굴하여 비즈니스모델 고도화, 시장경쟁력 강화 등을
                                지원하여 국내외 사업 런칭을 지원합니다.
                            </p>
                            <p class="card-text">
                                #아이디어 도출 및 기획 #창업교육 #린스타트업 #인큐베이팅 #스타트업발굴
                            </p>
                        </div>
                    </div>
                </div>
                <!--                todo-->
                <div class="col-md-6 col-lg-3">
                    <div class="card" style="background:rgba(255,140,0,0.7);">
                        <div class="card-body">
                            <h5 class="card-title">RNDS</h5>
                            <p class="card-text">
                                스타트업·중소·중견기업의 신기술/신제품 개발 및 공정혁신의 기술경쟁력 강화를 위한 기술기획 및 기술개발 활동을 지원합니다.
                            </p>
                            <p class="card-text" style="margin-top: 52px;">
                                #R&D 기획 #기술사업화 지원 #성장전략 #기술습득전략 #기술활용전략
                            </p>
                        </div>
                    </div>
                </div>
                <!--                todo-->
                <div class="col-md-6 col-lg-3">
                    <div class="card" style="background:rgba(60,179,113,0.7);">
                        <div class="card-body">
                            <h5 class="card-title">IRDS</h5>
                            <p class="card-text">
                                대면 설득을 위한 피칭용 IR자료와 정부지원사업 발표자료를 기획 및 투자, 연구개발관련 전문성 방향의 디자인 역량 강화를 지원합니다.
                            </p>
                            <p class="card-text" style="margin-top: 50px;">
                                #IR자료 #제안서디자인 #PT시나리오 코칭 #발표PPT #회사소개서 #린스타트업
                            </p>
                        </div>
                    </div>
                </div>
                <!--                todo-->
                <div class="col-md-6 col-lg-3" style="background:rgba();">
                    <div class="card" style="background:rgba(173,216,230,0.7);">
                        <div class="card-body">
                            <h5 class="card-title">BMPS</h5>
                            <p class="card-text">
                                웹 기반의 플랫폼 서비스를 지원합니다.
                            </p>
                            <p class="card-text" style="margin-top: 108px;">
                                #웹개발 설계 #시장트렌드 분석 #기술트렌드 분석
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex m35 big_card" style="background: rgba(100,77,157,0.3);">
                <div style="border-right:1px solid rgba(0,0,0,0.1);margin-right:1rem;">
                    <div class="ceoImg2">
                        <img src="/public/img/member/ceo3.png">
                    </div>
                </div>
                <div style="width:80%; margin:5px 1rem 0 0;">
                    <div class="d-flex" style="margin-top:4px;">
                        <h5 style="color:#806FBE; font-weight:600;">이동규</h5>
                        <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                            MERAKL CEO</h6>
                    </div>
                    <p style="border-top:1px solid #806FBE;"></p>
                    <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다. 청년 문제를
                        주제로 매달 15매의 원고를 써내라는
                        도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                    </h6>
                    <p style="border-top:1px solid #806FBE;"></p>
                    <div style="width:100%;">
                        <div class="d-flex justify-content-around">
                            <div class="ceotext2">
                                <h1>▶ 전문이력</h1>
                                <ul style="margin-bottom:1rem">
                                    <li>· 한양대학교 기술사업화(MOT) 박사수료</li>
                                    <li>· 한양대학교 전자공학 석사</li>
                                    <li>· <span>現</span> 부산테크노파크 기업지원단 전문위원</li>
                                    <li>· <span>現</span> 부산경제진흥원 기술경영 자문위원</li>
                                    <li>· <span>現</span> 기술보증기금 외부 전문가</li>
                                    <li>· <span>現</span> 한국산업기술평가관리원 평가위원</li>
                                </ul>
                            </div>
                            <div class="ceotext2">
                                <h1>&nbsp;</h1>
                                <ul style="margin-bottom:1rem">
                                    <li>· <span>現</span> 창업진흥원 외부심사 및 평가위원</li>
                                    <li>· <span>現</span> 중소기업기술정보진흥원 R&D 평가위원</li>
                                    <li>· <span>前</span> 삼성전자 SOC연구소/경영전략 책임연구원</li>
                                </ul>
                            </div>
                            <div class="ceotext2">
                                <h1>▶ 전문분야</h1>
                                <ul>
                                    <li>· R&D Process, Feasibility, Process Innovation</li>
                                    <li>· Business Development, BM Generation & Innovation</li>
                                    <li>· Production Management & Innovation</li>
                                    <li>· R&D Management & Strategy</li>
                                    <li>· Tech-Financing IR, Start-up Accelerating</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex m35 big_card" style="background: rgba(250,128,114,0.3);">
                <div style="border-right:1px solid rgba(0,0,0,0.1);margin-right:1rem;">
                    <div class="ceoImg2">
                        <img src="/public/img/member/cto3.png">
                    </div>
                </div>
                <div style="width:80%; margin:5px 1rem 0 0;">
                    <div class="d-flex" style="margin-top:4px;">
                        <h5 style="color:#806FBE; font-weight:600;">김민정</h5>
                        <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                            MERAKL CEO</h6>
                    </div>
                    <p style="border-top:1px solid #806FBE;"></p>
                    <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다. 청년 문제를
                        주제로 매달 15매의 원고를 써내라는
                        도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                    </h6>
                    <p style="border-top:1px solid #806FBE;"></p>
                    <div style="width:100%;">
                        <div class="d-flex justify-content-around">
                            <div class="ceotext2">
                                <h1>▶ 전문이력</h1>
                                <ul style="margin-bottom:1rem">
                                    <li>· 부산대학교 로봇공학대학원 박사과정 수료</li>
                                    <li>· 부산대학교 공학대학원 지형정보학과(GIS) 석사</li>
                                    <li>· <span>現</span> (주)메라클 액셀러레이팅 대표이사</li>
                                    <li>· <span>現</span> 글로벌 BIGS운영기관 및 글로벌 액셀러레이팅 총괄</li>
                                    <li>· <span>現</span> 부산경제진흥원 기술창업 인큐베이팅 평가 심사위원</li>
                                    <li>· <span>現</span> 경북창조경제혁신센터 글로벌액셀러레이팅 in 뉴욕 총괄</li>
                                </ul>
                            </div>
                            <div class="ceotext2">
                                <h1>&nbsp;</h1>
                                <ul style="margin-bottom:1rem">
                                    <li>· <span>現</span> 부산 창조경제혁신센터 R&D멘토위원</li>
                                    <li>· <span>現</span> 울산경제진흥원 청년CEO프로그램 멘토위원</li>
                                    <li>· <span>現</span> 경남컨텐츠코리아랩 콘텐츠 창작자 전문멘토, IR심사 평가위원</li>
                                    <li>· <span>現</span> 한국기업,기술가치평가협회 비즈니스모델 실무 강의</li>
                                    <li>· <span>前</span> (주)메라클 기술이사</li>
                                    <li>· <span>前</span> Comau Robotics Italy 기술마케팅 팀장</li>
                                </ul>
                            </div>
                            <div class="ceotext2">
                                <h1>▶ 전문분야</h1>
                                <ul>
                                    <li>. Head of Global Accelerating</li>
                                    <li>. Global Expansion and Commercialization Support (BA)</li>
                                    <li>. Startup Education and Incubation Support</li>
                                    <li>. Tech-based Startup Education, Incubation & Investment</li>
                                    <li>. Global IB Investment Attraction & IP Landing Fundraising</li>
                                    <li>. New York AC Program Development & Attraction</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex m35 big_card" style="background: rgba(255,140,0,0.3);">
                <div style="border-right:1px solid rgba(0,0,0,0.1);margin-right:1rem;">
                    <div class="ceoImg2">
                        <img src="">
                    </div>
                </div>
                <div style="width:80%; margin:5px 1rem 0 0;">
                    <div class="d-flex" style="margin-top:4px;">
                        <h5 style="color:#806FBE; font-weight:600;">문성한</h5>
                        <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                            MERAKL Resarch Director</h6>
                    </div>
                    <p style="border-top:1px solid #806FBE;"></p>
                    <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다. 청년 문제를
                        주제로 매달 15매의 원고를 써내라는
                        도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                    </h6>
                    <p style="border-top:1px solid #806FBE;"></p>
                    <div style="width:100%;">
                        <div class="d-flex justify-content-around">
                            <div class="ceotext2">
                                <h1>▶ 전문이력</h1>
                                <ul style="margin-bottom:1rem">
                                    <li>· 한양대학교 기술사업화(MOT) 박사수료</li>
                                    <li>· 한양대학교 전자공학 석사</li>
                                    <li>· <span>現</span> 부산테크노파크 기업지원단 전문위원</li>
                                    <li>· <span>現</span> 부산경제진흥원 기술경영 자문위원</li>
                                    <li>· <span>現</span> 기술보증기금 외부 전문가</li>
                                    <li>· <span>現</span> 한국산업기술평가관리원 평가위원</li>
                                </ul>
                            </div>
                            <div class="ceotext2">
                                <h1>&nbsp;</h1>
                                <ul style="margin-bottom:1rem">
                                    <li>· <span>現</span> 창업진흥원 외부심사 및 평가위원</li>
                                    <li>· <span>現</span> 중소기업기술정보진흥원 R&D 평가위원</li>
                                    <li>· <span>前</span> 삼성전자 SOC연구소/경영전략 책임연구원</li>
                                </ul>
                            </div>
                            <div class="ceotext2">
                                <h1>▶ 전문분야</h1>
                                <ul>
                                    <li>· R&D Process, Feasibility, Process Innovation</li>
                                    <li>· Business Development, BM Generation & Innovation</li>
                                    <li>· Production Management & Innovation</li>
                                    <li>· R&D Management & Strategy</li>
                                    <li>· Tech-Financing IR, Start-up Accelerating</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member -->
            <div style="text-align:center;">
                <fieldset class="form-group p-3" style="border-top: solid #806FBE 3px;">
                    <legend style="width:150px; color:#806FBE; font-weight:600;">Lab Member
                    </legend>
                </fieldset>
            </div>
            <div class="d-flex justify-content-between">
                <div class="m35 long_card" style="background: rgba(250,128,114,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">황사훈</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    GMAC
                                    책임 연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="m35 long_card" style="background: rgba(250,128,114,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">황다교</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    GMAC
                                    선임 연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <!--<div class="m35 long_card" style="background: rgba(255,140,0,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">김현석</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    RNDS
                                    선임 연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>-->
                <div class="m35 long_card" style="background: rgba(255,140,0,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">라주호</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    RNDS
                                    선임 연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="m35 long_card" style="background: rgba(255,140,0,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">서연우</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    RNDS
                                    연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <div class="m35 long_card" style="background: rgba(60,179,113,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">김상훈</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    IRDS
                                    책임 연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="m35 long_card" style="background: rgba(60,179,113,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">강주연</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    IRDS
                                    선임 연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="m35 long_card" style="background: rgba(173,216,230,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">김창권</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    BMPS
                                    연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="m35 long_card" style="background: rgba(173,216,230,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">유종철</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    BMPS
                                    연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">

                <div class="m35 long_card" style="background: rgba(100,77,157,0.3);">
                    <div class="d-flex" style="width:100%; height:15%;">
                        <div style="width:17rem; height:100%; margin-right:1rem;">
                            <img style="max-width:22rem; max-height:150px; border-radius:10px 0 0 10px;"
                                src="/public/img/banner/about.jpg" />
                        </div>
                        <div style="width:80%; margin:5px 1rem 0 0;">
                            <div class="d-flex" style="margin-top:4px;">
                                <h5 style="color:#806FBE; font-weight:600;">안보은</h5>
                                <h6 style="color:#806FBE; font-weight:600; font-size: 12px; margin:5px 0 0 10px;">
                                    경영지원
                                    책임 연구원</h6>
                            </div>
                            <p style="border-top:1px solid #806FBE;"></p>
                            <h6 style="color:#806FBE; font-size: 13px;">그래서 청년의 문제가 뭔데?” 물으면서 아무말 대잔치를 시작했다.
                                청년 문제를
                                주제로 매달 15매의 원고를 써내라는
                                도무지 무리한청탁을 받았고, 청년 문제 같은 건 없다는 말로 첫 회 원고를 때웠다.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-img mt-4">
            <img src='../../public/img/tbsp_is/20220930_bottom.jpg'>
        </div>
    </div>
    </div>
    <?php include("../../common/Footer.php") ?>
</body>

</html>