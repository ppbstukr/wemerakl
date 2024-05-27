<?php
    include("../common_en/Header.php");
    $division = $_POST['faq_division'];
    $title= $_POST['faq_title'];
    $content = $_POST['faq_content'];

    $query = "INSERT INTO faq_board(faq_division,faq_title,faq_content) VALUES ('".$division."','".$title."','".$content."');";

   if(mysqli_query($conn, $query))
        echo "<script>alert('질문이 정상적으로 추가되었습니다.');location.href='/pages/faq.php';</script>";
    else
        echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
    //    echo "Error:".$query."mesage:".mysqli_error($conn);
    // echo $content;
?>