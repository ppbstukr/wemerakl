<link rel="stylesheet" href="../../public/css/notice-detail.css">
<link rel="stylesheet" href="/en/public/css/qna_write.css">
<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../../common_en/Header.php') ?>
</head>

<body>
    <?php
    if (IS_NULL($_SESSION['adminId']) && IS_NULL($_SESSION['user_name'])) {
        echo "<script>alert('접근권한이 없습니다.');history.back();</script>";
    ?>
    <?php
    } else {
    ?>
    <?php include('../../common_en/Nav.php') ?>
    <div class="co-banner">
        <div class="top-text">
            Communication Space
        </div>
    </div>
    <div class="top_menu" style="margin-bottom: 50px;">
        <ul class="nav nav-pills justify-content-center">
            <li><a href="New.php">NEWS</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="Gallery.php">GALLERY</a></li>
        </ul>
    </div>

    <div class="noticeWarp">
        <?php
                $id = $_GET['qna_id'];
                $sql = "SELECT * FROM qna_en WHERE qna_id='" . $id . "'";
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
            <ul class="qna_contents">
                <li class="user">작성자</li>
                <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)">
                    <?php echo $row['user_name']; ?></li>
                <li class="crt">문의 일시</li>
                <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)">
                    <?php echo $row['created_date']; ?></li>
            </ul>
            <ul class="qna_contents">
                <li class="user">이메일</li>
                <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)">
                    <?php echo $row['user_mail']; ?></li>
                <li class="crt">연락처</li>
                <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)"><?php echo $row['user_phone']; ?>
                </li>
            </ul>
        </div>
        <div class="qna_text">
            <?php echo nl2br($row['qna_content']); ?>
        </div>
        <div class="answer_content">
            <form class="form-area" method="post" action="./qna_answer_update_result.php?qna_id=<?php echo $id; ?>">
                <div class="answer_row">
                    <div class="input-area lab">
                        <input type="text" class="lab-input" placeholder="담당부서" name="lab" value="<?php echo $row['lab'];?>">
                    </div>
                    <div class="input-area name">
                        <input type="text" class="name-iuput" placeholder="담당자" name="manager_name" value="<?php echo $row['manager_name'];?>">
                    </div>
                </div>
                <div class="answer_row">
                    <div class="input-area phone">
                        <input type="text" class="phone-input" placeholder="연락처 000-0000-0000" name="manager_phone"  value="<?php echo $row['manager_phone'];?>">
                    </div>
                    <div class="input-area email">
                        <input type="text" class="email-iuput" placeholder="담당자 이메일" name="manager_mail" value="<?php echo $row['manager_mail'];?>">
                    </div>
                </div>
                <div class="input-area answer_text">
                    <textarea name="answer_text"><?php echo $row['answer_text'];?></textarea>
                </div>
                <div class="qna_row" style="justify-content:center; margin-bottom:10px;">
                    <input class="submit-btn" type="button" value="취소"
                        onClick="location.href='./qna_pwd.php?qna_id=<?php echo $row['qna_id'] ?>'"
                        style="margin-right: 10px;">
                    <div class="form-submit" style="text-align:right">
                        <input class="submit-btn" type="submit" value="답변등록">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include('../../common_en/Footer.php') ?>
    <?php   } ?>
</body>

</html>