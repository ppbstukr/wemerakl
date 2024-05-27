<?php

$buyerName = $_POST['buyerName'];
$buyerTel = $_POST['buyerTel'];
$buyerEmail = $_POST['buyerEmail'];



// 전송할 데이터
$data = json_encode([
    'authName' => $buyerName,
    'authPhone' => $buyerTel,
    'authEmail' => $buyerEmail,
]);

// 전송할 URL
$url = 'https://merakl.co.kr/api/coupon/bmds';

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
?>