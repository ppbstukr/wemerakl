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
            $test9 = $data[9];
            $test10 = $data[10];
            $test11 = $data[11];
            $test12 = $data[12];
            $test13 = $data[13];
            $test14 = $data[14];
            $test15 = $data[15];
            $test16 = $data[16];
            $test17 = $data[17];
            $test18 = $data[18];
            $test19 = $data[19];


            // 데이터베이스에 저장하기 위한 SQL 쿼리 작성 및 실행
            $query = "INSERT INTO roadMap (idx,category, areas,titlle,amount,scale,supply_amount,target1,content,period1,how,career1,career2,restartup,age,isstudent,isfemale,local1,localdetail,detailarea) VALUES (:idx,:category, :areas,:titlle,:amount,:scale,:supply_amount,:target1,:content,:period1,:how,:career1,:career2,:restartup,:age,:isstudent,:isfemale,:local1,:localdetail,:detailarea)";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':idx', $id);
            $stmt->bindParam(':category', $test1);
            $stmt->bindParam(':areas', $test2);
            $stmt->bindParam(':titlle', $test3);
            $stmt->bindParam(':amount', $test4);
            $stmt->bindParam(':scale', $test5);
            $stmt->bindParam(':supply_amount', $test6);
            $stmt->bindParam(':target1', $test7);
            $stmt->bindParam(':content', $test8);
            $stmt->bindParam(':period1', $test9);
            $stmt->bindParam(':how', $test10);
            $stmt->bindParam(':career1', $test11);
            $stmt->bindParam(':career2', $test12);
            $stmt->bindParam(':restartup', $test13);
            $stmt->bindParam(':age', $test14);
            $stmt->bindParam(':isstudent', $test15);
            $stmt->bindParam(':isfemale', $test16);
            $stmt->bindParam(':local1', $test17);
            $stmt->bindParam(':localdetail', $test18);
            $stmt->bindParam(':detailarea', $test19);
            $stmt->execute();
        }
        if ($stmt) {
            echo "<script>alert('사업공고가 업로드되었습니다.');location.href='./Map.php';</script>";
        } else {
            echo "Error:" . $query . "mesage:" . mysqli_error($conn);
        }
        // 파일 닫기
        fclose($handle);
    }
}
// 데이터베이스 연결 종료
$db = null;