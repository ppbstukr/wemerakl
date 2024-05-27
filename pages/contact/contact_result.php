<?php
include("../../common/Header.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $area = $_POST['area']; //사업분야
  $detail = $_POST['detail']; // 자세히
  $established = $_POST['established']; //설립연도
  $sales = $_POST['sales']; // 전년도수익
  $interests = $_POST['interests'];// 관심분야
  $company_name = $_POST['company_name'];//기업명
  $name = $_POST['name'];//이름
  $phone = $_POST['phone'];//전화번호
  $email = $_POST['email'];//이메일
  $privacy_policy = $_POST['privacy_policy'];//약관

  // 이메일로 데이터 전송
    $to = 'office@meraklus.com';
    $subject = '무료 컨설팅 상담 신청';
    $message = "신청자의 사업분야: $area\n자세한 설명: $detail\n설립년도: $established\n직전년도 매출: $sales\n관심분야: $interests\n기업명:$company_name\n연락처 정보:$name, $phone";
    $headers = "From:" . $email . "\r\n";    

    $query = "INSERT INTO contact(area,detail,established,sales,interests,name,email,company_name,phone) 
    VALUES ('" . $area . "','" . $detail . "','" . $established . "','" . $sales . "','" . $interests . "','" . $name . "','" . $email . "','" . $company_name . "','" . $phone ."');";
     $result = mysqli_query($conn, $query);
     if ($result == true) {
         mail($to, $subject, $message, $headers);
         echo "<script>if(!alert('무료 컨설팅 상담 신청이 완료되었습니다.')){location.href='/pages/contact/contact.php';}</script>";
     }  
     else {
         echo "<script>alert('내용을 정확하게 작성해 주세요.');history.back();</script>";
     }
 } else {
   echo 'alert("잘못된 접근입니다.")';
 }
?>