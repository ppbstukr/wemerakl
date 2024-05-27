<?php
if (isset($_POST['id']) && isset($_POST['meetStat'])) {
    $id = $_POST['id'];
    $meetStat = $_POST['meetStat'];

    $conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE payments SET meetStat = '$meetStat' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "상담 상태가 업데이트되었습니다.";
    } else {
        echo "오류: " . $conn->error;
    }

    $conn->close();
}
