<?php

$conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
mysqli_set_charset($conn, "utf8");


// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// POST 요청으로 받은 데이터
$merchant_uid = $_POST['merchant_uid'];
$amount = $_POST['amount'];
$name = $_POST['name'];
$buyer_name = $_POST['buyer_name'];
$buyer_tel = $_POST['buyer_tel'];
$buyer_email = $_POST['buyer_email'];

$authCode = $_POST['authCode']; // 인증코드
$bmdsCouponNum = $_POST['bmdsCouponNum']; //bmds쿠폰번호

$status = $_POST['status'];
$query = $_POST['query'];
$arr2 = isset($_POST['arr2']) ? json_decode($_POST['arr2'], true) : [];  // 받아온 데이터를 배열로 변환
$arr22 = json_encode($arr2, JSON_UNESCAPED_UNICODE);

$stmt = $conn->prepare("INSERT INTO payments (merchant_uid, amount, name, buyer_name, buyer_tel, buyer_email, status,query,agreeOrNot,arr2,pw,bmdsNum) VALUES (?, ?, ?, ?, ?,?, ?, ?, 'Y', ?, ?,?)");
$stmt->bind_param("sisssssssss",$merchant_uid, $amount, $name, $buyer_name, $buyer_tel, $buyer_email, $status, $query, $arr22,$authCode,$bmdsCouponNum);
if ($stmt->execute()) {

    // ...
    // 메일 보내기
    $to = "kevin@meraklus.com";
    $subject = "새로운 결제가 완료되었습니다!";
    $message = "새로운 결제가 완료되었습니다.\n\n결제 정보:\n";
    $message .= "주문번호: $merchant_uid\n";
    $message .= "금액: $amount\n";
    $message .= "이름: $buyer_name\n";
    $message .= "휴대폰 번호: $buyer_tel\n";
    $message .= "이메일: $buyer_email\n";
    $message .= "주소: $buyer_addr\n";
    $message .= "회사명: $buyer_com\n";
    $message .= "예약 날짜: $appointment_date\n";
    $message .= "예약 시간: $appointment_time\n";

    $headers = "From: merakl@meraklus.com"; // 여기에 발신자 주소를 적어주세요.

    //mail($to, $subject, $message, $headers);

    $to2 = $buyer_email;
    $subject2 = "인증번호가 왔습니다!";
    $message2 .= "등록하신 성함: $buyer_name\n"; // 패스워드 추가
    $message2 .= "이메일 주소: $buyer_email\n"; // 패스워드 추가
    $message2 .= "패스워드: $authCode\n"; // 패스워드 추가
    //mail($to2,  $subject2, $message2, $headers);


    exit;
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();




$conn->close();
?>