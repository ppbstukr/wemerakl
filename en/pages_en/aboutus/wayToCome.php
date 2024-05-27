<!--todo : 오시는길 페이지 추가-->

<link rel="stylesheet" href="../../public/css/aboutus.css">
<link rel="stylesheet" href="../../public/css/contactus.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL</title>
    <?php include('../../common_en/Header.php') ?>
</head>

<body>
    <?php include('../../common_en/Nav.php') ?>

    <div class="aboutus-banner">
        <div class="top-text">
            Way To Come
        </div>
    </div>
    <div class="top_menu" style="margin-bottom: 50px;">
        <ul>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="ci.php">CI</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="member.php">Member</a></li>
            <li><a href="Certification.php">Certifications</a></li>
            <li><a href="wayToCome.php">Way To Come</a></li>
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
                            <img src="../../public/img/contactus/phone.png">
                            <h3>051-911-3330~2</h3>
                        </li>
                        <li>
                            <img src="../../public/img/contactus/fax.png">
                            <h3>051-911-2220</h3>
                        </li>
                        <li>
                            <img src="../../public/img/contactus/email.png">
                            <h3>office@meraklus.com</h3>
                        </li>
                    </ul>
                </div>
                <div class=contactus-text>
                    <h2>Directions</h2>
                </div>
                <div class="half-contact">
                    <div class='mapWarp'>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.2611820721745!2d129.12353462571537!3d35.175042293618056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356893f2e4b0262f%3A0x2137e15e3e3ac719!2sMelakeul!5e0!3m2!1sen!2skr!4v1670401149127!5m2!1sen!2skr"
                            width="600" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
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


            </div>
            <div class="bottom-img">
                <img src='../../public/img/tbsp_is/20220930_bottom.jpg'>
            </div>
        </div>
    </div>
    <?php include("../../common_en/Footer.php") ?>
</body>

</html>