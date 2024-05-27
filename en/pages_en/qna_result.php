<?php
include("../../common_en/Header.php");
include("../../pages_en/password.php");
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
    echo "<script>alert('Your inquiry has been successfully completed.');location.href='./qna.php';</script>";
else
    echo "<script>alert('Please write the content correctly.');history.back();</script>";
//    echo "Error:".$query."mesage:".mysqli_error($conn);
// echo $content;