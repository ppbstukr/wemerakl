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
    <meta charset="UTF-8" name="description" content="메라클 행사 사진 소개 페이지입니다.">
    <title>메라클 행사 사진</title>
    <?php include('../../common/Header.php');
    //include('floatmenu.php');
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

    .page_num {
        margin-top: 40px;
        position: relative;
        width: 100%;
        bottom: 2rem;
        text-align: center;
        letter-spacing: 5px;
    }

    .modal {
        display: none;
        /* 모달창을 처음에는 숨김 */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;

        /* 모달창 배경색 */
    }

    .modal-dialog {
        height: 80%;
        width: 60%;
        max-width: none !important;
        margin: 0 auto;
        margin-top: 5%
    }

    .modal-content {
        margin: auto;
        /*display: block;*/
        width: 100%;
        height: 100%;
        /*object-fit: contain;*/
    }

    .modal-img {
        margin: auto;
        display: block;
        max-width: 100%;
        max-height: 100%;
    }

    .active {
        background-color: rgb(100, 77, 157);
    }
    </style>

    <!-- JavaScript 추가 -->
    <script>
    $(document).ready(function() {
        // 이미지 클릭 이벤트
        $('.card-img-top').click(function() {
            // 모달창에 이미지를 표시
            $('.modal-img').attr('src', $(this).attr('src'));
            $('#modalAlt').attr('alt', $(this).attr('alt'));

            // 모달창 표시
            $('.modal').show();
        });


        // 모달창 닫기 이벤트
        $('.modal').click(function() {
            $(this).hide();
        });
    });
    </script>

</head>

<body>
    <?php include('../../common/Nav.php') ?>

    <div class="co-banner">
        <div class="top-text">
            <h1>갤러리</h1>
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
<div class="container">
    
    <div class="cont mb-5 gall_wrap">
        <!--                    todo:======================================================================================-->
        <!--<div class="container">-->
        <?php

        $sql2 = "SELECT * FROM tbl_gal";
        $result2 = mysqli_query($conn, $sql2);
        $total_notice = mysqli_num_rows($result2);

        $list = 9;
        $block_cnt = 9;
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

        $sql = "SELECT * FROM tbl_gal ORDER BY gal_id DESC LIMIT $page_start, $list";
        $result = mysqli_query($conn, $sql); ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 gall_list"
            style=" width: 100% !important;">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $title2 = nl2br($row['gal_title_ko']);
                $txt2 = nl2br($row['gal_def_ko']);
                $img = nl2br($row['gal_img']);
            ?>
            <div class="mb-4 m-4 gall" >
                <div class="card shadow-sm">
                    <?php
                        echo '<img src="../../public/uploads/' . $img . '" alt="' . $title2 . '" class="card-img-top" style="object-fit: cover; object-position: center; width: auto; height: 300px">';
                        echo '<text class="m-lg-4" style="font-weight: bold; font-size: 1rem">' . $title2 . '</text>';
                        ?>

                    <div class="card-body">
                        <?php
                            echo '<p class="card-text">' . $txt2 . '</p>'
                            ?>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="page_num">
            <?php
            if ($page <= 1) {
                // 이전페이지로 이동
            } else {
                $pre = $page - 1;
                echo "<a href='Gallery.php?page=$pre'> < </a>";
            }

            for ($i = $block_start; $i <= $block_end; $i++) {
                if ($page == $i) {
                    echo "<b>$i</b>";
                } else {
                    //                echo "<a href='/pages_en/notice?page=$i'> $i </a>";
                    echo "<a href='Gallery.php?page=$i'> $i </a>";
                }
            }

            if ($page >= $total_page) {
            } else {
                $next = $page + 1;
                echo "<a href='Gallery.php?page=$next'> > </a>";
            }
            ?>
        </div>
        <!--todo : 관리자 권한-->
        <?php
        if (IS_NULL($_SESSION['adminId'])) {
        ?>
        <?php
        } else {
        ?>
        <button class="newsadd" onclick="location.href='GalleryAdd.php'">
            등록
        </button>
        <?php
        }
        ?>
    </div>
</div>
    <!-- <div class="container">
        <div class="bottom-img">
            <img src='../../public/img/tbsp_is/20220930_bottom.jpg'>
        </div>
    </div> -->
    <!--                    todo:======================================================================================-->

    <!--todo : 관리자 권한-->
    <div class="modal" tabindex="-1" role="dialog" style="background-color: rgba(17,17,17,0.6);">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img class="modal-img" src="" alt="" id="modalAlt">

                </div>
            </div>
        </div>
    </div>


    <?php include('../../common/Footer.php') ?>
</body>

</html>