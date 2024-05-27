<!--todo : 오시는길 페이지 추가-->

<link rel="stylesheet" href="../../public/css/aboutus.css">
<link rel="stylesheet" href="../../public/css/contactus.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" name="description" content="메라클의 연락처 및 오시는 길 정보를 제공하는 페이지입니다.">
    <title>메라클 Contact</title>
    <?php include('../../common/Header.php') ?>
    <?php include('../communication/floatmenu.php') ?>
</head>

<body>
    <?php include('../../common/Nav.php') ?>

    <div class="aboutus-banner">
        <div class="top-text">
            <h1>오시는길</h1>
        </div>
    </div>
    <div class="top_menu" style="margin-bottom: 50px;">
        <ul>
            <li><a href="aboutus.php">회사소개</a></li>
            <li><a href="ci.php">CI</a></li>
            <li><a href="history.php">연혁</a></li>
            <li><a href="member.php">팀원소개</a></li>
            <li><a href="Certification.php">인증현황</a></li>
            <li><a href="contact-us.php">오시는길</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="subCont">
            <div class="contactus">
                <div class="contactus-text">
                    <h2>Contact Us</h2>
                </div>
                <div class="question">
                    <ul>
                        <li>
                            <img src="../../public/img/contactus/phone.png" alt="메라클 상담 연락처">
                            <h3>051-911-3330~2</h3>
                        </li>
                        <li>
                            <img src="../../public/img/contactus/fax.png" alt="메라클 팩스 연락처">
                            <h3>051-911-2220</h3>
                        </li>
                        <li>
                            <img src="../../public/img/contactus/email.png" alt="메라클 메일주소">
                            <h3>office@meraklus.com</h3>
                        </li>
                    </ul>
                </div>
                <div class=contactus-text>
                    <h2>찾아오시는 길</h2>
                </div>
                <div class="half-contact mb-5">
                    <div class='mapWarp'>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.2611820721745!2d129.12353462571537!3d35.175042293618056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356893f2e4b0262f%3A0x2137e15e3e3ac719!2sMelakeul!5e0!3m2!1sen!2skr!4v1670401149127!5m2!1sen!2skr"
                            width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="map-text">
                        <h2>본사</h2>
                    </div>
                    <div class="map-text">
                        (48058)부산광역시 해운대구 센텀중앙로97, 센텀스카이비즈 A동 2407호
                    </div>
                    <!-- <div class="map-text">
                        <h2>창업보육센터</h2>
                    </div>
                    <div class="map-text">
                        (48058)부산광역시 해운대구 센텀중앙로97, <br>센텀스카이비즈 A동 3608호
                    </div> -->
                </div>


            </div>
            <!-- <div class="bottom-img">
                <img src='../../public/img/tbsp_is/20220930_bottom.jpg'>
            </div> -->
        </div>
    </div>
    <?php include("../../common/Footer.php") ?>
</body>

</html>