<?php
$conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 받은 데이터 확인
    $receivedData = $_POST["whereClause"]; // JSON 형식의 데이터


    // 사용자에게 보일 부분
    // $sql = "SELECT '출연금' AS category, Sum(supply_amount) AS total_amount FROM roadMap WHERE (areas IN ('사업화', 'R&D', '글로벌') AND isShow = 1)" . ' ' . $receivedData . ' ' . "AND (detailarea='무관')" . ' UNION ' . "SELECT '융자금' AS category, Sum(supply_amount) AS total_amount FROM roadMap WHERE (areas = '융자' AND isShow = 1)" . ' ' . $receivedData . ' ' . "AND (detailarea='무관') OR idx = 193";
    $sql = "SELECT '출연금' AS category, Sum(test) AS total_amount, Count(test) as cnt FROM roadMap WHERE (areas IN ('사업화', 'R&D', '글로벌') AND isShow = 1)" . ' ' . $receivedData . ' ' . ' UNION ' . "SELECT '융자금' AS category, Max(supply_amount) AS total_amount, Count(test) as cnt FROM roadMap WHERE (areas = '융자' AND isShow = 1)" . ' ' . $receivedData . ' OR idx = 193';
    // $sql = "SELECT areas,titlle,test FROM roadMap WHERE (isBoth = 1 OR areas IN ('사업화', 'R&D', '글로벌') AND isShow = 1)" . ' ' . $receivedData . ' ' . ' UNION ' . "SELECT areas,titlle,test FROM roadMap WHERE (isBoth = 1 OR areas = '융자' AND isShow = 1)" . ' ' . $receivedData . ' OR idx = 193';

    $result = mysqli_query($conn, $sql);

    // 데이터를 배열로 저장
    $data = array();
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    //$data[2] = $sql;

    // echo $sql;
    echo json_encode($data);
} else {
    // POST 요청이 아닌 경우 에러 응답
    header("HTTP/1.1 400 Bad Request");
    echo "Invalid request method.";
}