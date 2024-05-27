<?php
include("../../common_en/Header.php");


if (empty($_POST['adminId']) ||  empty($_POST['adminPw'])) {
    echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
    return;
}

$ad_id = $_POST['adminId'];
$ad_pw = $_POST['adminPw'];
// print_r($_POST);

$sql = "SELECT * FROM bmds_admin WHERE adminId = '" . $ad_id . "';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);



if ($ad_pw == $row['adminPw']) {

    session_start();
    $_SESSION['adminId'] = $row['adminId'];
    header('Location: /en/pages_en/admin/admin.php');
    // 원래는 admin페이지로 이동
    ob_end_flush();
    exit();
} else {
    echo "<script>alert('아이디/패스워드를 확인해주세요.');history.back();</script>";
    return;
}