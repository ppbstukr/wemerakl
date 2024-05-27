<link rel="stylesheet" href="../../public/css/notice-detail.css">
<link rel="stylesheet" href="../../public/css/qna.css">
<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../../common/Header.php') ?>
</head>

<body>
<?php include('../../common/Nav.php') ?>
    <div class="co-banner">
        <div class="top-text">
            소통공간
        </div>
    </div>
    <div class="top_menu" style="margin-bottom: 50px;">
        <ul class="nav nav-pills justify-content-center">
            <li><a href="New.php">뉴스</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="Gallery.php">갤러리</a></li>
        </ul>
    </div>
    <?php
    if (IS_NULL($_SESSION['adminId']) && IS_NULL($_SESSION['user_name'])) {
        echo "<script>alert('You don't have access');history.back();</script>";
    ?>
    <?php
    } else {
    ?>
    
    <div class="container">
        <!--<div class="route" style="margin-left: 6%;">
            <a href="/">Home</a> > <a href="./qna.php">소통공간</a> > <a href="./qna.php">Q&A</a>
        </div>-->
        <div class="noticeWarp">
            <?php
                $id = $_GET['qna_id'];
                $sql = "SELECT * FROM qna_board WHERE qna_id='" . $id . "'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result)
                ?>
            <!--<div class="notice_route">
                Q&A BOARD
            </div>-->
            <div class="notice_title">
                <?php echo $row['qna_title']; ?>
            </div>
            <div class="qna_area">
                <ul class="qna_contents">
                    <li class="user">작성자</li>
                    <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['user_name']; ?></li>
                    <li class="crt">작성일</li>
                    <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['created_date']; ?></li>
                </ul>
                <ul class="qna_contents">
                    <li class="user">이메일</li>
                    <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['user_mail']; ?></li>
                    <li class="crt">전화번호</li>
                    <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['user_phone']; ?></li>
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
                <ul class="qna_contents">
                    <li class="user">담당부서</li>
                    <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)"><?php echo $row['lab']; ?>
                    </li>
                    <li class="crt">관리자이름</li>
                    <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['manager_name'] ?></li>
                </ul>
                <ul class="qna_contents">
                    <li class="user">담당자</li>
                    <li class="user_name"><?php echo $row['manager_phone']; ?></li>
                    <li class="crt">담당자이메일</li>
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
                <button class="notice_list" onclick="location.href='./qna_update.php?qna_id=<?php echo $id; ?>'">
                    수정
                </button>
                <button class="notice_list" onclick="location.href='./qna_delete.php?id=<?php echo $id; ?>'">
                    삭제
                </button>
            </div>
            <div class="qna_menu">
                <button class="notice_list" onclick="location.href='./qna.php'" style="float:right;">
                    목록
                </button>
                <?php
                    if (IS_NULL($_SESSION['adminId'])) {
                    ?>
                <?php
                    } else {
                        if(!$row['answer_text']){
                    ?>
                <button class="notice_list answer_btn"
                    onclick="location.href='./qna_answer.php?qna_id=<?php echo $id; ?>'">
                    답변
                </button>
                <?php } else { ?>
                <button class="notice_list answer_btn" style="width:125px;"
                    onclick="location.href='./qna_answer_update.php?qna_id=<?php echo $id; ?>'">
                    답변수정
                </button>
                <?php } }
                    ?>
            </div>
        </div>
    </div>
    <?php   } ?>
    <?php include('../../common/Footer.php') ?>
</body>

</html>