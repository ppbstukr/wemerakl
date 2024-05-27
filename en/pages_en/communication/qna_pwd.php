<link rel="stylesheet" href="../../public/css/qna.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL</title>
    <?php include('../../common_en/Header.php') ?>
</head>

<body>
    <?php include('../../common_en/Nav.php') ?>

    <div class="notice-banner">
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
    <div class="notice-area">
        <div class="notice-content">
            <div class="notice-board-area">
                <div class="route">
                    <a href="/en">Home</a> > <a href="./qna.php">Communication Space</a> > <a
                        href="./qna.php">Q&A</a>
                </div>
                <div class="notice-board">
                    <?php $id = $_GET['qna_id']; ?>
                    <?php
                        if (IS_NULL($_SESSION['adminId'])) {
                        ?>
                    <div class="pwd-area">
                        <div class="pwd-board">
                            <h2>This is a secret.</h2>
                            <p>Only authors and administrators can view
                                <br>Please enter a password
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