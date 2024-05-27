<?php include('../common_en/Header.php');

$id = $_GET['id'];
$query = "DELETE FROM tbnotice WHERE id='" . $id . "';";
if (mysqli_query($conn, $query))
    echo "<script>alert('공지사항이 삭제되었습니다.');location.href='/pages/notice.php';</script>";
else
    echo "<script>alert('오류가 발생하였습니다.');history.back();</script>";
?>


<!-- SET @COUNT = 0; 
            UPDATE tbnotice SET tbnotice.id = @COUNT:=@COUNT+1;"; -->