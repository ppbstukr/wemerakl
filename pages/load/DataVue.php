<?php


$buyerName = $_GET['buyer_name'];
$buyerTel = $_GET['buyer_tel'];
$buyerEmail = $_GET['buyer_email'];
$merchantUid = $_GET['merchant_uid'];
$amount = $_GET['amount'];
$name = $_GET['name'];
$query = $_GET['query'];
$agreeOrNot = $_GET['agreeOrNot'];

$arr2 = $_GET['arr2'];


var_dump($_GET);
// 전송할 데이터
$data = json_encode([
    'buyer_name' => $buyerName,
    'buyer_tel' => $buyerTel,
    'buyer_email' => $buyerEmail,
    'merchant_uid' => $merchantUid,
    'amount' => $amount,
    'name' => $name,
    // 'status' => $status,
    'query' => $query,
    'agreeOrNot' => $agreeOrNot,
    // 'arr2' => $arr2
]);

// 전송할 URL
$url = 'https://merakl.co.kr/api/coupon/merakl/pay';

// cURL 초기화
$ch = curl_init($url);

// cURL 옵션 설정
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data),
]);

// cURL 실행
$response = curl_exec($ch);

// cURL 에러 처리
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
}

// cURL 세션 종료
curl_close($ch);

// 응답 출력
echo $response;

// 다이렉트할 URL
$redirect_url = "https://wemerakl.com/pages/load/Consulting.php?merchant_uid=" . rawurlencode($merchantUid);

// 리다이렉션 수행
header("Location: $redirect_url");
exit; // 리다이렉션 이후에 코드가 계속 실행되지 않도록 exit 사용