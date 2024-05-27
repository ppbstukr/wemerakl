<?php
    include("../common/Header.php");
    // include('../db.php');
    // $host="127.0.0.1";
    // $port=3306;
    // $socket="";
    // $user="root";
    // $password="";
    // $dbname="bmds_test";
    
    // $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    //     or die ('Could not connect to the database server' . mysqli_connect_error());
    
    
    $email= $_POST['email'];
    // $name = $_POST['name'];
    $phone = $_POST['phone'];
    $commented = $_POST['commented'];
    $bmds_date = $_POST['bmds_date'];
    $bmds_time = $_POST['bmds_time'];
    // $delte_yn = $_POST['deleteYn'];

    
    $sql = "INSERT INTO bmds_test(email,phone,commented,bmds_date,bmds_time) VALUES ('$email','$phone','$commented', '$bmds_date', '$bmds_time')";
    // mysqli_query($con,$sql);
    $result = mysqli_query($conn,$sql);
    
    

   if($result==true)
        echo "<script>alert('문의가 정상적으로 접수되었습니다.');location.href='/';</script>";
    else
        // echo "Error:".$sql."mesage:".mysqli_error($conn);
        echo "<script>alert('내용을 제대로 작성해주세요.');history.back();</script>";
    // echo $content;
?>