<?php
// 데이터베이스 연결
$conn = mysqli_connect('localhost','merakl','tbsp0712!','merakl');
if (!$conn) {
    die("데이터베이스 연결에 실패했습니다: " . mysqli_connect_error());
}
// 파일명 설정
$filename = "data.csv";

// HTTP 헤더 설정
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: text/csv");

// CSV 파일 열기
$output = fopen("php://output", "w");
$fields = array('사업명', '지원금액', '지원대상', '사업내용', '공고 월', '지원방법', '지역', '세부분야');
fputcsv($output, $fields);

$name = isset($_GET['name']) ? $_GET['name'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$verificationCode = isset($_GET['verificationCode']) ? $_GET['verificationCode'] : '';

$sql = "SELECT query FROM payments WHERE buyer_name = '" . $name . "' AND buyer_email = '" . $email . "'" . " AND pw = '" .$verificationCode."'" ;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$sql2 = "SELECT titlle,supply_amount,target1, content,period1,how,local1,detailarea FROM roadMap WHERE areas IN ('사업화', 'R&D', '글로벌', '융자') AND isShow = 1 " . $row[0];
$result2 = mysqli_query($conn, $sql2);

// 데이터 출력
while ($row2 = mysqli_fetch_assoc($result2)) {
    $data = array(
        $row2['titlle'],
        $row2['supply_amount'],
        $row2['target1'],
        $row2['content'],
        $row2['period1'],
        $row2['how'],
        $row2['local1'],
        $row2['detailarea']
    );
    fputcsv($output, $data);
}
// CSV 파일 닫기
fclose($output);




?>