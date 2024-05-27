<link rel="stylesheet" href="/public/css/contactus.css">
<link rel="stylesheet" href="/public/css/aboutus.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <?php include('../common/Header.php') ?>
</head>

<body>
    <?php include('../common/Nav.php') ?>
    <div class="container">
        <div class="contactus-banner">
            <div class="top-text">
                문의안내
                <h2>창업지원, 기술사업화, R&D 기획, 교육의뢰 등 궁금하신 점은 언제든지 문의주세요</h2>
            </div>
        </div>
        <div class="subCont">
            <div class="contactus">
                <div class="contactus-text">
                    <h2>문의처</h2>
                </div>
                <div class="question">
                    <ul>
                        <li>
                            <img src="/public/img/contactus/phone.png">
                            <h3>051-911-3330~2</h3>
                        </li>
                        <li>
                            <img src="/public/img/contactus/fax.png">
                            <h3>051-911-2220</h3>
                        </li>
                        <li>
                            <img src="/public/img/contactus/email.png">
                            <h3>office@meraklus.com</h3>
                        </li>
                    </ul>
                </div>
                <div class=contactus-text>
                    <h2>찾아오시는 길</h2>
                </div>
                <div class="half-contact">
                    <div class='mapWarp'>
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104384.02034312887!2d129.00190403567066!3d35.15660489631681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568938749968249%3A0x88bce11ec49829bb!2z66mU65287YG0!5e0!3m2!1sko!2skr!4v1656395831061!5m2!1sko!2skr"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="map-text">
                        <h2>본사</h2>
                    </div>
                    <div class="map-text">
                        (48058) 부산광역시 해운대구 센텀중앙로 97, <br>센텀스카이비즈 A동 2407호
                    </div>
                    <div class="map-text">
                        <h2>창업보육센터</h2>
                    </div>
                    <div class="map-text">
                        (48058) 부산광역시 해운대구 센텀중앙로 97, <br>센텀스카이비즈 A동 3608호
                    </div>
                </div>
                <!-- <div class="half-contact">
                    <div class='mapWarp'>
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.245116331283!2d129.12242781524498!3d35.17544278031526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35689389d0687d49%3A0x1366d5ac3eaa03e8!2zKOyjvCnti7DruYTsl5DsiqTtjIztirjrhIjsiqQ!5e0!3m2!1sko!2skr!4v1592267802323!5m2!1sko!2skr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></iframe>
                    </div>
                    <div class="map-text">
                        <h2>창업보육센터</h2>
                    </div>
                    <div class="map-text">
                    (48058) 부산광역시 해운대구 센텀중앙로 97, <br>센텀스카이비즈 A동 3609호
                    </div>
                </div> -->

                <div class="contactus-area" id="contactus">
                    <div class="contactus-title">
                        <h1>Contact Us</h1>
                    </div>
                    <form class="form-area" method="post" action="/pages/contact.php">
                        <div class="input-area name">
                            <input type="text" class="name-input" placeholder="성함" name="contactName">
                        </div>
                        <div class="input-area email">
                            <input type="email" class="email-iuput" placeholder="이메일" name="contactEmail">
                        </div>


                        <div class="input-area phone">
                            <input type="tel" class="phone-iuput" placeholder="연락처 000-0000-0000"
                                pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" name="contactPhone" maxlength="13">
                        </div>
                        <div class="input-area message">
                            <textarea name="contactContent" placeholder="지원받고 싶은 사항을 자유롭게 작성하세요"></textarea>
                        </div>
                        <div class="form-submit">
                            <input class="submit-btn" type="submit" value="등록">
                        </div>
                    </form>
                </div>
                <?php
                // $sql = "SELECT * FROM tbContact";
                // $result = mysqli_query($conn, $sql);
                // $row = mysqli_fetch_array($result);

                // while( $row = mysqli_fetch_array($result)){

                ?>
                <div>
                    <?php
                    // echo $row['contactName'];
                    // echo $row['contactEmail'];
                    // echo $row['contactPhone'];
                    // echo $row['contactContent'];
                    ?>
                </div><br>
                <?php
                // }

                ?>


            </div>
            <div class="bottom-img">
                <img src='/public/img/tbsp_is/20220930_bottom.jpg'>
            </div>
        </div>
    </div>
    <?php include('../common/Footer.php') ?>

</body>

</html>