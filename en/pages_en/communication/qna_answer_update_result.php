<?php
    include("../../common_en/Header.php");
    $id=$_GET['qna_id'];
    $answer='답변완료';
    $lab=$_POST['lab'];
    $name=$_POST['manager_name'];
    $mail=$_POST['manager_mail'];
    $phone=$_POST['manager_phone'];
    $text=$_POST['answer_text'];

    $query = "UPDATE qna_en
    SET
    `answer` = '".$answer."',
    `lab` = '".$lab."',
    `manager_name` = '".$name."',
    `manager_mail` = '".$mail."',
    `manager_phone` = '".$phone."',
    `answer_text` = '".$text."'
    WHERE `qna_id` = '".$id."';";

   if(mysqli_query($conn, $query))
        echo "<script>alert('답변이 정상적으로 수정되었습니다.');location.href='./qna.php';</script>";
    else
        // echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
       echo "Error:".$query."mesage:".mysqli_error($conn);
    // echo $id;
?>