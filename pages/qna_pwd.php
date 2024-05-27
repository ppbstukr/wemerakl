<link rel="stylesheet" href="../../public/css/qna.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL</title>
    <?php include('../../common/Header.php') ?>
</head>

<body>
    <?php include('../../common/Nav.php') ?>

    <div class="notice-banner">
        <div class="top-text">
            소통공간
        </div>
    </div>
    <div class="top_menu" style="margin-bottom: 50px;">
        <ul class="nav nav-pills justify-content-center">
            <li><a href="New.php">뉴스</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="Gallery.php">사진관</a></li>
        </ul>
    </div>
    <div class="notice-area">
        <div class="notice-content">
            <div class="notice-board-area">
                <div class="route">
                    <a href="/en">Home</a> > <a href="./qna.php">소통공간
                    </a> > <a
                        href="./qna.php">Q&A</a>
                </div>
                <div class="notice-board">
                    <?php $id = $_GET['qna_id']; ?>
                    <?php
                        if (IS_NULL($_SESSION['adminId'])) {
                        ?>
                    <div class="pwd-area">
                        <div class="pwd-board">
                            <h2>비밀글입니다.</h2>
                            <p>작성자와 관리자만 볼 수있습니다.
                                <br>비밀번호를 입력하세요.
                            </p>
                            <form class="pwd-form" method="post"
                                action="qna_check.php?qna_id=<?php echo $id ?>">
                                <div class="input-area pw" style="margin-bottom:1rem">
                                    <input type="password" class="pw-input" placeholder="Password" name="user_pwd">
                                </div>
                                <div class="form-submit">
                                    <input class="pwd-btn" type="submit" value="OK">
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                        } else {
                            header('Location: ./qna_detail.php?qna_id=' . $id);
                        } ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('../../common_en/Footer.php') ?>
</body>

</html>