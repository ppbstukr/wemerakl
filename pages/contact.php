<?php
include("../common/Header.php");
$email = $_POST['contactEmail'];
$name = $_POST['contactName'];
$phone = $_POST['contactPhone'];
$content = $_POST['contactContent'];

$to = "office@meraklus.com";
$subject = $name . "님의 메라클 홈페이지 문의 알림 메일";
$headers = "From:" . $email . "\r\n";

$query = "INSERT INTO merakl_contact(contact_email,contact_name,contact_phone,contact_content) VALUES ('" . $email . "','" . $name . "','" . $phone . "','" . $content . "');";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('문의가 정상적으로 접수되었습니다.');location.href='/';</script>";
    mail($to, $subject, $content, $headers);
} else
    echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
    ?>