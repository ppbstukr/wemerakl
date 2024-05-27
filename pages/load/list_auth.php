<?php  
$conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['xhr'])) {
    $verificationCode = $_POST['xhr'];

    $sql2 = "SELECT titlle,supply_amount,target1, content,period1,how,local1,detailarea,areas FROM roadMap WHERE areas IN ('사업화', 'R&D', '글로벌', '융자') AND isShow = 1 " . $verificationCode;
    $result2 = mysqli_query($conn, $sql2);
    if (!$result2) {
        // Query execution failed
        die("Query failed: " . mysqli_error($conn));
    }
    // 데이터를 배열로 저장
    $data = array();
    while ($row2 = mysqli_fetch_array($result2)) {
        $data[] = $row2;
    }
    if (empty($data)) {
        // No data found
        echo json_encode(array('message' => 'No data found.'));
    } else {
        // Return the data as JSON
        echo json_encode($data);
    }
} else {
    // Handle the case where $_POST['xhr'] is not set
    echo json_encode(array('message' => 'xhr parameter is not set.'));
}

// Close the database connection
mysqli_close($conn);
?>