<link rel="stylesheet" href="/public/css/news.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <?php include('../common/Header.php') ?>
</head>

<body>
    <?php include('../common/Nav.php') ?>
    <div class="container">
        <div class="news-banner">
            <div class="top-text">
                기업소식
            </div>
        </div>
        <div class="contactus-area">
            <div class="contactus-title">
                <h1>뉴스 등록</h1>
            </div>
            <form class="form-area" method="post" action="/pages/new-result.php" enctype="multipart/form-data">
                <div class="input-area name">
                    <textarea name="newstitle" placeholder="제목"></textarea>
                </div>
                <div class="input-area email">
                    <input type='file' name='myfile' />
                </div>
                <div class="input-area phone">
                    <input type="text" class="phone-iuput" placeholder="기사 링크" name="newslink">
                </div>
                <div class="input-area message">
                    <textarea name="newstext" placeholder="기사 요약"></textarea>
                </div>
                <div class="form-submit">
                    <input class="submit-btn" type="submit" value="등록">
                </div>
            </form>
        </div>
    </div>
    <script>
    CKEDITOR.replace('content', {
        height: 800,
        filebrowserUploadUrl: "/pages/notice-upload.php"
    });
    </script>
    <?php include('../common/Footer.php') ?>
</body>

</html>