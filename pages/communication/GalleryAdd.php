<link rel="stylesheet" href="../../public/css/news.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <?php include('../../common/Header.php') ?>
</head>

<body>
    <?php include('../../common/Nav.php') ?>
    <div class="container">
        <div class="news-banner">
            <div class="top-text">
                기업소식
            </div>
        </div>
        <div class="contactus-area">
            <div class="contactus-title">
                <h1>갤러리 등록</h1>
            </div>
            <form class="form-area" method="post" action="../communication/gal-result.php"
                enctype="multipart/form-data">
                <div class="input-area name">
                    <textarea name="title_ko" placeholder="ko제목"></textarea>
                </div>
                <div class="input-area name">
                    <textarea name="title_en" placeholder="en제목"></textarea>
                </div>
                <div class="input-area email">
                    <input type='file' name='myfile' />
                </div>

                <div class="input-area message">
                    <textarea name="def_ko" placeholder="ko기사 요약"></textarea>
                </div>
                <div class="input-area message">
                    <textarea name="def_en" placeholder="en기사 요약"></textarea>
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
        filebrowserUploadUrl: "gal-upload.php"
    });
    </script>
    <?php include('../../common/Footer.php') ?>
</body>

</html>