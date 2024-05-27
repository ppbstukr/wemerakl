<?php
    include("../../common/Header.php");
    $id=$_GET['qna_id'];
    $division = $_POST['division'];
    $title= $_POST['qna_title'];
    $name = $_POST['user_name'];
    $mail = $_POST['user_mail'];
    $phone = $_POST['user_phone'];
    $pwd = $_POST['user_pwd'];
    // $pw = password_hash($pwd,PASSWORD_DEFAULT);
    $content = $_POST['qna_content'];

    $query = "UPDATE qna_board
    SET
    `division` = '".$division."',
    `qna_title` = '".$title."',
    `user_name` = '".$name."',
    `user_mail` = '".$mail."',
    `user_phone` = '".$phone."',
    `user_pwd` = '".$pwd."',
    `qna_content` = '".$content."'
    WHERE `qna_id` = '".$id."';";

   if(mysqli_query($conn, $query))
        echo "<script>alert('귀하의 문의가 성공적으로 완료되었습니다.');location.href='./qna.php';</script>";
    else
        // echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
       echo "Error:".$query."mesage:".mysqli_error($conn);
    // echo $id;