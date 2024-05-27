<!-- 포트폴리오 페이지 -->

<link rel="stylesheet" href="/public/css/bp.css">
<link rel="stylesheet" href="/public/css/aboutus.css">

<?php
// error_reporting(0);
// $category = $_REQUEST['category'];
// $list = array(
//     array("category" => "1","title" => "2019-2020 실전창업교육 운영", "text" => "창업진흥원 주관 사업으로 700명 내외의 예비창업자를 대상으로 ‘아이디어 개발 → 비즈니스모델 수립 → 린스타트업’ 등 교육 및 멘토링을 통해 비즈니스모델 구체화 및 사업계획 수립을 지원하였으며, 넥스트 사업에서의 성과 향상을 위해 사후관리 시스템을 운영하고 있습니다.", "img" => '/public/img/portfolio/startup_1.jpg'),
//     array("category" => "1","title" => "울산지역대학 창업우수 아이디어 공모전 BM 아카데미", "text" => "울산창조경제혁신센터 주관사업으로 창업에 관심있는 울산지역 대학생들을 대상으로 COVID-19로 인한 전면 비대면으로 비즈니스모델 수립 및 린스타트업 교육을 진행하였습니다.", "img" => '/public/img/portfolio/ubm_2.png'),
//     array("category" => "1","title" => "울산창조경제혁신센터 U별난 BM 아카데미 ", "text" => "울산창조경제혁신센터 주관사업으로 창업에 관심있는 학생,예비창업자 등 창업에 관심있는 일반인을 대상으로 비즈니스모델 고도화 및 네트워크 연계 지원 등 창업역량 강화 교육을 진행하였습니다. ", "img" => '/public/img/portfolio/ubm.jpg'),
//     array("category" => "1","title" => "안전성평가연구소 창업기본 교육", "text" => "안전성평가연구소 연구원을 대상으로 연구자가 창업하기 이전에 갖추어야 하는 기본 소양 및 준비사항에 대한 이론적 기초역량 교육을 진행하였습니다. ", "img" => '/public/img/portfolio/edu_01.jpg'),
//     array("category" => "1","title" => "기장군청 창업교육 및 멘토링 프로그램", "text" => "기장군청 주관으로 기장군 시민을 대상으로 기초 창업교육 및 비즈니스모델 수립 실습과 창업 관련기관 현장 방문을 통해 창업지원 정보 습득과 네트워크 형성 기회를 제공해드렸습니다.", "img" => '/public/img/portfolio/edu_02.jpg'),
//     array("category" => "1","title" => "2019 Re Act-Up(재창업지원사업) 창업교육", "text" => "재창업 기업인에게 자가진단 및 맞춤형 특화 교육 프로그램과 멘토링을 통하여 IR 제작 지원 및 피칭데이 기회를 제공함으로써 재창업 성공 가능성을 키워나갈 수 있도록 지원하였습니다.", "img" => '/public/img/portfolio/edu_03.jpeg'),
//     array("category" => "2","title" => "경북 스타트업 액셀러레이터 플랫폼 지원", "text" => "경북지역 스타트업들의 해외진출 역량 및 경쟁력 강화를 위해 기업 맞춤형 프로그램 구성과 미국 현지 비즈니스 네트워크와의 긴밀한 협업을 통해 미국 현지 진출 전략 수립 등 기업의 글로벌 진출 역량 강화를 위한 프로그램을 수행하였습니다.", "img" => '/public/img/portfolio/platform.jpeg'),
//     array("category" => "2","title" => "울산창조경제혁신센터 인사이트 이노베이션 프로그램", "text" => "울산지역 스타트업을 대상으로 투자역량 강화 교육 및 심화 컨설팅 지원하였으며, IR 자료 제작 및 액셀러레이터 연계를 통해 기업 투자역량 강화를 지원하였습니다.", "img" => '/public/img/portfolio/insight.jpg'),
//     array("category" => "2","title" => "재창업 IR 투자유치 역량강화 데모데이", "text" => "부산 데모데이부터 서울 IR발표까지 실전 투자유치 활동과 투자자 네트워킹을 통해 향후 투자유치 가능성 제고 및 투자자의 추가 투자유치 검토를 위한 후속 지원하였습니다.", "img" => '/public/img/portfolio/re-start.jpg'),
//     array("category" => "2","title" => "4차산업혁명분야 가족회사 해외진출 프로그램", "text" => "4차산업 혁신의 봄이 불고 있는 미국 일리노이주 시카고 현지기업과 국내 스타트업을 연결하여 사업적 성과 창출 및 투자유치의 기회를 발굴할 수 있도록 다각도로 지원하였습니다.", "img" => '/public/img/portfolio/chicago.jpeg'),
//     array("category" => "4","title" => "(주)에스디케어 청년창업사관학교 IR제작 지원", "text" => "2021 청년창업사관학교 발표자료 IR 제작을 지원하였습니다.", "img" => '/public/img/portfolio/IR_01.png'),
//     array("category" => "4","title" => "(주)비즈닉스 BM개발과제 IR제작 지원", "text" => "소상공인·자영업자를 위한 생활혁신형 기술개발사업 BM개발과제 IR 제작을 지원하였습니다.", "img" => '/public/img/portfolio/IR_02.png'),
//     array("category" => "4","title" => "마코랜드 IR 제작 지원", "text" => "마코랜드 IR 제작을 지원하였습니다.", "img" => '/public/img/portfolio/IR_03.png'),
//     array("category" => "4","title" => "(주)에프티아이코리아 IR 제작 지원", "text" => "경북액셀플랫폼 사업 지원으로 (주)에프티아이코리아 IR 제작을 지원하였습니다.", "img" => '/public/img/portfolio/IR_04.png'),
//     array("category" => "4","title" => "케미폴리오 IR 제작 지원", "text" => "울산 Insight 사업 지원으로 케미폴리오 IR 제작을 지원하였습니다.", "img" => '/public/img/portfolio/IR_05.png'),
//     array("category" => "4","title" => "트라이얼코리아 IR 제작 지원", "text" => "트라이얼코리아 IR 제작을 지원하였습니다.", "img" => '/public/img/portfolio/IR_06.png'),
// );
// // var_dump($list[0]['title']);
// // echo 1;

