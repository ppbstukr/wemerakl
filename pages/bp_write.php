<link rel="stylesheet" href="/public/css/bp.css">
<link rel="stylesheet" href="/public/css/aboutus.css">
<link rel="stylesheet" href="/public/css/notice-editor.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script> -->
    <script src="http://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>

    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>

    <?php include('../common/Header.php') ?>
</head>

<body>
    <?php include('../common/Nav.php') ?>
    <div class="container">
        <div class="portfolio-banner">
            <div class="top-text">
                포트폴리오 추가
            </div>
        </div>
        <div class="editor-area">
        <form method="POST" action="/pages/bp_result.php" enctype="multipart/form-data">
            <table>
                <tbody>
                    <tr>
                        <th>제목</th>
                        <th>
                            <select title="게시판종류" name="division">
                                <option value='1'>창업교육</option>
                                <option value='2'>액셀러레이터</option>
                                <option value='3'>연구개발서비스</option>
                                <option value='4'>IR제작</option>
                                <option value='5'>콘텐츠</option>
                            </select>
                        </th>
                        <td><input type='text' name='bp_title'/></td>
                        <th><input type='file' name='bp_img'/></th>
                    </tr>
                    <tr>
                        <th>요약</th>
                        <th colspan="3">
                            <textarea id="bp_summary" name="bp_summary" placeholder="내용을 입력하세요."></textarea>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4"> 
                            <textarea id="editor" name="bp_text">내용을 입력하세요.</textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <input class='subbtn' type='submit' value='등록'/>
        </form>
            <!-- <div class="noticeWarp">
                <form method="POST" action="/pages/notice-result.php" enctype="multipart/form-data">
                    <input type='text' name='title'/>
                    <input type='text' name='name'/>
                    <input type='submit' value='등록'/>
                    <textarea id="editor" name="content">내용을 입력하세요.</textarea>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .then(editor => {
                                console.log(editor);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                </form>
                
            </div> -->
        </div>
    </div>
    <script>
 CKEDITOR.replace( 'bp_text', {
  height: 800,
  filebrowserUploadUrl: "/pages/notice-upload.php"
 });
</script>
    <?php include('../common/Footer.php') ?>
</body>

</html>