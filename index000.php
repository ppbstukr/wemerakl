<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include("./common/Header.php") ?>
    <?php include('./db.php') ?>
    <style>
        .mmm:hover {
            transition: all 0.5s ease;
            transform: translateY(-5px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }
    </style>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.6/jquery.fullpage.css"
        integrity="sha512-XTju7+OcUI0zv/kHcAViCT4g5s06E11uNyeUAszMXza7pr4a7TDx0ureInLtIV4TqYnSxG83ep/JHB82qHi7Cg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="./public/css/fullpage.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.6/jquery.fullpage.extensions.min.js"
        integrity="sha512-OXs5XsbOo0nZFa9pNQjRTb35e0hfZf0N03seKRYyZuBnbcg0aX3n8qHvaIcgUBOZqrkmU99LFlWypPJ57Xt8Mw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> 지우지말것! -->
    <script src="./public/js/footer.js"></script>
</head>
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
        background-size: 2px;
        /*8px 8px*/
        /* 점의 크기 및 간격 설정 */
        /* background-position: 0 2px; */
        /* 점의 위치 설정 */
        background-repeat: repeat-x;
        /* 가로 방향으로 반복 */
    }

    .content2 {
        font-family: 'Roboto', sans-serif !important;
        width: 100%;
        font-size: 1.5rem;
        color: #ffffff;
        line-height: 7rem;
        text-align: center;
        background: linear-gradient(to bottom, rgba(100, 77, 157, 0.9), rgba(150, 137, 177, 0.9));
    }
</style>