// function filtered($val){
//     return $val["category"] == $_REQUEST['category'];
// }
// if(is_null($category)) {
//     $fList = $list;
// }else{
//     $fList=array_filter($list,"filtered");

// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL HomePage</title>
    <?php include('../common_en/Header.php') ?>
</head>

<body>
    <?php include('../common_en/Nav.php') ?>
    <div class="container">
        <div class="portfolio-banner">
            <div class="top-text">
                PORTFOLIO
            </div>
        </div>
        <div class="portfolio-menu">
            <?php
            error_reporting(0);
            $category = $_REQUEST['division'];

            $sql = "SELECT * FROM bp_board";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $division = $row['division'];
                $list[] = $row;
            }
            function filtered($val)
            {
                return $val['division'] == $_REQUEST['division'];
            }

            if (is_null($category)) {
                $fdivision = $division;
                $flist = $list;
            } else {
                $fdivision = array_filter($division, "filtered");
                $flist = array_filter($list, "filtered");
            }
            ?>
            <ul>
                <li>
                    <h3><a href="/pages_en/Bp.php?division=1"
                            class="<?php $category == 1 ? print('active') : '' ?>">Start-up Education</a></h3>
                </li>
                <li>
                    <h3><a href="/pages_en/Bp.php?division=2"
                            class="<?php $category == 2 ? print('active') : '' ?>">Accelerator</a></h3>
                </li>
                <li>
                    <h3><a href="/pages_en/Bp.php?division=3"
                            class="<?php $category == 3 ? print('active') : '' ?>">R&D</a></h3>
                </li>
                <li>
                    <h3><a href="/pages_en/Bp.php?division=4" class="<?php $category == 4 ? print('active') : '' ?>">IR
                            Works</a></h3>
                </li>
                <li>
                    <h3><a href="/pages_en/Bp.php?division=5"
                            class="<?php $category == 5 ? print('active') : '' ?>">Contents</a></h3>
                </li>
            </ul>
        </div>
        <div class="business-portfolio">
            <?php
            foreach ($flist as $key => $value) {
            ?>
            <div class="business-feed" onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $value['id'] ?>'">
                <ul>
                    <li class="business-img" id="<?php echo $value['bp_title'] ?>"><img
                            src="/public/uploads/<?php echo $value['bp_img']; ?>" alt="<?php echo $value; ?>"></li>
                    <li class="business-name">
                        <h3><?php echo $value['bp_title'] ?></h3>
                    </li>
                    <li class="business-text">
                        <h3><?php echo $value['bp_summary'] ?></h3>
                    </li>
                </ul>
            </div>
            <?php } ?>
            <div class="portfolio-write">
                <?php
                if (IS_NULL($_SESSION['adminId'])) {
                ?>
                <?php
                } else {
                ?>
                <button class="new-portfolio" onclick="location.href='/pages_en/bp_write.php'">
                    <b>포트폴리오 등록</b>
                </button>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="bottom-img">
            <img src='/public/img/tbsp_is/20220930_bottom.jpg'>
        </div>
    </div>
    <?php include('../common_en/Footer.php') ?>

</body>

</html>