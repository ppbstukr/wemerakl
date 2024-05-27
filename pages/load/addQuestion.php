<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $consulting = $_POST['consulting'];
    $consultingFields = implode(', ', $_POST['consulting_fields']); // 배열을 문자열로 변환
    $whereIn = $_POST['whereIn'];
    $merchant_uid = $_POST['merchant_uid'];
    
var_dump($_POST);

$data = json_encode([
    'con_name' => $consulting,
    'whereIn' => $whereIn,
    'consultingFields' => $consultingFields,
    'merchant_uid' => $merchant_uid,
]);

// 전송할 URL
$url = 'https://merakl.co.kr/api/coupon/merakl/consult';

// cURL 초기화
$ch = curl_init($url);

// PATCH 메서드 설정
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
$redirect_url = "https://wemerakl.com/pages/load/list.php";

// 리다이렉션 수행
header("Location: $redirect_url");
exit; // 리다이렉션 이후에 코드가 계속 실행되지 않도록 exit 사용






}
//     $conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
//     mysqli_set_charset($conn, "utf8");

//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     $stmt = $conn->prepare("UPDATE payments SET consulting_fields=?, con_name=?, whereIn=? WHERE buyer_name=? AND buyer_tel=? AND buyer_email=?");
//     $stmt->bind_param("ssssss", $consultingFields, $consulting, $whereIn, $buyer_name, $buyer_tel, $buyer_email);

//     if ($stmt->execute()) {
//         echo "Data updated successfully!";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     $stmt->close();
//     $conn->close();
// } else {
//     echo "Invalid request.";
// }

// ?>