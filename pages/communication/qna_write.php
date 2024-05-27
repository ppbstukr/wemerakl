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
            <li><a href="Gallery.php">사진관</a></li>
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
                                    <option value='창업교육'>창업교육</option>
                                    <option value='R&D기획'>R&D기획</option>
                                    <option value='PT제작'>PT제작</option>
                                    <option value='사업계획서'>사업계획서</option>
                                </select>
                            </div>
                            <div class="input-area title">
                                <input type="text" class="title-input" placeholder="제목" name="qna_title">
                            </div>
                        </div>
                        <div class="qna_row">
                            <div class="input-area name">
                                <input type="text" class="name-input" placeholder="이름" name="user_name">
                            </div>
                            <div class="input-area email">
                                <input type="text" class="email-iuput" placeholder="이메일" name="user_mail">
                            </div>
                        </div>
                        <div class="qna_row">
                            <div class="input-area phone">
                                <input type="tel" class="phone-input" placeholder="전화번호 000-0000-0000"
                                    pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" name="user_phone" maxlength="13">
                            </div>
                            <div class="input-area pwd">
                                <input type="password" class="pwd-iuput"
                                    placeholder="비밀번호(답변을 확인하기 위해 필요한 비밀번호입니다.)"
                                    name="user_pwd">
                            </div>
                        </div>
                        <div class="input-area qna_content">
                            <textarea name="qna_content" placeholder="문의사항 작성"></textarea>
                        </div>
                        <div class="qna_row" style="justify-content:center;">
                            <input class="submit-btn" type="button" value="취소"
                                onClick="location.href='/pages/communication/qna.php'" style="margin:10px;">
                            <div class="form-submit" style="text-align:right; margin:10px;">
                                <input class="submit-btn" type="submit" value="문의하기">
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