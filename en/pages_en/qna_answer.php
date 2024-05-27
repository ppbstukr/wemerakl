<link rel="stylesheet" href="/public/css/notice-detail.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../common_en/Header.php') ?>
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
            <div class="answer_content">
                <form class="form-area" method="post" action="/pages/qna_answer_result.php?qna_id=<?php echo $id; ?>">
                    <div class="answer_row">
                        <div class="input-area lab">
                            <input type="text" class="lab-input" placeholder="담당부서" name="lab">
                        </div>
                        <div class="input-area name">
                            <input type="text" class="name-iuput" placeholder="담당자" name="manager_name">
                        </div>
                    </div>
                    <div class="answer_row">
                        <div class="input-area phone">
                            <input type="text" class="phone-input" placeholder="연락처 000-0000-0000" name="manager_phone">
                        </div>
                        <div class="input-area email">
                            <input type="text" class="email-iuput" placeholder="담당자 이메일" name="manager_mail">
                        </div>
                    </div>
                    <div class="input-area answer_text">
                        <textarea name="answer_text" placeholder="문의 내용을 자유롭게 작성해주세요."></textarea>
                    </div>
                    <div class="submit_row" style="justify-content:flex-end">
                        <div class="form-submit" style="text-align:right">
                            <input class="submit-btn" type="submit" value="답변등록">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include('../common/Footer.php') ?>
    <?php   } ?>
</body>

</html>