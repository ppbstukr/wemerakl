<?php
include("../common_en/Header.php");


$id = $_GET['qna_id'];
$user_pwd = $_POST['user_pwd'];
// print_r($_POST);

// AND user_pwd = '".$user_pwd."' ;
$sql = "SELECT * FROM qna_board WHERE  qna_id='" . $id . "';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

// 복호화
$db_pw = $row['user_pwd'];

if ($user_pwd == $db_pw) {

    session_start();
    $_SESSION['user_name'] = $row['user_name'];
    header('Location: /pages_en/qna_detail.php?qna_id=' . $id);
    ob_end_flush();

    exit();
} else {
    echo "<script>alert('Please check ID/PW.');history.back();</script>";

    return;
}