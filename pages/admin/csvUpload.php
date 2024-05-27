<link rel="stylesheet" href="../../public/css/aboutus.css">
<link rel="stylesheet" href="../../public/css/qna.css">
<meta charset="UTF-8">

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" name="description" content="비즈니스 모델 플랫폼 솔루션에 대한 페이지입니다.">
    <title>메라클 BMPS</title>
    <!-- jQuery 라이브러리 로드 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.iamport.kr/v1/iamport.js"></script>
    <?php include('../../common/Header.php') ?>
    <?php include('../../communication/floatmenu.php') ?>
    <link rel="stylesheet" href="./Map.css" />
</head>


<body>
    <?php include('../../common/Nav.php') ?>

    <div class="d-flex justify-content-center align-items-center" style="width:100vw; height:100vh;">
        <form id="uploadForm" enctype="multipart/form-data">
            <input type="file" name="csvFile" style="border:1px solid black;" />
            <button type="button" onclick="uploadFile()">공고업로드하기</button>
        </form>
    </div>

    <?php include("../../common/Footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.iamport.kr/v1/iamport.js"></script>
    <script>
    function uploadFile() {
        var formData = new FormData($('#uploadForm')[0]);

        $.ajax({
            url: './Map_upload.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                alert(res);
            },
            error: function(xhr, status, error) {
                console.log('Error:', status, error);
                alert('오류가 발생했습니다');
            }
        });
    }
    </script>
</body>



</html>