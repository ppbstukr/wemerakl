<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
?>
<link rel="stylesheet" href="../../public/css/new.css">
<link rel="stylesheet" href="../../public/css/news.css">
<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8" name="description" content="메라클 뉴스관련 정보 페이지입니다.">
    <title>메라클 News</title>
    <?php include('../../common/Header.php');
    // include('floatmenu.php');
    ?>
    <?php include('./floatmenu.php') ?>
    <!-- jQuery 라이브러리 로드 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- 스타일 추가 -->
    <style>
    .card-img-top {
        object-fit: cover;
        height: 200px;
        width: 100%;
        cursor: pointer;
        /* 이미지 위에 마우스 커서를 변경하여 클릭 가능함을 나타냄 */
    }
    </style>

</head>

<body>
    <?php include('../../common/Nav.php') ?>

    <div class="co-banner">
        <div class="top-text">
            <h1>뉴스</h1>
        </div>
    </div>
    <div class="top_menu" style="margin-bottom: 50px;">
        <ul class="nav nav-pills justify-content-center">
            <li><a href="notice.php">공지사항</a></li>
            <li><a href="New.php">뉴스</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="Gallery.php">갤러리</a></li>
        </ul>
    </div>

    <!--                    todo:======================================================================================-->
    <div class="container mb-5">
        <?php

        $sql2 = "SELECT * FROM tbspnews_ko";
        $result2 = mysqli_query($conn, $sql2);
        $total_notice = mysqli_num_rows($result2);

        $list = 5;
        $block_cnt = 5;
        $block_num = ceil($page / $block_cnt);
        $block_start = (($block_num - 1) * $block_cnt) + 1;
        $block_end = $block_start + $block_cnt - 1;

        $total_page = ceil($total_notice / $list);
        if ($block_end > $total_page) {
            $block_end = $total_page;
        }
        $total_block = ceil($total_page / $block_cnt);
        $page_start = ($page - 1) * $list;
        $idx = $total_notice - $page_start;

        $sql = "SELECT * FROM tbspnews_ko ORDER BY id DESC LIMIT $page_start, $list";
        $result = mysqli_query($conn, $sql); ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $title2 = nl2br($row['newstitle']);
                $txt2 = nl2br($row['newstext']);
                $img = nl2br($row['img_link']);
            ?>
            <div class="col-4 mb-4">
                <div class="card shadow-sm" onclick="window.open('<?php echo $row['newslink']; ?>')">

                    <?php
                        echo '<img src="../../public/uploads/' . $img . '" alt="' . $title2 . '" class="card-img-top" style="object-fit: contain; object-position: center; width: auto; height: 300px">';

                        echo '<h5 class="m-lg-4">' . $title2 . '</h5>';
                        ?>

                    <div class="card-body">
                        <?php
                            echo '<p class="card-text" style="font-size: 1rem;">' . $txt2 . '</p>'
                            ?>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- <div class="bottom-img">
            <img src='../../public/img/tbsp_is/20220930_bottom.jpg'>
        </div> -->
    </div>
    <!--                    todo:======================================================================================-->
    <!--todo : 관리자 권한-->
    <?php
    if (IS_NULL($_SESSION['adminId'])) {
    ?>
    <?php
    } else {
    ?>
    <button class="newsadd" onclick="location.href='Newadd.php'">
        등록
    </button>
    <?php
    }
    ?>
    <!--todo : 관리자 권한-->



    <?php include('../../common/Footer.php') ?>
</body>

</html>