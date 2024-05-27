<link rel="stylesheet" href="/public/css/notice-detail.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../common/Header.php') ?>
</head>

<body>
    <?php
    if (IS_NULL($_SESSION['adminId']) && IS_NULL($_SESSION['user_name'])) {
        echo "<script>alert('접근권한이 없습니다.');history.back();</script>";
    ?>
    <?php
    } else {
    ?>
    <?php include('../common/Nav.php') ?>
    <div class="container">
        <div class="noticeWarp">
            <?php
                $id = $_GET['qna_id'];
                $sql = "SELECT * FROM qna_board WHERE qna_id='" . $id . "'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result)
                ?>
            <div class="notice_route">
                소통공간 - Q&A게시판
            </div>
            <div class="notice_title">
                <?php echo $row['qna_title']; ?>
            </div>
            <div class="qna_area">
                <ul class="qna_content">
                    <li class="user">작성자</li>
                    <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['user_name']; ?></li>
                    <li class="crt">문의 일시</li>
                    <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['created_date']; ?></li>
                </ul>
                <ul class="qna_content">
                    <li class="user">이메일</li>
                    <li class="user_name"><?php echo $row['user_mail']; ?></li>
                    <li class="crt">연락처</li>
                    <li class="created"><?php echo $row['user_phone']; ?></li>
                </ul>
            </div>
            <div class="qna_text">
                <?php echo nl2br($row['qna_content']); ?>
            </div>
            <?php
                if (IS_NULL($row['answer_text'])) {
                } else {
                ?>
            <div class="answer_area">
                <ul class="qna_content">
                    <li class="user">담당부서</li>
                    <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)"><?php echo $row['lab']; ?>
                    </li>
                    <li class="crt">담당자</li>
                    <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['manager_name'] ?></li>
                </ul>
                <ul class="qna_content">
                    <li class="user">담당자 연락처</li>
                    <li class="user_name"><?php echo $row['manager_phone']; ?></li>
                    <li class="crt">담당자 이메일</li>
                    <li class="created"><?php echo $row['manager_mail'] ?></li>
                </ul>
            </div>
            <div class="qna_answer">
                <?php echo nl2br($row['answer_text']); ?>
            </div>
            <?php
                }
                ?>
            <div class="qna_menu">
                <button class="notice_list" onclick="location.href='/pages/qna.php'">
                    목록
                </button>
                <button class="notice_list" onclick="location.href='/pages/qna_update.php?qna_id=<?php echo $id; ?>'">
                    수정
                </button>
                <button class="notice_list" onclick="location.href='/pages/qna_delete.php?id=<?php echo $id; ?>'">
                    삭제
                </button>
                <?php
                    if (IS_NULL($_SESSION['adminId'])) {
                    ?>
                <?php
                    } else {
                    ?>
                <button class="notice_list answer_btn"
                    onclick="location.href='/pages/qna_answer.php?qna_id=<?php echo $id; ?>'">
                    답변하기
                </button>
                <?php }
                    ?>
            </div>
        </div>

        <?php include('../common/Footer.php') ?>
        <?php   } ?>
</body>

</html>