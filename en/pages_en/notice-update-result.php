<?php include('../common_en/Header.php') ?>
<?php

//설정 시작
$uploads_dir = '../public/uploads';
$allowed_ext = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
$field_name = 'myfile';
$file_name = '';
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

$id = $_GET['id'];
$title = $_POST['title'];
$name = 'Merakl';
$content = $_POST['content'];

$query = "UPDATE tbnotice SET
            title = '" . $title . "',
            content = '" . $content . "',
            name = '" . $name . "'";

$file_query = ", file = '" . $file_name . "'";

$where = " WHERE id='" . $id . "'";

$f_query = $query . $file_query . $where;

$nf_query = $query . $where;

if ($_FILES[$field_name]['size'] != 0) {
    if (mysqli_query($conn, $f_query))
        echo "<script>alert('공지사항이 수정되었습니다.');location.href='/pages/notice.php';</script>";
    else
        echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
} else {
    if (mysqli_query($conn, $nf_query))
        echo "<script>alert('공지사항이 수정되었습니다.');location.href='/pages/notice.php';</script>";
    else
        echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
}
// if(mysqli_query($conn, $query))
//     echo "<script>alert('공지사항이 수정되었습니다.');location.href='/pages/notice.php';</script>";
// else
//     echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
//    echo "Error:".$query."mesage:".mysqli_error($conn);
// echo $content;

?>