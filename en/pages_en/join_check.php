<?php
include("../common_en/Header.php");



if ($_POST['adminPw'] !== $_POST['PwCheck']) {
    echo "<script>alert('패스워드가 일치하지 않습니다.');history.back();</script>";
    return;
} else if ($_POST['admincode'] !== "20130712") {
    echo "<script>alert('관리자 생성코드가 일치하지 않습니다.');history.back();</script>";
    return;
}

$ad_id = $_POST['adminId'];
$pw = $_POST['adminPw'];


$query = "INSERT INTO bmds_admin(adminId,adminPw) VALUES ('$ad_id','$pw');";

if (mysqli_query($conn, $query))
    echo "<script>alert('관리자 아이디가 정상적으로 생성되었습니다.');location.href='/pages/login.php';</script>";
else
    echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
// echo "Error:".$query."mesage:".mysqli_error($conn);
// echo $content;
?>
?>