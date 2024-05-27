<?php
$conn = mysqli_connect('localhost', 'merakl', 'tbsp0712!', 'merakl');
mysqli_set_charset($conn, "utf8");

if ($conn === false) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $arr2 = isset($_POST['arr2']) ? json_decode($_POST['arr2'], true) : [];  // 받아온 데이터를 배열로 변환

    $selectedFields = isset($_POST['field']) ? $_POST['field'] : []; // 체크박스에서 선택된 "어떤 분야"

    $buyer_name = $_POST['buyer_name'];
    $buyer_tel = $_POST['buyer_tel'];
    $buyer_email = $_POST['buyer_email'];
    $arr2_json = json_encode($arr2, JSON_UNESCAPED_UNICODE);
    $selectedFields_json = json_encode($selectedFields, JSON_UNESCAPED_UNICODE);


    // 체크박스 값 처리
    $consulting_fields = isset($_POST['consulting_fields']) ? $_POST['consulting_fields'] : [];
    $other_field = "";  // 기타 필드 초기화

    // "기타" 체크박스가 선택된 경우
    if (in_array("기타", $consulting_fields)) {
        $other_field = $_POST['otherField'];
        $key = array_search("기타", $consulting_fields);  // "기타" 값의 키를 찾습니다.
        $consulting_fields[$key] = "기타: " . $other_field; // 해당 키의 값을 수정합니다.
    }

    $selected_fields = implode(", ", $consulting_fields);  // 배열을 문자열로 변환

    // 데이터베이스에 정보 저장
    $query = "INSERT INTO user (buyer_name, buyer_tel, buyer_email, consulting_fields, other_field,selectedFields,arr2) VALUES (?, ?, ?, ?, ?,?,?)";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sssssss', $buyer_name, $buyer_tel, $buyer_email, $selected_fields, $other_field, $selectedFields_json, $arr2_json);

    if (mysqli_stmt_execute($stmt))
        echo "<script>alert('뉴스가 정상적으로 등록되었습니다.');location.href='/pages/load/list.php';</script>";
    else
        echo "Error: mesage:" . mysqli_error($conn);  // 오류 메시지 출력을 위해 mysqli_error() 사용
}
