<?php
include("../../common_en/Header.php");



//설정 시작
$uploads_dir = '../../public/uploads';
$allowed_ext = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
$field_name = 'myfile';

//upload 디렉토리가 없다면 생성
if (!is_dir($uploads_dir)) {
    if (!mkdir($uploads_dir, 0777)) {
        die("업로드 디렉토리 생성에 실패 했습니다");
    };
}

if ($_FILES[$field_name]['size'] != 0) {


    //변수정리
    $error = $_FILES[$field_name]['error'];
    $file_name = $_FILES[$field_name]['name'];

    //오류확인
    if ($error != UPLOAD_ERR_OK) {
        switch ($error) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo "파일이 너무 큽니다. ($error)";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "파일이 부분적으로 첨부되었습니다. ($error)";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "파일이 첨부되지 않았습니다. ($error)";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "임시파일을 저장할 디렉토리가 없습니다. ($error)";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "임시파일을 생성할 수 없습니다. ($error)";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "업로드 불가능한 파일이 첨부되었습니다. ($error)";
        }
        exit;
    }

    $upload_file = $uploads_dir . '/' . $file_name; //저장될 디렉토리 및 파일명
    $fileinfo = pathinfo($upload_file); // 첨부파일의 정보 리드
    $ext = strtolower($fileinfo['extension']);

    $i = 1;

    while (is_file($upload_file)) {
        $file_name = $fileinfo['filename'] . "-{$i}." . $fileinfo['extension'];
        $upload_file = $uploads_dir . '/' . $file_name;
        $i++;
    }

    if (!in_array($ext, $allowed_ext)) {
        echo "허용되지 않는 확장자입니다.";
        exit;
    }

    if (!move_uploaded_file($_FILES[$field_name]['tmp_name'], $upload_file)) {
        echo "파일이 업로드 되지 않았습니다.";
        exit;
    }
}






$title_en = $_POST['title_en'];
$title_ko = $_POST['title_ko'];
//$link = $_POST['gal_img'];
$text_en = $_POST['def_en'];
$text_ko = $_POST['def_ko'];

$query = "INSERT INTO tbl_gal(gal_title_ko,gal_title_en,gal_img,gal_def_ko,gal_def_en) VALUES ('" . $title_ko . "','" . $title_en . "','" . $file_name . "','" . $text_ko . "','" . $text_en . "');";

if (mysqli_query($conn, $query))
    echo "<script>alert('갤러리에 등록되었습니다.');location.href='/';</script>";
else
    echo "Error:" . $query . "mesage:" . mysqli_error($conn);
    // echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
    // echo $content;