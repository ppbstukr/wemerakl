<?php
    include("../common/Header.php");
    

    $id=$_GET['qna_id'];
    $user_pwd = $_POST['user_pwd'];
    // print_r($_POST);

    // AND user_pwd = '".$user_pwd."' ;
    $sql = "SELECT * FROM qna_board WHERE  qna_id='".$id."';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // 복호화
    $db_pw=$row['user_pwd'];
    
    if($user_pwd==$db_pw){
        
        session_start();
        $_SESSION['user_name'] = $row['user_name'];
        header('Location: /pages/qna_detail.php?qna_id='.$id);
        ob_end_flush();

        exit();
    }else{
        echo "<script>alert('아이디/패스워드를 확인해주세요.');history.back();</script>";
        
        return;
    }