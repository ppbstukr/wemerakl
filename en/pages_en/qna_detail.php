<link rel="stylesheet" href="/public/css/notice-detail.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL</title>
    <?php include('../common_en/Header.php') ?>
</head>

<body>
    <?php
    if (IS_NULL($_SESSION['adminId']) && IS_NULL($_SESSION['user_name'])) {
        echo "<script>alert('You don't have access');history.back();</script>";
    ?>
    <?php
    } else {
    ?>
    <?php include('../common_en/Nav.php') ?>
    <div class="container">
        <div class="noticeWarp">
            <?php
                $id = $_GET['qna_id'];
                $sql = "SELECT * FROM qna_board WHERE qna_id='" . $id . "'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result)
                ?>
            <div class="notice_route">
                Q&A BOARD
            </div>
            <div class="notice_title">
                <?php echo $row['qna_title']; ?>
            </div>
            <div class="qna_area">
                <ul class="qna_content">
                    <li class="user">Writer</li>
                    <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['user_name']; ?></li>
                    <li class="crt">Date Contact</li>
                    <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['created_date']; ?></li>
                </ul>
                <ul class="qna_content">
                    <li class="user">E-Mail</li>
                    <li class="user_name"><?php echo $row['user_mail']; ?></li>
                    <li class="crt">Phone</li>
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
                    <li class="user">Department in charge</li>
                    <li class="user_name" style="border-top:1px solid rgba(128,128,128,0.2)"><?php echo $row['lab']; ?>
                    </li>
                    <li class="crt">Manager</li>
                    <li class="created" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['manager_name'] ?></li>
                </ul>
                <ul class="qna_content">
                    <li class="user">Contact Person</li>
                    <li class="user_name"><?php echo $row['manager_phone']; ?></li>
                    <li class="crt">Contact E-Mail</li>
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
                <button class="notice_list" onclick="location.href='/pages_en/qna.php'">
                    List
                </button>
                <button class="notice_list"
                    onclick="location.href='/pages_en/qna_update.php?qna_id=<?php echo $id; ?>'">
                    Update
                </button>
                <button class="notice_list" onclick="location.href='/pages_en/qna_delete.php?id=<?php echo $id; ?>'">
                    Delete
                </button>
                <?php
                    if (IS_NULL($_SESSION['adminId'])) {
                    ?>
                <?php
                    } else {
                    ?>
                <button class="notice_list answer_btn"
                    onclick="location.href='/pages_en/qna_answer.php?qna_id=<?php echo $id; ?>'">
                    Answer
                </button>
                <?php }
                    ?>
            </div>
        </div>

        <?php include('../common_en/Footer.php') ?>
        <?php   } ?>
</body>

</html>