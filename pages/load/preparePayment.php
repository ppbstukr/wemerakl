<?php
function preparePayment($merchant_uid, $amount)
{
    $api_url = 'https://api.iamport.kr/payments/prepare';
    $api_key = '6560862758150612';
    $api_secret = 'F1IZJ9Qq28WHU0VhKJUcBIMOC6qST6hJDUuNF224PK6kw1G2n9HkKjosElkYBW5qkoubSzbOujRfrXvV';

    // 토큰 받아오기
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.iamport.kr/users/getToken');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        'imp_key' => $api_key,
        'imp_secret' => $api_secret
    )));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($status_code !== 200) {
        // Error handling
        die("Error getting token: $response");
    }

    $token = json_decode($response)->response->access_token;

    // 사전 결제금액 등록
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer $token"
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
        'merchant_uid' => $merchant_uid,
        'amount' => $amount
    )));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($status_code !== 200) {
        // Error handling
        die("Error preparing payment: $response");
    }

    return json_decode($response);
}

$merchant_uid = $_POST['merchant_uid'];
$amount = $_POST['amount'];

$result = preparePayment($merchant_uid, $amount);
echo json_encode($result);
