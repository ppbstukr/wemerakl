<link rel="stylesheet" href="../../public/css/qna_write.css">
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
    <div class="notice-area">
        <div class="notice-content">
            <div class="notice-board-area">
                <div class="route">
                    <a href="/">Home</a> > <a href="./qna.php">소통공간</a> > <a href="./qna.php">Q&A</a>
                </div>
                <div class="notice-board">
                    <?php
                        $id = $_GET['qna_id'];
                        $sql = "SELECT * FROM qna_board WHERE qna_id='" . $id . "'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        ?>
                    <form class="form-area" method="post"
                        action="./qna_update_result.php?qna_id=<?php echo $id; ?>">
                        <div class="qna_row">
                            <div class="input-area division">
                                <select title="문의유형" name="division">
                                    <option value='창업교육'>창업교육</option>
                                    <option value='R&D기획'>R&D기획</option>
                                    <option value='PT제작'>PT제작</option>
                                    <option value='사업계획서'>사업계획서</option>
                                </select>
                            </div>
                            <div class="input-area title">
                                <input type="text" class="title-input" name="qna_title" placeholder="제목"
                                    value="<?php echo $row['qna_title']; ?>">
                            </div>
                        </div>
                        <div class="qna_row">
                            <div class="input-area name">
                                <input type="text" class="name-input" name="user_name" placeholder="작성자"
                                    value="<?php echo $row['user_name']; ?>">
                            </div>
                            <div class="input-area email">
                                <input type="text" class="email-iuput" name="user_mail" placeholder="이메일"
                                    value="<?php echo $row['user_mail']; ?>">
                            </div>
                        </div>
                        <div class="qna_row">
                            <div class="input-area phone">
                                <input type="text" class="phone-input" name="user_phone" placeholder="전화번호"
                                    value="<?php echo $row['user_phone']; ?>">
                            </div>
                            <div class="input-area pwd">
                                <input type="text" class="pwd-iuput"
                                    placeholder="비밀번호(답을 확인하기 위해 필요한 비밀번호입니다.)"
                                    name="user_pwd" value="<?php echo $row['user_pwd']; ?>">
                            </div>
                        </div>
                        <div class="input-area qna_content">
                            <textarea name="qna_content"><?php echo $row['qna_content']; ?></textarea>
                        </div>
                        <div class="qna_row" style="justify-content:center">
                            <input class="submit-btn" type="button" value="취소"
                                onClick="location.href='./qna_pwd.php?qna_id=<?php echo $row['qna_id'] ?>'" style="margin-right: 10px;">
                            <div class="form-submit" style="text-align:right">
                                <input class="submit-btn" type="submit" value="수정">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('../../common/Footer.php') ?>
</body>

</html>