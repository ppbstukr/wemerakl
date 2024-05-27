<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" name="description" content="비즈니스 모델 플랫폼 솔루션에 대한 페이지입니다.">
    <title>메라클 BMPS</title>
    <?php include('../common/Header.php') ?>
    <?php include('../communication/floatmenu.php') ?>
</head>

<body>
    <?php include('../common/Nav.php') ?>
    <div class="bmps-banner">
        <div class="top-text">
            <h1>BMPS</h1>
            <h4>(Business Model Platform Solution)</h4>
        </div>
    </div>
    <div class="top_menu" style="margin-bottom: 50px;">
        <ul>
            <li><a href="RNDS.php">RNDS</a></li>
            <li><a href="GMAC.php">GMAC</a></li>
            <li><a href="IRDS.php">IRDS</a></li>
            <li><a href="BMPS.php">BMPS</a></li>
            <li><a href="eduService.php">교육 서비스</a></li>
            <li><a href="support.php">파트너링</a></li>
        </ul>
    </div>
    <div class="cont">
        <div class="business-area">

            <form action="Map_upload.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="csvFile">
                <input type="submit" value="Upload">
            </form>

            <table>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>소관부처</th>
                        <th>사업수행기관</th>
                        <th>지원분야</th>
                        <th>공고명</th>
                        <th>신청시작일</th>
                        <th>신청종료일</th>
                        <th>등록일자</th>
                        <th>공고상세보기</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                 $sql = "SELECT * FROM test_csv";
                 $result2 = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result2)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['test1'] ?></td>
                        <td><?php echo $row['test2'] ?></td>
                        <td><?php echo $row['test3'] ?></td>
                        <td><?php echo $row['test4'] ?></td>
                        <td><?php echo $row['test5'] ?></td>
                        <td><?php echo $row['test6'] ?></td>
                        <td><?php echo $row['test7'] ?></td>
                        <td><a href="<?php echo $row['test8'] ?>">더보기</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="bottom-img">
            <img src='/public/img/tbsp_is/20220930_bottom.jpg'>
        </div>
    </div>
    <?php include("../../common/Footer.php") ?>
</body>

</html>