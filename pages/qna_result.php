<?php
include("../common/Header.php");
include("../pages/password.php");
$division = $_POST['division'];
$title = $_POST['qna_title'];
$name = $_POST['user_name'];
$mail = $_POST['user_mail'];
$phone = $_POST['user_phone'];
$pwd = $_POST['user_pwd'];

$content = $_POST['qna_content'];

$query = "INSERT INTO qna_board(division,qna_title,user_name,user_mail,user_phone,user_pwd,qna_content) VALUES ('" . $division . "','" . $title . "','" . $name . "','" . $mail . "','" . $phone . "','" . $pwd . "','" . $content . "');";
$result = mysqli_query($conn, $query);
if ($result == true)
    echo "<script>alert('문의가 정상적으로 작성되었습니다.');location.href='/pages/qna.php';</script>";
else
    echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
//    echo "Error:".$query."mesage:".mysqli_error($conn);
// echo $content;
?>