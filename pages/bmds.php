<!-- bmds페이지 -->

<link rel="stylesheet" href="/public/css/bmds.css">
<link rel="stylesheet" href="/public/css/aboutus.css">

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>

    <?php

    //  include('../db.php');
    include('../common/Header.php')
    ?>

</head>

<body>
    <?php include('../common/Nav.php') ?>
    <div class="container">
        <div class="bmds-banner">
            <div class="top-text">
                비즈니스모델 작성&사업계획서 전환 서비스입니다.
            </div>
        </div>
        <div class="bmds-area">
            <div class="bmdswrap">
                <video autoplay controls loop muted>
                    <source src="/public/img/bmds/bmds.mp4" type="video/mp4">
                </video>

                <div class="bmds-intro">
                    <img src="/public/img/bmds/20210602.png">
                </div>
                <!-- <div class="bmds-intro">
                    <p>
                        아이템은 참 좋은데 사업계획서 작성은 왜 그렇게 어려울까요? BMDS는 고객님의 아이디어를 검토, 보완 및 구체화하여
                        사업의 흐름을 이해하기 쉽게 시각화해드리고 있습니다. 초기창업자는 물론 기존 사업자들을 위한 맞춤형 지원 서비스를
                        통해 당신만의 사업계획서를 완성해보세요.
                    </p>
                    <div>
                        <p>아래와 같은 어려움을 겪고있는 분들께 적극 추천합니다.</p>
                        <ul>
                            <li>1) 스타트업 기업으로 어떻게 출발할지 모르시는 분</li>
                            <li>2) 사업 성과를 내기가 어려우신 분</li>
                            <li>3) 비즈니스모델에 대한 검증이 필요하신 분</li>
                            <li>4) 정부 지원과 투자자를 대상으로 사업계획이 필요하신 분</li>
                            <li>5) 시장조사, 통계자료, 소비자 조사 등 펙트에 기반을 둔 체계적이고 명확한 분석자료가 필요하신 분</li>
                            <li>6) 경영 및 영업전문가의 조언과 교육이 필요하신 분</li>
                        </ul>
                    </div>
                    <div class="chapter-1">
                        <h1>Chapter 1</h1>
                        <h2>Business Model Learning</h2>
                    </div>
                    <div>
                        <p>사업 계획서를 탄탄하게 작성하려면비즈니스모델에 대한 이해는 필수!</p>
                        <p>BMDS는 명쾌한 설명과 예시로 11가지 비즈니스모델 각 항목들의 의미를 쉽고 정확하게 이해할 수 있도록 도와드립니다.</p>
                    </div>
                    <div class="img_title">
                        <p>「 MERAKL이 보완한 11가지 비즈니스모델 흐름도 」</p>
                        <img src="/public/img/bmds/service_1.png">
                    </div>
                    <div class="chapter-2">
                        <h1>Chapter 2</h1>
                        <h2>My Business Model Design</h2>
                    </div>
                    <div>
                        <p>나만의 스토리텔링을 구상하다!</p>
                        <p>웹 기반의 BM 설계 프로그램을 통해 비즈니스모델 캔버스를 작성한 뒤, 각 요소들 상호 간의 정합성을 확보하고 스토리텔링 기반의 사업을 구상합니다.</p>
                        <img src="/public/img/bmds/service_2.png">
                    </div>
                    <div>
                        <p>메라클에서 다년간의 컨설팅 노하우를 통해 개발한 비즈니스 모델 캔버스(9Block)와 린 캔버스를 융합하여 사업계획서와의 연계성을 높인 비즈니스 모델 디자인(11Block)을 활용</p>
                        <img src="/public/img/bmds/service_3.png">
                    </div>
                    <div>
                        <p>각 항목별 명쾌한 설명과 예시로 누구나 쉽게 자신의 사업 아이템에 적합한 비즈니스 모델 캔버스를 작성하고성공적인 스토리텔링을 구성합니다.</p>
                        <img src="/public/img/bmds/service_4.png">
                    </div>
                    <div>
                        <p>작성된 비즈니스 모델을 전문가가 직접 평가해드립니다.</p>
                        <p>비즈니스 모델 기획 전문가 및 실무자로부터 사업 타당성에 대한 평가를 지원받을 수 있습니다. 약점, 개선점 등을 보완하고 지속 가능한 사업이 될 수 있도록 BMDS가 확실하게 도와드리겠습니다.</p>
                    </div>
                    <div class="img_title">
                        <p>「 웹 기반 BM 설계 프로그램 서비스 」</p>
                        <img src="/public/img/bmds/service_5.png">
                    </div>
                    <div class="chapter-3">
                        <h1>Chapter 3</h1>
                        <h2>My Business Plan Completion</h2>
                    </div>
                    <div>
                        <p>쉽고 간편하게 완성하는 사업계획서!</p>
                        <p>완성된 비즈니스모델 결과를 사업계획서 포맷에 맞게 전환해드립니다. 사업의 투자 가치를 높일 수 있도록 BMDS와 함께 프로젝트를 완성해보세요.</p>
                        <img src="/public/img/bmds/service_6.png">
                    </div>
                    <div class="img_title">
                        <p>[사업계획서 변환 결과물]</p>
                    </div>
                    <div>
                        <p>다양한 정부지원사업계획서 양식에 맞게 초안 수준의 사업계획서를 도출해드립니다.</p>
                        <p>나의 첫 사업 파트너, BMDS</p>
                        <p>“ 한 줄 쓰기도 어려웠던 사업 계획서,</p>
                        <p>이젠 BMDS와 함께 명확하고 간편하게 사업 계획서를 작성하세요”</p>
                    </div> -->
                <div class="bm_location">
                    <button id="bm_service" onclick="window.open('http://www.bmds.co.kr') ">BMDS 시작하기</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include("../common/Footer.php") ?>
</body>

</html>