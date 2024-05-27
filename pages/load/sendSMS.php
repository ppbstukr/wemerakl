<?php
include "../../phpqrcode/phpqrcode.php";

// QR 코드로 포함될 내용에 화면의 URL을 포함시킴
$qrContents = "https://wemerakl.com/pages/load/list.php";

$ecc = 'H'; // 오류 정정 수준 (L, M, Q, H 중 선택)
$pixel_Size = 10; // QR 코드의 픽셀 크기
$frame_Size = 10; // QR 코드 주위의 여백 크기

// QR 코드를 이미지로 생성
ob_start(); // 출력 버퍼링 시작
QRcode::png($qrContents, null, $ecc, $pixel_Size, $frame_Size); // 이미지 생성 및 출력
$imageData = ob_get_contents(); // 출력 버퍼에서 이미지 데이터 가져오기
ob_end_clean(); // 출력 버퍼 비우기

// 이미지 데이터를 base64로 인코딩하여 화면에 출력
$imageDataUri = "data:image/png;base64," . base64_encode($imageData);
echo $imageDataUri;
?>