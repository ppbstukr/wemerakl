<?php
// 데이터베이스 연결
$conn = mysqli_connect('localhost','merakl','tbsp0712!','merakl');

// 파일명 설정
$filename = "data.csv";

// HTTP 헤더 설정
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: text/csv");

// CSV 파일 열기
$output = fopen("php://output", "w");
$fields = array('현재 사업 분야', '현재 사업 분야 (상세)', '회사 설립일', '직전 년도 매출(천원)', '상담 관심 분야', '성명', '이메일', '연락처', '사명', '신청일');
fputcsv($output, $fields);
$sql = "SELECT * FROM contact";
$result = mysqli_query($conn,$sql);

// 데이터 출력
while ($row = mysqli_fetch_assoc($result)) {
    $data = array(
        $row['area'],
        $row['detail'],
        $row['established'],
        $row['sales'],
        $row['interests'],
        $row['name'],
        $row['email'],
        $row['phone'],
        $row['company_name'],
        $row['cratedAt']
    );
    fputcsv($output, $data);
}

// CSV 파일 닫기
fclose($output);

?>