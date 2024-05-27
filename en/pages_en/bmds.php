<!-- bmds페이지 -->

<link rel="stylesheet" href="/public/css/bmds.css">
<link rel="stylesheet" href="/public/css/aboutus.css">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL</title>

    <?php

    //  include('../db.php');
    include('../common_en/Header.php')
    ?>

</head>

<body>
    <?php include('../common_en/Nav.php') ?>
    <div class="container">
        <div class="bmds-banner">
            <div class="top-text">
                This is a business model creation & business plan conversion service.
            </div>
        </div>
        <div class="bmds-area">
            <div class="bmdswrap">
                <video autoplay controls loop muted>
                    <source src="/public/img/bmds/bmds.mp4" type="video/mp4">
                </video>


                <div class="bmds-intro">
                    <img src="/public/img/bmds/bmds_english-01.png">
                </div>

                <div class="bm_location">
                    <button id="bm_service" onclick="window.open('http://www.bmds.co.kr') ">BMDS Getting
                        Started</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include("../common_en/Footer.php") ?>
</body>

</html>