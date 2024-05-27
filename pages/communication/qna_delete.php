<?php include('../../common/Header.php');

$id = $_GET['id'];
$query = "DELETE FROM qna_board WHERE qna_id='" . $id . "';";
if (mysqli_query($conn, $query))
    echo "<script>alert('Q&A가 삭제되었습니다.');location.href='./qna.php';</script>";
else
    echo "<script>alert('ERROR');history.back();</script>";
?>


<!-- SET @COUNT = 0; 
            UPDATE tbnotice SET tbnotice.id = @COUNT:=@COUNT+1;"; -->