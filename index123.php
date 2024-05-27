<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./common/newHeader.php") ?>
    <link href="./public/js/slider15/scroller_roll.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
    <div class="container-fluid position-relative p-0">
        <?php include('./common/newGnp.php') ?>
        <div class="carousel-item">
            <img class="w-100" src="./public/img/startupimg/carousel-2.jpg" alt="Image" />
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                        Creative & Innovative
                    </h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                        Creative & Innovative Digital Solution
                    </h1>
                    <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                        Quote</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">

                <!-- <img class="w-100" src="./public/img/startupimg/carousel-1.jpg" alt="Image" /> -->
                <!-- <img class="w-100" src="./public/img/banner/test.png" alt="Image" /> -->
                <img class="w-100" src="./public/img/banner/b353.png" alt="Image" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="background : rgba(17,17,17,0.5); width:100%">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown" style="margin-top: 1%;">

                            Creative & Innovative
                        </h5>
                        <h1 class="display-6 text-white mb-md-4 animated zoomIn">
                            성공하는 기업보다 가치있는 기업이 되고자
                        </h1>
                        <h1 class="display-6 text-white mb-md-4 animated zoomIn">
                            노력하는 (주)메라클이 되겠습니다.
                        </h1>


                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"
                            style="margin-bottom: 1%;">Contact Us</a>

                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item">
                <img class="w-100" src="./public/img/startupimg/carousel-2.jpg" alt="Image" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                            Creative & Innovative
                        </h5>
                        <h1 class="display-6 text-white mb-md-4 animated zoomIn">
                            성공하는 기업보다 가치있는 기업이 되고자
                        </h1>
                        <h1 class="display-6 text-white mb-md-4 animated zoomIn">
                            노력하는 메라클이 되겠습니다.
                        </h1>

                        <a href="/pages/aboutus/newWayToCome.php"
                            class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, 0.7)">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword" />
                        <button class="btn btn-primary px-4">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Facts Start / 애니메이션-->
    <div class="container-fluid facts pt-lg-0" style="background: rgba(247,244,255,1); margin-top:0">
        <div class="container pt-lg-0">
            <!-- Happy Clients Cards -->
            <div class="row gx-0 justify-content-between">
                <!-- Happy Clients Card -->
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s" style="width: 33.66667% !important">
                    <div class="d-flex align-items-center justify-content-start" style="height: 150px">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px; margin-right:2%; margin-top:1%;">
                            <!-- <i class="fa fa-users text-primary"></i> -->
                            <img src="./public/img/icon/work_count.png" alt="누적 작업 건수 아이콘" />
                        </div>
                        <div class="ps-4 d-flex flex-row align-items-center" style=" margin-top:1%;">
                            <h5 class="text-dark">누적 작업 건수</h5>&nbsp;
                            <h1 class="text-dark" data-toggle="counter-up" style="font-family: gmB;">12345</h1>
                            &nbsp;
                            <span class="text-dark" style="font-family: gmB;">건 이상</span>
                        </div>
                    </div>
                </div>
                <!-- Happy Clients Card -->
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-end" style="height: 150px">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px; margin-right:2%; margin-top:1%;">
                            <!-- <i class="fa fa-check text-primary"></i> -->
                            <img src="./public/img/icon/good.png" alt="고객 만족도 아이콘" />

                        </div>
                        <div class="ps-4 d-flex flex-row align-items-center" style=" margin-top:1%;">
                            <h5 class="text-dark">고객 만족도</h5>&nbsp;
                            <h1 class="text-dark" data-toggle="counter-up" style="font-family: gmB;">99</h1>&nbsp;
                            <span class="text-dark" style="font-family: gmB;">%</span>
                        </div>
                    </div>
                </div>
                <!-- Happy Clients Card -->
                <div class="col-lg-3 wow zoomIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center justify-content-end" style="height: 150px">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px; margin-right:2%; margin-top:1%;">
                            <!-- <i class="fa fa-users text-primary"></i> -->
                            <img src="./public/img/icon/comeon.png" alt="재방문률 아이콘" />

                        </div>
                        <div class="ps-4 d-flex flex-row align-items-center" style=" margin-top:1%;">
                            <h5 class="text-dark">재방문률</h5>&nbsp;
                            <h1 class="text-dark" data-toggle="counter-up" style="font-family: gmB;">99</h1>&nbsp;
                            <span class="text-dark" style="font-family: gmB;">%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Facts Start -->
    <!-- Vendor Start / 파트너사 -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 my-1">
            <div class="bg-white">
                <!-- <div class="owl-carousel vendor-carousel">
                    <img src="./public/img/startupimg/vendor-1.jpg" alt="" />
                    <img src="./public/img/startupimg/vendor-2.jpg" alt="" />
                    <img src="./public/img/startupimg/vendor-3.jpg" alt="" />
                    <img src="./public/img/startupimg/vendor-4.jpg" alt="" />
                    <img src="./public/img/startupimg/vendor-5.jpg" alt="" />
                    <img src="./public/img/startupimg/vendor-6.jpg" alt="" />
                    <img src="./public/img/startupimg/vendor-7.jpg" alt="" />
                    <img src="./public/img/startupimg/vendor-8.jpg" alt="" />
                    <img src="./public/img/startupimg/vendor-9.jpg" alt="" />
                </div> -->
                <div class="wrap2">
                    <!-- 배너표시영역 -->
                    <div class="rolling-list">
                        <!-- 원본배너 -->
                        <ul>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-1.jpg" alt="" />
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-2.jpg" alt="" />
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-3.jpg" alt="" />
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-4.jpg" alt="" />
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-5.jpg" alt="" />
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-6.jpg" alt="" />
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-7.jpg" alt="" />
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-8.jpg" alt="" />
                                </div>
                            </li>
                            <li>
                                <div class="image-wrap">
                                    <img src="./public/img/startupimg/vendor-9.jpg" alt="" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <hr style="margin: 0 !important">

    <!-- About Start  / 우리사업 배치 왔다갔다-->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 2%;">
        <div class="container py-5">
            <!-- ================================================= -->
            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">R&D</h5>
                        <h1 class="mb-0">연구개발서비스</h1>
                    </div>
                    <p class="mb-4">기업의 기술수준과 사업화 역량을 전문적으로 진단하여 체계적이고 맞춤화된 기술경영전략 및<br />(글로벌)사업화 전략을 수립하고 기업의 기술사업화
                        경쟁력 강화를 통한 성장 모멘텀을 제공합니다.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>R&D 기획 및 사업계획 지원
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>기술습득전략 수립
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>기술활용전략 수립
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>기술사업화 지원
                            </h5>
                        </div>
                    </div>

                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">R&D란?</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="./public/img/mainTeamImg/rnd.jpg" style="object-fit: cover" />
                    </div>
                </div>
            </div>
            <!-- ================================================= -->

            <div class="row g-5 mb-5">
                <div class="col-lg-5" style="min-height: 500px">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="./public/img/mainTeamImg/액셀.jpg" style="object-fit: cover" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary">Accelerating</h5>
                        <h1 class="mb-0">글로벌 액셀러레이팅</h1>
                    </div>
                    <p class="mb-4">유망 스타트업을 발굴하여[비즈니스모델 고도화], [시장경쟁력 강화], [인큐베이팅], [투자/법률 자문]을 지원하고<br />자체 보유하고 있는 글로벌
                        네트워킹을 통하여 후속투자 및 국내외 사업 런칭을 지원합니다.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>글로벌 경쟁력강화 지원
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>글로벌 마케팅 기업 협업 지원
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>글로벌 진출 기회 제공
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>글로벌 사업화 및 투자유치 기회 제공
                            </h5>
                        </div>
                    </div>

                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">액셀러레이팅이란?</a>
                </div>
            </div>
            <!-- ================================================= -->

            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Business Model Design Solution</h5>
                        <h1 class="mb-0">BMDS</h1>
                    </div>
                    <p class="mb-4">BMDS는 Business Model Design Solution으로, 비즈니스모델 수립 뿐만 아니라 전문가 매칭을 통한<br />사업 기획단계부터
                        사업 착수, 사업 확장단계까지 창업 단계에 맞는 최적의 솔루션을 제공해주는 프로그램입니다.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>BM 설계
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>사업계획서 작성
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>멘토링 프로그램
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>솔루션 제공
                            </h5>
                        </div>
                    </div>

                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn"
                        data-wow-delay="0.9s">BMDS란?</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="/public/img/mainTeamImg/BMDS.jpg" style="object-fit: cover" />
                    </div>
                </div>
            </div>
            <!-- ================================================= -->

            <div class="row g-5 mb-5">
                <div class="col-lg-5" style="min-height: 500px">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="/public/img/mainTeamImg/디자인.jpg" style="object-fit: cover" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Design</h5>
                        <h1 class="mb-0">디자인</h1>
                    </div>
                    <p class="mb-4">경영 상태, 비즈니스 모델, 재무 정보, 성장 전망 등을 강조하고, 투자자들에게 투자의 가치를 전달하기 위해<br />투자유치 고객을 대상으로 대면
                        설득을 위한 피칭용 IR자료를 기획 및 제작해드립니다.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>자금조달 전략 수립
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>국내외 IR 전략 수립
                            </h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>IR 디자인기획 및 제작
                            </h5>
                            <h5 class="mb-3">
                                <i class="fa fa-check text-primary me-3"></i>PT 시나리오 지원 및 코칭
                            </h5>
                        </div>
                    </div>

                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">IR
                        디자인이란?</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->
    <!-- Todo:==================================================================================================================================================== -->

    <!-- Service Start / 프로세스-->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h1 class="mb-0">PROCESS</h1>
            </div>
            <div class=" g-5 d-flex justify-content-between w-100">
                <div class=" wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex justify-content-center flex-column">
                        <h4 class="mt-2 float-right" style="width: 100%; height: 25px">
                            Step <span style="font-size:2rem">1</span>
                        </h4>
                        <h4 class="mt-3 float-right" style="width: 100%; height: 25px"></h4>
                        <h4 class="mt-3" style="font-size: 18px">계획 단계</h4>
                        <h6 class="mt-2" style="font-size: 11px">
                            <ul style="margin-left: -5%;">
                                <li class="mb-2" style="font-size: 0.9rem;">클라이언트 요구사항 파악</li>
                                <li class="mb-2" style="font-size: 0.9rem;">프로젝트 범위 목표 설정</li>
                                <li class="mb-2" style="font-size: 0.9rem;">팀 구성 및 일정 계획</li>
                            </ul>
                        </h6>
                    </div>
                </div>
                <div class=" row-md-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex justify-content-center flex-column">
                        <h4 class="mt-2 float-right" style="width: 100%; height: 25px">
                            Step <span style="font-size:2rem">2</span>
                        </h4>
                        <h4 class="mt-3 float-right" style="width: 100%; height: 25px"></h4>
                        <h4 class="mt-3" style="font-size: 18px">정보 수집 및 분석 단계</h4>
                        <h6 class="mt-2" style="font-size: 11px">
                            <ul style="margin-left: -5%;">
                                <li class="mb-2" style="font-size: 0.9rem;">데이터, 문서 수집</li>
                                <li class="mb-2" style="font-size: 0.9rem;">현황분석 및 파악</li>
                                <li class="mb-2" style="font-size: 0.9rem;">분석결과 문제 도출</li>
                            </ul>
                        </h6>
                    </div>
                </div>
                <div class=" row-md-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex justify-content-center flex-column">
                        <h4 class="mt-2 float-right" style="width: 100%; height: 25px">
                            Step <span style="font-size:2rem">3</span>
                        </h4>
                        <h4 class="mt-3 float-right" style="width: 100%; height: 25px"></h4>
                        <h4 class="mt-3" style="font-size: 18px">솔루션 개발 단계</h4>
                        <h6 class="mt-2" style="font-size: 11px">
                            <ul style="margin-left: -5%;">
                                <li class="mb-2" style="font-size: 0.9rem;">다양한 대안 도출</li>
                                <li class="mb-2" style="font-size: 0.9rem;">적합한 솔루션 협의 선택</li>
                                <li class="mb-2" style="font-size: 0.9rem;">전략 및 계획 수립</li>
                            </ul>
                        </h6>
                    </div>
                </div>
                <div class=" row-md-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex justify-content-center flex-column">
                        <h4 class="mt-2 float-right" style="width: 100%; height: 25px">
                            Step <span style="font-size:2rem">4</span>
                        </h4>
                        <h4 class="mt-3 float-right" style="width: 100%; height: 25px"></h4>
                        <h4 class="mt-3" style="font-size: 18px">구현 단계</h4>
                        <h6 class="mt-2" style="font-size: 11px">
                            <ul style="margin-left: -5%;">
                                <li class="mb-2" style="font-size: 0.9rem;">실행 계획 진행</li>
                                <li class="mb-2" style="font-size: 0.9rem;">변화 관리 조성</li>
                                <li class="mb-2" style="font-size: 0.9rem;">프로젝트 모니터링</li>
                            </ul>
                        </h6>
                    </div>
                </div>
                <div class=" row-md-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex justify-content-center flex-column">
                        <h4 class="mt-2 float-right" style="width: 100%; height: 25px">
                            Step <span style="font-size:2rem">5</span>
                        </h4>
                        <h4 class="mt-3 float-right" style="width: 100%; height: 25px"></h4>
                        <h4 class="mt-3" style="font-size: 18px">평가 및 유지 보수단계</h4>
                        <h6 class="mt-2" style="font-size: 11px">
                            <ul style="margin-left: -5%;">
                                <li class="mb-2" style="font-size: 0.9rem;">목표 달성 성과 평가</li>
                                <li class="mb-2" style="font-size: 0.9rem;">유지 보수 및 지속성 확보</li>
                            </ul>
                        </h6>
                    </div>
                </div>
                <!-- <div class="col row-md-3 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex justify-content-center flex-column">
                        <h4 class="mt-2 float-right" style="width: 100%; height: 25px">
                            06.
                        </h4>
                        <h4 class="mt-3 float-right" style="width: 100%; height: 25px"></h4>
                        <h4 class="mt-3" style="font-size: 18px">완성</h4>
                        <h6 class="mt-2" style="font-size: 11px">
                            자세한 상담을 위해<br />전문 설문지를 작성해주세요.
                        </h6>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start 네모세모-->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">
                    <strong class="fw-bold text-primary text-uppercase">어떤 작업</strong>이 필요하세요?
                </h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item2 rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="background-color:rgba(96, 78, 152,0.1);">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Cyber Security</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item2 rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="background-color:rgba(96, 78, 152,0.1);">
                        <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div>
                        <h4 class="mb-3">Data Analytics</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item2 rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="background-color:rgba(96, 78, 152,0.1);">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow zoomIn" data-wow-delay="1.2s">
                    <div class="service-item2 rounded d-flex flex-column align-items-center justify-content-center text-center"
                        style="background-color:rgba(96, 78, 152,0.1);">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="m-0">Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Quote Start / 상담-->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">
                            상담이 필요하신가요? 저희에게 문의를 남겨주세요.
                        </h1>
                    </div>
                    <p class="mb-4">
                        옆에 이름 이메일 원하는 서비스 상담내용 천천히 침착하게 잘 입력해보세요 일단은 임시로 채우는 부분이니깐 대충 이렇게 채우긴 할건데 나중에 다른 내용으로 바뀌거나 이 섹션
                        자체가 바뀔수도 있겠죠. 갈아엎는게 생각보다 힘들긴한데 생각보다 덜 힘든것 같기도 하군요
                    </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s"></div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                        data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                        style="height: 55px" />
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px" />
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn w-100 py-3" type="submit" style="background:#b6abd6">
                                        Request A Quote
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('./common/newFooter.php');
    ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/lib/wow/wow.min.js"></script>
    <script src="./public/lib/easing/easing.min.js"></script>
    <script src="./public/lib/waypoints/waypoints.min.js"></script>
    <script src="./public/lib/counterup/counterup.min.js"></script>
    <script src="./public/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./public/js/slider15/scroller_roll.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="./public/js/main.js"></script>
    <script>
    //=============================무한롤링==================================
    // 롤링 배너 복제본 생성
    let roller = document.querySelector(".rolling-list");
    roller.id = "roller1"; // 아이디 부여

    let clone = roller.cloneNode(true);
    // cloneNode : 노드 복제. 기본값은 false. 자식 노드까지 복제를 원하면 true 사용
    clone.id = "roller2";
    document.querySelector(".wrap2").appendChild(clone); // wrap 하위 자식으로 부착

    document.querySelector("#roller1").style.left = "0px";
    document.querySelector("#roller2").style.left =
        document.querySelector(".rolling-list ul").offsetWidth + "px";
    // offsetWidth : 요소의 크기 확인(margin을 제외한 padding값, border값까지 계산한 값)

    roller.classList.add("original");
    clone.classList.add("clone");
    </script>

</body>

</html>