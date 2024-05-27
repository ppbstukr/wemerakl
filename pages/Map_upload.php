<?php
header('Content-Type: text/html; charset=UTF-8');

// 데이터베이스 연결 설정
$host = 'localhost';
$dbname = 'merakl';
$username = 'merakl';
$password = 'tbsp0712!';

// 데이터베이스에 연결
$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
// 업로드된 파일 처리
if (isset($_FILES['csvFile']) && $_FILES['csvFile']['error'] === UPLOAD_ERR_OK) {
    $tmpName = $_FILES['csvFile']['tmp_name'];
    // CSV 파일 열기
    if (($handle = fopen($tmpName, 'r')) !== false) {
        // CSV 파일 읽기 및 데이터베이스에 저장
        while (($data = fgetcsv($handle, 0, ',', '"', 'UTF-8')) !== false) {
            $id = $data[0];
            $test1 = $data[1]; // CSV 파일에서 원하는 열의 인덱스에 따라 설정
            $test2 = $data[2];
            $test3 = $data[3];
            $test4 = $data[4];
            $test5 = $data[5];
            $test6 = $data[6];
            $test7 = $data[7];
            $test8 = $data[8];
            

            // 데이터베이스에 저장하기 위한 SQL 쿼리 작성 및 실행
            $query = "INSERT INTO test_csv (id,test1, test2,test3,test4,test5,test6,test7,test8) VALUES (:id,:test1, :test2,:test3,:test4,:test5,:test6,:test7,:test8)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':test1', $test1);
            $stmt->bindParam(':test2', $test2);
            $stmt->bindParam(':test3', $test3);
            $stmt->bindParam(':test4', $test4);
            $stmt->bindParam(':test5', $test5);
            $stmt->bindParam(':test6', $test6);
            $stmt->bindParam(':test7', $test7);
            $stmt->bindParam(':test8', $test8);
            $stmt->execute();
        }
        if($stmt){
            echo "<script>alert('사업공고가 업로드되었습니다.');location.href='./Map.php';</script>";
        }
        else{
            echo "Error:".$query."mesage:".mysqli_error($conn);
        }
        // 파일 닫기
        fclose($handle);
    }
}
// 데이터베이스 연결 종료
$db = null;

?>