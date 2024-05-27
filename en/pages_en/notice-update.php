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

    <?php include('../common_en/Header.php') ?>
</head>

<body>
    <?php include('../common_en/Nav.php') ?>
    <div class="container">
        <div class="top-banner">
            <div class="top-text">
                공지사항
            </div>
        </div>

        <div class="editor-area">
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM tbnotice WHERE id='" . $id . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>
            <div class="editor-area">
                <form method="POST" action="/pages/notice-update-result.php?id=<?php echo $id; ?>"
                    enctype="multipart/form-data">
                    <table>
                        <tbody>
                            <tr>
                                <th>제목</th>
                                <td><input type='text' name='title' value="<?php echo $row['title']; ?>" /></td>
                                <th><?php echo $row['file']; ?><input type='file' name='myfile' /></th>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <textarea id="editor" name="content"><?php echo $row['content']; ?></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input class='subbtn' type='submit' value='등록' />
                </form>
                <!-- <form method="POST" action="/pages/notice-update-result.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
            <table>
                <tbody>
                    <tr>
                        <th>제목</th>
                        <td><input type='text' name='title' value="<?php echo $row['title']; ?>"/></td>
                        <th><?php echo $row['file'] ?><input type='file' name='myfile'/></th>
                    </tr>
                    <tr>
                        <td colspan="4"> 
                            <textarea id="editor" name="content"><?php echo $row['content']; ?></textarea>
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
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type='submit' value='등록'/>
        </form> -->
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