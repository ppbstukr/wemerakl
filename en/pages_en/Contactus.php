<link rel="stylesheet" href="/public/css/contactus.css">
<link rel="stylesheet" href="/public/css/aboutus.css">
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
    <div class="contactus-banner">
        <div class="top-text">
            CONTACT US
            <h2>If you have any questions about startup support, technology commercialization, R&D planning,
                education request, etc., please contact us at any time.</h2>
        </div>
    </div>
    <div class="subCont">
        <div class="contactus">
            <div class="contactus-text">
                <h2>Contact Us</h2>
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
                <h2>directions</h2>
            </div>
            <div class="half-contact">
                <div class='mapWarp'>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.2611820721745!2d129.12353462571537!3d35.175042293618056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356893f2e4b0262f%3A0x2137e15e3e3ac719!2sMelakeul!5e0!3m2!1sen!2skr!4v1670401149127!5m2!1sen!2skr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="map-text">
                    <h2>Headquarters</h2>
                </div>
                <div class="map-text">
                    (48058) 2407, Centum Skybiz Building A, 97, <br>Centum Jungang-ro
                </div>
                <div class="map-text">
                    <h2>Business Incubation Center</h2>
                </div>
                <div class="map-text">
                    (48058) 3608, Centum Skybiz Building A, 97, <br>Centum Jungang-ro
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

<!--            todo : 02.14 18:19 문의란 삭제-->
            <!--<div class="contactus-area" id="contactus">
                <div class="contactus-title">
                    <h1>Contact Us</h1>
                </div>
                <form class="form-area" method="post" action="/pages_en/contact.php">
                    <div class="input-area name">
                        <input type="text" class="name-input" placeholder="Name" name="contactName">
                    </div>
                    <div class="input-area email">
                        <input type="email" class="email-iuput" placeholder="E-Mail" name="contactEmail">
                    </div>


                    <div class="input-area phone">
                        <input type="tel" class="phone-iuput" placeholder="Phone 000-0000-0000"
                               pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" name="contactPhone" maxlength="13">
                    </div>
                    <div class="input-area message">
                        <textarea name="contactContent" placeholder="Please enter your inquiry"></textarea>
                    </div>
                    <div class="form-submit">
                        <input class="submit-btn" type="submit" value="Registration">
                    </div>
                </form>
            </div>-->
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
            </div>
            <br>
            <?php
            // }

            ?>


        </div>
        <div class="bottom-img">
            <img src='/public/img/tbsp_is/20220930_bottom.jpg'>
        </div>
    </div>
</div>
<?php include('../common_en/Footer.php') ?>

</body>

</html>