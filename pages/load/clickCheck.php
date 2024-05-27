<?php

$conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
mysqli_set_charset($conn, "utf8");


// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$trueFalse = $_POST['trueFalse']; // bool값 0 or 1
$count = $_POST['count']; // count 증가값
$authCode = $_POST['authCode'];

    $selectList = "SELECT ". $trueFalse ." FROM payments where pw = '". $authCode . "'";
    $selectRes = mysqli_query($conn,$selectList);
    $selectRow = mysqli_fetch_array($selectRes);
    // bool값이 0인경우 1로 바꿈
    if($selectRow[0] == 0){
        $updateList = "UPDATE payments SET " . $trueFalse . " = 1 where pw = '". $authCode . "'";
        if(mysqli_query($conn,$updateList)){
            echo $authCode;
        }
        else{
            echo "Error:" . $updateList . "mesage:" . mysqli_error($conn);
        }
    }

    // count증가
    $updateList2 = "UPDATE payments SET " . $count . " = " . $count . "+ 1 where pw = '". $authCode. "' AND " . $trueFalse . " = 1";
    if(mysqli_query($conn,$updateList2)){
        echo $authCode;
    }
    else{
        echo "Error:" . $updateList2 . "mesage:" . mysqli_error($conn);
    }