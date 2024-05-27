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
        <!-- <div class="news-banner">
            <div class="top-text">
                기업소식
            </div>
        </div> -->
        <div class="contactus-area">
            <div class="contactus-title">
                <h1>프로젝트 등록</h1>
            </div>
            <form class="form-area" method="post" action="/pages/project_result.php" enctype="multipart/form-data">
                <div class="input-area name">
                    <input type="text" class="name-input" placeholder="제목" name="title">
                </div>
                <div>
                    <select title="문의유형" name="project_type">
                        <option value='1'>창업교육</option>
                        <option value='2'>R&D기획</option>
                    </select>
                </div>
                <div class="input-area email">
                    <input type='file' name='myfile' />
                </div>
                <div class="input-area phone">
                    <input type="text" class="phone-iuput" placeholder="기사 링크" name="project_link">
                </div>
                <div class="input-area message">
                    <textarea name="project_people" placeholder="기사 요약"></textarea>
                </div>
                <div>
                    시작일 : <input type="date" name="cal_s">
                    마감일 : <input type="date" name="cal_e">
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