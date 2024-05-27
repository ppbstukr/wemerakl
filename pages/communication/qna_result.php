<?php
include("../../common/Header.php");
include("../../pages/password.php");
$division = $_POST['division']; // 문의유형
$title = $_POST['qna_title']; // 제목
$name = $_POST['user_name']; // 작성자
$mail = $_POST['user_mail']; // 이메일
$phone = $_POST['user_phone']; // 전화번호
$pwd = $_POST['user_pwd']; // 비밀글 비밀번호

$content = $_POST['qna_content']; // 내용

$to = "office@meraklus.com";
$subject = $name . "님의 메라클 홈페이지 문의 알림 메일";
$headers = "From:" . $mail . "\r\n";

$query = "INSERT INTO qna_board(division,qna_title,user_name,user_mail,user_phone,user_pwd,qna_content) VALUES ('" . $division . "','" . $title . "','" . $name . "','" . $mail . "','" . $phone . "','" . $pwd . "','" . $content . "');";
$result = mysqli_query($conn, $query);
if ($result == true) {
    mail($to, $subject, $content, $headers);
    echo "<script>alert('귀하의 문의가 성공적으로 완료되었습니다.');location.href='/pages/communication/qna.php';</script>";
}
else {
    echo "<script>alert('내용을 정확하게 작성해 주세요.');history.back();</script>";
}
//    echo "Error:".$query."mesage:".mysqli_error($conn);
// echo $content;
?>