<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $whereClause = $_POST['whereClause'];

    $conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // 페이징 처리
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $itemsPerPage = 10;
    $offset = ($page - 1) * $itemsPerPage;

    // 우리가 볼 부분
    // $sql2 = "SELECT areas, local1, titlle, supply_amount, target1 FROM roadMap WHERE (areas IN ('사업화', 'R&D', '글로벌','융자') AND isShow = 1)".' '. $whereClause .' '. "AND (detailarea='무관')". " LIMIT $offset, $itemsPerPage";
    // $sql2 = "SELECT areas, local1, titlle, supply_amount, target1 FROM roadMap WHERE (areas IN ('사업화', 'R&D', '글로벌') AND isShow = 1)" . ' ' . $whereClause . ' ' . "AND (detailarea='무관')" . ' UNION ' . "SELECT '융자금' AS category, Sum(supply_amount) AS total_amount FROM roadMap WHERE (areas = '융자' AND isShow = 1 OR idx = 193)" . ' ' . $whereClause . ' ' . "AND (detailarea='무관')". " LIMIT $offset, $itemsPerPage";
    $sql2 = "SELECT areas, local1, titlle, supply_amount, target1 FROM roadMap WHERE (areas IN ('사업화', 'R&D', '글로벌') AND isShow = 1)" . ' ' . $whereClause . ' ' . "AND (detailarea='무관')" . ' UNION ' . "SELECT areas, local1, titlle, supply_amount, target1 FROM roadMap WHERE (areas = '융자' AND isShow = 1)" . ' ' . $whereClause . ' ' . "AND (detailarea='무관') OR idx = 193". " LIMIT $offset, $itemsPerPage";

    $result = mysqli_query($conn, $sql2);

    // 데이터를 배열로 저장
    $data = array();
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }

    // 총 데이터 수를 가져오는 쿼리 실행
    //$countQuery = "SELECT COUNT(*) AS total FROM roadMap WHERE (areas IN ('사업화', 'R&D', '글로벌', '융자') AND isShow = 1)" . ' ' . $whereClause;
    //$countQuery = "SELECT COUNT(*) AS total FROM roadMap WHERE (areas IN ('사업화', 'R&D', '글로벌','융자') AND isShow = 1)".' '. $whereClause ." AND (detailarea='무관')";
    $countQuery = "SELECT SUM(total_row_count) AS total_result_count FROM ( SELECT COUNT(*) AS total_row_count FROM roadMap WHERE (areas IN ('사업화', 'R&D', '글로벌') AND isShow = 1) " . $whereClause . " AND (detailarea='무관') UNION ALL " . "SELECT COUNT(*) AS total_row_count FROM roadMap WHERE (areas = '융자' AND isShow = 1 OR idx = 193) " . $whereClause . " AND (detailarea='무관') ) AS subquery";
    $countResult = mysqli_query($conn, $countQuery);
    $totalCount = mysqli_fetch_assoc($countResult)['total'];
    // 총 페이지 수 계산
    $totalPages = ceil($totalCount / $itemsPerPage);

    // 응답 데이터 배열 생성
    $responseData = [
        'posts' => $data, // 실제 데이터 배열
        'totalPages' => $totalPages, // 총 페이지 수
    ];

    //echo $sql2;
    //echo $countQuery;
   echo json_encode($responseData);
} else {
    // POST 요청이 아닌 경우 에러 응답
    header("HTTP/1.1 400 Bad Request");
    echo "Invalid request method.";
}
?>