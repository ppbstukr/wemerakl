    <?php
    ob_start();
    // error_reporting(E_ALL);
    error_reporting(0);
    // header('Content-Type: text/html; charset=UTF-8');
    session_start();
    //    include('../db.php');
    $conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');

    // echo $_SESSION['user_name'];
    ?>

    <!-- <meta charset="utf-8" /> -->
    <meta name="naver-site-verification" content="d4ac2c1b08c0f4f2e100e6740dceccc47c8d1b1d" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1, minimum-scale=1">
    <title>메라클</title>
    <!-- <meta name="google-site-verification" content="jk9XN9F-rNse8OhD6PSmwW-eax_ZmBJcOMo_n4fWo_c" /> -->
    <meta name="google-site-verification" content="wyPknz-zWrTXibmct3IHNkBMeA84dMw9G9RU5WsyYTQ" />
    <meta name="title" content="메라클 | MERAKL">
    <meta name="author" content="메라클">
    <meta name="keywords" content="메라클">
    <meta property="og:keywords" content="메라클, MERAKL, merakl, 이동규, 기술창업, 기술창업지원, 사업계획서, 액셀러레이팅, 창업교육, 실전창업교육, R&D, 연구개발서비스, 연구개발, 투자IR, 창업지원금, 창업지원, 스타트업, 비즈니스모델, 시장조사, 창업실무, 플랫폼, IR, BMDS, 창업성장, 기술개발사업, 디딤돌, 창조경제혁신센터, 공고문, 글로벌, 창업기업, 리빙랩, 리빙랩활용, 기술개발,">
    <meta property="og:type" content="website">
    <meta property="og:title" content="메라클 | MERAKL">
    <meta property="og:description" content="기술창업/R&D 전문기업 메라클">
    <meta name="description" content="기술사업화 / 연구개발서비스 / R&D기획 및 관리/ 글로벌액셀러레이팅 / 창업 및 기술경영 교육서비스/ 각종 지원사업연계 등. 기술창업/R&D 전문기업 메라클">
    <meta property="og:url" content="https://wemerakl.com">
    <meta name="format-detection" content="telephone=no">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- <meta content="Free HTML Templates" name="keywords" /> -->
    <!-- <meta content="Free HTML Templates" name="description" /> -->

    <!-- Favicon -->
    <!--<link href="/img/favicon.ico" rel="icon">-->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="../public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="../public/lib/animate/animate.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../public/css/style.css" rel="stylesheet" />