<body>
    <?php include("./common/Nav.php") ?>
    <div id="fullpage">
        <div class="section">
            <main class="intro ">
                <div class="content">
                    <h1>성공하는 기업보다는 가치있는 기업이 되고자 노력하는 메라클이 되겠습니다.</h1>
                </div>
                <a href="#"><span></span><span></span><span></span>Scroll</a>
            </main>
        </div>
        <div class="section" id="section">
            <div style="margin-top:-5rem;">
                <div class="row">
                    <div class="col">
                        <div class="row d-flex justify-content-center">
                            <span class="sa sa-up">
                                <div style="font-size:2.5rem; color: #644D9D; font-weight: 900; margin-top:4.5rem;">
                                    사업분야!</div>
                            </span>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <span class="sa sa-up">
                                <hr style="border-top:3.5px solid #644D9D; width:150px; margin-bottom: 3rem;" />
                            </span>
                        </div>
                        <div class="row d-flex justify-content-center" style="margin-bottom:4rem;">
                            <span class="sa sa-up one mmm">
                                <a href="/pages/team/RNDS.php" class="main_img2">
                                    <img src="./public/img/img_link/연구개발.png" />
                                </a>
                            </span>
                            <span class="sa sa-up three mmm">
                                <a href="/pages/team/GMAC.php" class="main_img2">
                                    <img src="./public/img/img_link/글로벌액셀.png" />
                                </a>
                            </span>
                            <span class="sa sa-up four mmm">
                                <a href="/pages/team/IRDS.php" class="main_img2">
                                    <img src="./public/img/img_link/IRDesign.png" />
                                </a>
                            </span>
                            <span class="sa sa-up four mmm">
                                <a href="/pages/team/BMPS.php" class="main_img2">
                                    <img src="./public/img/img_link/flatform.png" />
                                </a>
                            </span>
                            <span class="sa sa-up two mmm">
                                <a href="/pages/team/GMAC.php" class="main_img2">
                                    <img src="./public/img/img_link/교육서비스.png" />
                                </a>
                            </span>
                            <span class="sa sa-up four mmm">
                                <a href="/pages/team/GMAC.php" class="main_img2">
                                    <img src="./public/img/img_link/연계.png" />
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section da da-up" id="section" style="margin-top:7rem;">
            <div class="container mt-5">
                <div class="content2" style="padding: 23px 0px 13px 0; border-radius: 10px;">
                    <h3>무료 컨설팅 상담을 받아보세요!</h3>
                </div>
                <div class="row" style="margin-top:3rem;">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">기술시장조사</h5>
                                <hr>
                                <p class="card-text">성장 중인 기업에게 기술시장조사는 미래의 비즈니스 기회를 포착하고 지속적인 성장을 위한 발판을 마련하는 중요한
                                    역할을
                                    합니다.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">경쟁사분석</h5>
                                <hr>
                                <p class="card-text">경쟁사분석을 통해 업계 선두 주자들의 전략과 혁신을 파악하고, 기업의 지속적인 성장과 발전을 위한 새로운 전략을
                                    수립해보세요.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">R&D 투자</h5>
                                <hr>
                                <p class="card-text">기업의 지속적인 성장을 위해 R&D 투자를 확대하여 기술 혁신을 이끌고, 시장 선점 및 고객 만족도 향상에
                                    기여하세요.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">투자 확보</h5>
                                <hr>
                                <p class="card-text">앞으로의 성장을 위한 안정적인 투자 확보를 위해, 기업의 비전과 목표를 명확하게 전달하는 사업계획서를 작성하고
                                    투자자들의
                                    지지를
                                    얻으세요.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="margin-top: -5rem;">
                    <img src="./public/img/contactus/화살표3.jpg" />
                </div>


                <div class="d-flex justify-content-center mt-3" style="margin-bottom:10rem;">
                    <button type="button" class="btn btn-lg " style="background:#8672b8; color:white; font-weight:600;" onClick="location.href='/pages/contact/contact.php'">상담
                        신청하기</button>
                </div>
            </div>
        </div>
        <div class="section fp-auto-height">
            <?php include("./common/Footer.php") ?>
        </div>
    </div>
    <!--
        <div class="main-core">
            <div class="main-core-area">
                <div class="core-text">
                    <h1>MERAKL</h1>
                    <h2>We at MERAKL Co., Ltd. possess various capabilities that can be a turning point in a business.
                    </h2>
                </div>
                <img src="./public/img/main/corevalue_merakl_00_en.jpg">
            </div>
        </div>
        -->

    <!--
        <div class="main-business">
            <div class="main-business-area">
                <div class="main-business-intro">
                    <h1><span>MERAKL Business</span></h1>
                    <h2>Introducing the core business areas of MERAKL.</h2>
                </div>
                <div class="business-container">
                    <div class="business-left">
                        <img src="/public/img/main/business-intro/bs_02.png">
                    </div>
                    <div class="business-right">
                        <h1>R&D Service</h1>
                        <h2>By professionally diagnosing a company's technology level and commercialization capability,
                            systematic and customized technology management strategies and (global) commercialization
                            strategies are established to provide growth momentum by strengthening the company's
                            technology commercialization competitiveness.</h2>
                        <ul>
                            <li>· Research service</li>
                            <li>· Technology/Market/Social Research</li>
                            <li>· Technical management competency diagnosis</li>
                            <li>· New product/new technology planning</li>
                            <li>· Creation of technology roadmap (TRM)</li>
                            <li>· Intellectual property design</li>
                            <li>· Certification support (Venture/Innobiz)</li>
                        </ul>
                    </div>
                </div>
                <div class="business-container">
                    <div class="business-left">
                        <img src="/public/img/main/business-intro/bs_01.png">
                    </div>
                    <div class="business-right">
                        <h1>Technology Start-up Support</h1>
                         <h2>테크기반(제조/지식서비스) 아이디어 고도화를 통해 지속가능한 창업활동을 지원합니다.</h2>
                        <h2>(Preliminary) We support start-up activities by upgrading the
                            tech-based(manufacturing/knowledge service) ideas owned by founders and establishing
                            business models.</h2>
                        <ul>
                            <li>· Idea materialization</li>
                            <li>· Business model establishment</li>
                            <li>· Prototype (product) concept design</li>
                            <li>· Marketing strategy</li>
                            <li>· Business plan support (IR/PT)</li>
                            <li>· Connection with government support projects</li>
                        </ul>
                    </div>
                </div>
                <div class="business-container">
                    <div class="business-left">
                        <img src="/public/img/main/business-intro/bs_03.png">
                    </div>

                    <div class="business-right">
                        <h1>R&D Planning and Management</h1>
                        <h2>R&D experts from small and medium-sized research institutes support technology planning and
                            technology development activities to strengthen the technological competitiveness of new
                            technologies/new products and process innovation for startups and small and medium-sized
                            companies.</h2>
                        <ul>
                            <li>· Deriving new technology/new product items.</li>
                            <li>· R&D project discovery.</li>
                            <li>· Prior art research.</li>
                            <li>· Domestic and international market research.</li>
                            <li>· Competition analysis</li>
                            <li>· R&D planning and business plan (book)</li>
                        </ul>
                    </div>
                </div>
                <div class="business-container">
                    <div class="business-left">
                        <img src="/public/img/main/business-intro/bs_04.png">
                    </div>

                    <div class="business-right">
                        <h1>Global Accelerating</h1>
                        <h2>We discover promising startups and support business model advancement/reinforcement of
                            market competitiveness/incubation/investment/legal advice, and follow-up investment and
                            domestic and overseas business launches through our global networking.</h2>
                        <ul>
                            <li>· Global Business Model Advancement</li>
                            <li>· Incubating</li>
                            <li>· Investment (free tips/tips) Connection</li>
                            <li>· Global Networking Program</li>
                        </ul>
                    </div>
                </div>
                <div class="business-container">
                    <div class="business-left">
                        <img src="/public/img/main/business-intro/bs_05.png">
                    </div>

                    <div class="business-right">
                        <h1>Startup and Technology Management Education Service</h1>
                        <h2>With a systematic and specialized educational curriculum and practice-based internal experts
                            and external networks, we support educational services that can strengthen the startup
                            capabilities of (preliminary) founders and the core competencies of general corporate
                            executives and employees.</h2>
                        <ul>
                            <li>· Idea derivation and planning</li>
                            <li>· Business model (business plan)</li>
                            <li>· Technology marketing strategy</li>
                            <li>· Lean Startup</li>
                            <li>· Investment attraction plan</li>
                            <li>· Overall technology innovation/technology commercialization</li>
                        </ul>
                    </div>
                </div>
                <div class="business-container">
                    <div class="business-left">
                        <img src="/public/img/main/business-intro/bs_06.png">
                    </div>

                    <div class="business-right">
                        <h1>Affiliated with various support projects</h1>
                        <h2>We support affiliating with various government-supported projects that are optimized for the
                            level of competency of the company.</h2>
                        <ul>
                            <li>· Start-up support</li>
                            <li>· R&D/non-R&D support</li>
                            <li>· Prototype production support</li>
                            <li>· Marketing support (export, etc.)</li>
                            <li>· Support for pre-champ/star companies</li>
                            <li>· Global small and medium-sized enterprises (including general manager)</li>
                        </ul>
                    </div>
                </div>
                <div class="business-container">
                    <div class="business-left">
                        <img src="/public/img/main/business-intro/bs_07.png">
                    </div>

                    <div class="business-right">
                        <h1>Infographic Design</h1>
                        <h2>We support the advancement of government-supported project presentation materials containing
                            business planning and ideas and the production of specialized designs related to investment
                            and R&D.</h2>
                        <ul>
                            <li>· Investment IR/PT upgrade assistance</li>
                            <li>· Assistance with visual diagramming of business plan</li>
                            <li>· Company profile material upgrade assistance</li>
                        </ul>
                    </div>
                </div>
                 <div class="business-left-02">
                    <h1>연구개발서비스</h1>
                    <h2>기업의 기술수준과 사업화 역량을 전문적으로 진단하여 체계적이고 맞춤화된 기술경영전략 및 (글로벌)사업화전략 수립하여 기업의 기술사업화 경쟁력 강화를 통한 성장 모멘텀을 제공합니다.</h2>
                    <ul>
                        <li>· 기술경영 역량 진단</li>
                        <li>· 신제품/신기술 기획</li>
                        <li>· 기술로드맵(TRM) 작성</li>
                        <li>· 지식재산권 설계</li>
                        <li>· 기술/시장 리서치</li>
                        <li>· 인증지원(벤처/이노비즈)</li>
                    </ul>
                </div>

                <div class="business-right-02">
                    
                </div>
                <div class="business-left-03">
                    
                </div>

                <div class="business-right-03">
                    <h1>R&D 기획 및 관리</h1>
                    <h2>중소/대기업 연구소 및 출연연 출신으로 구성된 연구개발 전문인력이 스타트업 중소,중견기업의 신기술/신제품 개발 및 공정혁신의 기술경쟁력 강화를 위한 기술기획 및 기술개발 활동을 지원합니다.</h2>
                    <ul>
                        <li>· 신기술/신제품 아이템 도출</li>
                        <li>· R&D과제 발굴</li>
                        <li>· 선행기술조사</li>
                        <li>· 국내외 시장조사</li>
                        <li>· 경쟁사 분석</li>
                        <li>· R&D기획 및 사업계획(서)</li>
                    </ul>
                </div>
                
                <div class="business-left-04">
                    <h1>글로벌 엑셀러레이팅</h1>
                    <h2>유망 스타트업을 발굴하여 비즈니스모델 고도화/시장경쟁력 강화/인큐베이팅/투자/법률 자문을 지원하고 자체 보유하고 있는 글로벌 네트워킹을 통하여 후속투자 및 국내외 사업론칭을 지원합니다.</h2>
                    <ul>
                        <li>· 글로벌 비즈니스모델 고도화</li>
                        <li>· 인큐베이팅</li>
                        <li>· 투자(프리팁스/팁스)연계</li>
                        <li>· 글로벌 네트워킹 프로그램</li>
                    </ul>
                </div>

                <div class="business-right-04">
                    
                </div>
                <div class="business-left-05">
                    
                </div>

                <div class="business-right-05">
                    <h1>창업 및 기술경영 교육 서비스</h1>
                    <h2>체계적이고 전문화된 교육 커리큘럼과 실무기반의 내부전문가 및 외부 네트워크를 보유하여 (예비)창업자의 창업역량 및 일반기업 임직원들의 핵심역량을 강화할 수 있는 교육서비스를 지원합니다.</h2>
                    <ul>
                        <li>· 아이디어 도출 및 기획</li>
                        <li>· 비즈니스모델(사업계획)</li>
                        <li>· 기술마케팅 전략</li>
                        <li>· 린스타트업</li>
                        <li>· 투자유치 방안</li>
                        <li>· 기술혁신/기술사업화 전반</li>
                    </ul>
                </div>
                
                <div class="business-left-06">
                    <h1>각종 지원사업 연계</h1>
                    <h2>기업의 역량수준에 맞추어 최적화된 각종 정부지원사업과 연계할 수 있도록 지원합니다.</h2>
                    <ul>
                        <li>· 창업지원</li>
                        <li>· R&D/비R&D 지원</li>
                        <li>· 시제품 제작 지원</li>
                        <li>· 마케팅 지원(수출 등)</li>
                        <li>· 프리챔프/스타기업 지원</li>
                        <li>· 글로벌강소기업(소부장 포함)</li>
                    </ul>
                </div>

                <div class="business-right-06">
                    
                </div>

            </div> 
        </div>
        -->


    <!--
        <div class="banner-area">
            <div>
                <h1>We actively support you with the experience and know-how of our professional partners.</h1>
            </div>
        </div>

        <div class="main-portfolio-area">
            <div class="portfolio">
                <h1>MERAKL Portfolio</h1>
                <h2>We have been operating strategic programs in various fields such as individual investment
                    association operation/startup education/consulting/support project/acceleration/networking events.
                </h2>
            </div>
            <div class="main-portfolio">
                <div class="portfolio-title">
                    <h1>Investment Association Management</h1>
                    <h2>Contributing to national economic development by investion in promising venture companies and
                        founders under Article 2, Item 2 of the Small and Medium Business Startup Support Act and
                        fostering them as competitive companies</h2>
                </div>
                <div class="portfolio-content">
                    <p><img src="/public/img/main/투자조합1.jpg"></p>
                    <p><img src="/public/img/main/투자조합2.jpg"></p>
                    <p><img src="/public/img/main/투자조합3.jpg"></p>
                </div>
            </div>
            <div class="main-portfolio">
                <div class="portfolio-title">
                    <h1>Investment Portfolio</h1>
                </div>
                <div class="portfolio-content">
                    <p><img src="/public/img/main/portfolio/portfolio_01.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_02.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_03.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_04.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_05.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_06.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_07.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_08.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_09.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_10.png"></p>
                    <p><img src="/public/img/main/portfolio/portfolio_11.png"></p>
                </div>
            </div>
            <div class="main-portfolio">
                <div class="portfolio-title">
                    <h1>Start-up Education Operation</h1>
                    <h2>We support systematic and specialized educational curricula and educational services that can
                        strengthen the start-up and core competencies of (preliminary) entrepreneurs based on practice.
                    </h2>
                </div>
                <div class="portfolio-content">
                    <p><img src="/public/img/main/portfolio/교육1.jpg"></p>
                    <p><img src="/public/img/main/portfolio/교육2.jpg"></p>
                    <p><img src="/public/img/main/portfolio/교육3.jpg"></p>
                    <p><img src="/public/img/main/portfolio/교육4.jpg"></p>
                    <p><img src="/public/img/main/portfolio/교육5.jpg"></p>
                    <p><img src="/public/img/main/portfolio/교육6.jpg"></p>
                    <p><img src="/public/img/main/portfolio/교육7.jpg"></p>
                    <p><img src="/public/img/main/portfolio/교육8.jpg"></p>
                </div>
            </div>
            <div class="main-portfolio">
                <div class="portfolio-title">
                    <h1>Accelerator & IR support</h1>
                    <h2>We support systematic and specialized educational curricula and educational services that can
                        strengthen the start-up and core competencies of (preliminary) entrepreneurs based on practice.
                    </h2>
                </div>
                <div class="portfolio-content">
                    <p><img src="/public/img/main/portfolio/엑셀1.jpg"></p>
                    <p><img src="/public/img/main/portfolio/엑셀2.jpg"></p>
                    <p><img src="/public/img/main/portfolio/엑셀3.jpg"></p>
                    <p><img src="/public/img/main/portfolio/엑셀4.jpg"></p>
                    <p><img src="/public/img/main/portfolio/엑셀5.jpg"></p>
                    <p><img src="/public/img/main/portfolio/엑셀6.jpg"></p>
                </div>
            </div>
            <div class="main-portfolio">
                <div class="portfolio-title">
                    <h1>R&D Planning and Management</h1>
                    <h2>We support technology planning and technology development activities for start-ups, small and
                        medium-sized enterprises (SMEs) to develop new technologies/new products and enhance
                        technological competitiveness in process innovation.</h2>
                </div>
                <div class="portfolio-content">
                    <p><img src="/public/img/main/portfolio/알앤디1.jpg"></p>
                    <p><img src="/public/img/main/portfolio/알앤디2.jpg"></p>
                    <p><img src="/public/img/main/portfolio/알앤디3.jpg"></p>
                    <p><img src="/public/img/main/portfolio/알앤디4.jpg"></p>
                    <p><img src="/public/img/main/portfolio/알앤디5.jpg"></p>
                    <p><img src="/public/img/main/portfolio/알앤디6.jpg"></p>
                    <p><img src="/public/img/main/portfolio/알앤디7.jpg"></p>
                    <p><img src="/public/img/main/portfolio/알앤디8.jpg"></p>
                </div>
            </div>
        </div>

        <div class="main-partner-area">
            <div class="main-partner-title">
                <h1>MERAKL Partners</h1>
                <h2>We have strategic partners in various fields in order to<br> respond to convergence and complexation
                    between industries.</h2>
            </div>
            <div class="main-partner">
                <ul>
                    <li id="Busan Economic Promotion Agency"><img src="/public/img/main/partnerlogo/partnerlogo_01.png"></li>
                    <li id="Ulsan Economic Promotion Agency"><img src="/public/img/main/partnerlogo/partnerlogo_02.png"></li>
                    <li id="Busan Center for Creative Economy & Inovation"><img src="/public/img/main/partnerlogo/partnerlogo_03.png"></li>
                    <li id="Daegu Center for Creative Economy & Inovation"><img src="/public/img/main/partnerlogo/partnerlogo_04.png"></li>
                    <li id="Ulsan Center for Creative Economy & Inovation"><img src="/public/img/main/partnerlogo/partnerlogo_05.png"></li>
                    <li id="Gyeongbuk Center for Creative Economy & Inovation"><img src="/public/img/main/partnerlogo/partnerlogo_06.png"></li>
                    <li id="Gyeongnam Center for Creative Economy & Inovation"><img src="/public/img/main/partnerlogo/partnerlogo_07.png"></li>
                    <li id="Gyongnam Technopark"><img src="/public/img/main/partnerlogo/partnerlogo_08.png"></li>
                    <li id="Busan Technopark"><img src="/public/img/main/partnerlogo/partnerlogo_09.png"></li>
                    <li id="Kibo"><img src="/public/img/main/partnerlogo/partnerlogo_10.png"></li>
                    <li id="INNOBIZ"><img src="/public/img/main/partnerlogo/partnerlogo_11.png"></li>
                    <li id="Korea Marine Equipment Research Instiltute"><img src="/public/img/main/partnerlogo/partnerlogo_12.png"></li>
                    <li id="Korea Industrial Technology Association"><img src="/public/img/main/partnerlogo/partnerlogo_13.png"></li>
                    <li id="Korcham"><img src="/public/img/main/partnerlogo/partnerlogo_14.png"></li>
                    <li id="Busan United Holdings"><img src="/public/img/main/partnerlogo/partnerlogo_15.png"></li>
                    <li id="Korea Accelerator Association"><img src="/public/img/main/partnerlogo/partnerlogo_16.png"></li>
                    <li id="USynergerics"><img src="/public/img/main/partnerlogo/partnerlogo_17.png"></li>
                    <li id="PNU"><img src="/public/img/main/partnerlogo/partnerlogo_19.png"></li>
                    <li id="J-DREAM"><img src="/public/img/main/partnerlogo/partnerlogo_20.png"></li>
                    <li id="NICE D&B"><img src="/public/img/main/partnerlogo/partnerlogo_21.png"></li>
                    <li id="DOUZONE"><img src="/public/img/main/partnerlogo/partnerlogo_22.png"></li>
                </ul>
            </div>
            <div class="partner-content-area">
                <div class="partner-content">
                    <h1>Corporate Support Affiliation</h1>
                    <ul>
                        <li>· Startup support</li>
                        <li>· Investment IR support</li>
                        <li>· Support for the establishment<br> of growth strategies</li>
                        <li>· R&D planning support</li>
                        <li>· Corporate support activities</li>
                    </ul>
                </div>
                <div class="partner-content">
                    <h1>We retain a network of companies in need in addition to companies with outstanding capability
                        and
                        potential</h1>
                    <ul>
                        <li>· Technology finance facilitation</li>
                        <li>· Outstanding companies secured</li>
                    </ul>
                </div>
                <div class="partner-content">
                    <h1>Acceleration support ties</h1>
                    <ul>
                        <li>· Investment advisory, connection with investment institutions</li>
                        <li>· Start-up company incubation</li>
                        <li>· Accelerator registration</li>
                        <li>· Accelerating support for entry into the US</li>
                    </ul>
                </div>
                <div class="partner-content">
                    <h1>Equipment/facility infrastructure ties</h1>
                    <ul>
                        <li>· Equipment/facility infrastructure linkage support</li>
                        <li>· Shared office</li>
                        <li>· Management and financial consulting support</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tbsp-area">
            <div class="tbsp-title">
                <h3><span>MERAKI & MERAK & MIRACLE</span></h3>
                <h3>MERAKL is operated as a four-lab system under mutual respect <br> and respect, with a professional
                    temperament full of true</h3>
            </div>
            <div class="tbsp-profile">
                <a href="./pages/file_download.php?file=tbsp회사소개서.pdf">Company profile</a>
            </div>
        </div>

        <div class="contactus-area" id="contactus">
            <div class="contactus-title">
                <h1>Contact Us</h1>
                <h2>If you have any questions about startup support, technology commercialization,<br> R&D planning,
                    education request, etc., please contact us at any time.</h2>



            </div>
            <form class="form-area" method="post" action="/pages_en/contact.php">
                <div class="input-area name">
                    <input type="text" class="name-input" placeholder="Name" required name="contactName">
                </div>
                <div class="input-area email">
                    <input type="email" class="email-iuput" placeholder="E-Mail" required name="contactEmail">
                </div>
                <div class="input-area phone">
                    <input type="phone" class="phone-iuput" placeholder="Phone 000-0000-0000"
                        pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" name="contactPhone" maxlength="13">
                </div>
                <div class="input-area message">
                    <textarea name="contactContent" required placeholder="Please enter your inquiry"></textarea>
                </div>
                <div class="form-submit">
                    <input class="submit-btn" type="submit" value="Submit">
                </div>
            </form>
        </div>
        -->


    <!-- <div id="modal_area">
            <div class="card_modalWrap"> 
                <div class="care_modal">
                    모달창입니다.
                </div>
                <a class="modal_close_btn">닫기</a>
            </div>   
        </div> -->

    <?php //include("./common/Footer.php") 
    ?>
    <!-- <script src="/public/js/modal.js"></scrip> -->

    <!--        <img src='/public/img/popup/award popup-01_600.png'>-->
    <!--    todo: 영문이미지 받기전까지 주석-->
    <!-- <div class='mainPop-3' id='pop_02'>
         <a href="https://www.bizinfo.go.kr/web/lay1/bbs/S1T122C128/AS/74/view.do?pblancId=PBLN_000000000085953">
        <img src='/public/img/popup/디딤돌공고2.png'>
        </a>
        <div class='bar'>
            <a href='#' onclick="fnPopCloseDay('pop_02')">오늘하루 열지 않음</a>
            <label><input type='checkbox' onclick='fnPopClose("pop_02")'> 닫기</label>
        </div>
    </div>
    <div class='mainPop-2' id='pop_03'>
         <a href="https://www.bizinfo.go.kr/web/lay1/bbs/S1T122C128/AS/74/view.do?pblancId=PBLN_000000000085903">
        <img src='/public/img/popup/리빙랩공고.png'>
        </a>
        <div class='bar'>
            <a href='#' onclick="fnPopCloseDay('pop_03')">오늘하루 열지 않음</a>
            <label><input type='checkbox' onclick='fnPopClose("pop_03")'> 닫기</label>
        </div>
    </div>
    <div class='mainPop-1' id='pop_04'>
         <a href="https://www.bizinfo.go.kr/web/lay1/bbs/S1T122C128/AS/74/view.do?pblancId=PBLN_000000000085895">
        <img src='/public/img/popup/액셀공고.png'>
        </a>
        <div class='bar'>
            <a href='#' onclick="fnPopCloseDay('pop_04')">오늘하루 열지 않음</a>
            <label><input type='checkbox' onclick='fnPopClose("pop_04")'> 닫기</label>
        </div>
    </div>-->
    <!--    todo: 여기까지-->

    <!-- <div class='mainPop' id='pop_02'>
        <a href="https://me2.do/GZ0ukqDr">
        <img src='/public/img/popup/2022k_startup.png'>
        </a>
        <div class='bar'>
            <a href='#' onclick="fnPopCloseDay('pop_02')">오늘하루 열지 않음</a>
            <label><input type='checkbox' onclick='fnPopClose("pop_02")'> 닫기</label>
        </div>
    </div> -->

    <!--
    <div class='mainPop-3' id='pop20180715'>
        <a href="http://busanstartup.kr/web/bsnBusiness/view.do?mId=39&busiCode=2022000032" target="_blank">
        <img src='/public/img/popup/pop_0318.jpg'>
        </a>
        <div class='bar'>
            <a href='javascript:fnPopCloseDay("pop20180715");'>오늘하루 열지 않음</a>
            <label><input type='checkbox' onclick='fnPopClose("pop20180715")'> 닫기</label>
        </div>
    </div>
-->


    <!-- <div class='mainPop-4' id='pop20180716'>
        <a href="https://www.mssmiv.com/portal/Main" target="_blank">
        <img src='/public/img/popup/2022mssmiv_pop_merakl.jpg' style="width:700px; height:700px;">
        </a>
        <div class='bar'>
            <a href='javascript:fnPopCloseDay("pop20180716");'>오늘하루 열지 않음</a>
            <label><input type='checkbox' onclick='fnPopClose("pop20180716")'> 닫기</label>
        </div>
    </div> -->

</body>

</html>