<link rel="stylesheet" href="../../public/css/qna_write.css">
<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL</title>
    <?php include('../../common_en/Header.php') ?>
</head>

<body>
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
    <div class="notice-area">
        <div class="notice-content">

            <div class="notice-board-area">
                <div class="notice-board">
                    <form class="form-area" method="post" action="qna_result.php">
                        <div class="qna_row">
                            <div class="input-area division">
                                <select title="문의유형" name="division">
                                    <option value='창업교육'>Strat-up Education</option>
                                    <option value='R&D기획'>R&D Planning</option>
                                    <option value='PT제작'>PT Scenario</option>
                                    <option value='사업계획서'>Business Plan</option>
                                </select>
                            </div>
                            <div class="input-area title">
                                <input type="text" class="title-input" placeholder="Contact Title" name="qna_title">
                            </div>
                        </div>
                        <div class="qna_row">
                            <div class="input-area name">
                                <input type="text" class="name-input" placeholder="Name" name="user_name">
                            </div>
                            <div class="input-area email">
                                <input type="text" class="email-iuput" placeholder="E-Mail" name="user_mail">
                            </div>
                        </div>
                        <div class="qna_row">
                            <div class="input-area phone">
                                <input type="tel" class="phone-input" placeholder="Phone 000-0000-0000"
                                    pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" name="user_phone" maxlength="13">
                            </div>
                            <div class="input-area pwd">
                                <input type="password" class="pwd-iuput"
                                    placeholder="Password(This is the password required to check the answer.)"
                                    name="user_pwd">
                            </div>
                        </div>
                        <div class="input-area qna_content">
                            <textarea name="qna_content" placeholder="Write inquiry"></textarea>
                        </div>
                        <div class="qna_row" style="justify-content:center;">
                            <input class="submit-btn" type="button" value="cancel"
                                onClick="location.href='/en/pages_en/communication/qna.php'" style="margin:10px;">
                            <div class="form-submit" style="text-align:right; margin:10px;">
                                <input class="submit-btn" type="submit" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include('../../common_en/Footer.php') ?>
</body>

</html>