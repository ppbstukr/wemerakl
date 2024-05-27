<!DOCTYPE html>
<meta charset="UTF-8">

<html lang="ko">

<head>
    <meta charset="UTF-8" name="description" content="비즈니스 모델 플랫폼 솔루션에 대한 페이지입니다.">
    <title>메라클 BMPS</title>
    <!-- jQuery 라이브러리 로드 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.iamport.kr/v1/iamport.js"></script>

    <?php include('../../common/Header.php') ?>
</head>

<body>
    <?php include("./sendSMS.php") ?>
    <!-- 화면에 QR 코드 이미지 표시 -->
    <div>
        <img src="<?php echo $imageDataUri ?>" alt="QR 코드">
    </div>

</body>

</html>