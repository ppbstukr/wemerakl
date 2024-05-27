<link rel="stylesheet" href="/public/css/notice.css">
<link rel="stylesheet" href="/public/css/notice-editor.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script> -->
    <script src="http://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>

    <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script>
    
    <?php include('../../common/Header.php') ?>
</head>

<body>
    <?php include('../../common/Nav.php') ?>
    <div class="container">
        <div class="top-banner">
            <div class="top-text">
                공지사항
            </div>
        </div>
        <?php
        $id = $_GET['id'];
        $qry = "SELECT * FROM tbnotice WHERE id = $id";
        $result = mysqli_query($conn, $qry);
        $row = mysqli_fetch_array($result);
        ?>
        <div class="editor-area">
        <form method="POST" action="/pages/communication/notice-update-result.php?id=<?php echo $id; ?>"
                    enctype="multipart/form-data">
                <table>
                    <tbody>
                        <tr>
                            <th>제목</th>
                            <th>
                                <select title="게시판종류" name="division">
                                    <option value='1'>Notice</option>
                                    <option value='2'>Article</option>
                                </select>
                            </th>
                            <td><input type='text' name='title' placeholder="제목을 입력하세요." value="<?php echo $row['title']; ?>"/></td>
                            <th><input type='file' name='myfile' value="<?php echo $row['file']; ?>" /></th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <textarea cols="150" id="editor" name="content" placeholder="내용을 입력하세요"><?php echo $row['content']; ?></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input class='subbtn' type='submit' value='등록' />
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
    CKEDITOR.replace('content', {
        height: 800,
        filebrowserUploadUrl: "/pages/communication/notice-upload.php"
    });
    </script>
    <?php include('../../common/Footer.php') ?>
</body>

</html>