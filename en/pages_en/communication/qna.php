<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL</title>
    <?php include('../../common_en/Header.php');
    include('floatmenu.php');?>
    <link rel="stylesheet" href="../../public/css/qna.css">
    <link rel="stylesheet" href="../../public/css/aboutus.css">

</head>

<body>
    <?php include('../../common_en/Nav.php') ?>

    <div class="co-banner">
        <div class="top-text">
            Communication Space
        </div>
    </div>

    <div class="top_menu" style="margin-bottom: 50px;">
        <ul class="nav nav-pills justify-content-center">
            <li><a href="New.php">NEWS</a></li>
            <li><a href="qna.php">Q&A</a></li>
            <li><a href="Gallery.php">GALLERY</a></li>
        </ul>
    </div>

    <div class="notice-area">
        <div class="notice-content">
            <div class="notice-board-area">

                <div class="notice-board">
                    <ul>
                        <li class="no">No</li>
                        <li class="division">Category</li>
                        <li class="title">Title</li>
                        <li class="name">Writer</li>
                        <li class="date">Date Created</li>
                        <li class="answer">Answer</li>
                        <!-- <li class="read">조회수</li> -->
                    </ul>
                    <?php
                        $sql = "SELECT * FROM qna_en";
                        $result2 = mysqli_query($conn, $sql);
                        $total_notice = mysqli_num_rows($result2);

                        $list = 10;
                        $block_cnt = 10;
                        $block_num = ceil($page / $block_cnt);
                        $block_start = (($block_num - 1) * $block_cnt) + 1;
                        $block_end = $blcok_start + $block_cnt - 1;

                        $total_page = ceil($total_notice / $list);
                        if ($block_end > $total_page) {
                            $block_end = $total_page;
                        }
                        $total_block = ceil($total_page / $block_cnt);
                        $page_start = ($page - 1) * $list;


                        $sql2 = "SELECT * FROM qna_en ORDER BY qna_id DESC LIMIT $page_start, $list";
                        $result = mysqli_query($conn, $sql2);

                        $idx = $total_notice - $page_start;
                        while ($row = mysqli_fetch_array($result2)) {
                        ?>
                    <ul>
                        <li class="no"><?php echo $idx; ?></li>
                        <li class="division"><?php echo $row['division']; ?></li>
                        <li class="title">
                            <a href="./qna_pwd.php?qna_id=<?php echo $row['qna_id'] ?>">
                                <?php
                                        $boardtime = $row['created_date'];
                                        $oldDate = strtotime($boardtime . '+7 days');
                                        $oldDate2 = strtotime($boardtime);
                                        $BaseDate = date('Y-m-d', $oldDate);
                                        $BaseDate2 = date('Y-m-d', $oldDate2);
                                        $timenow = date("Y-m-d");
                                        if ($timenow < $BaseDate) {
                                            $img = "<img src='/public/img/new.png' alt='new' title='new'/>";
                                        } else {
                                            $img = "";
                                        }
                                        echo $row['qna_title'];
                                        ?>
                            </a>
                            <?php echo $img; ?>
                        </li>
                        <li class="name"><?php echo preg_replace('/.(?!..)/u', '*', $row['user_name']); ?></li>
                        <li class="date">
                            <?php
                                    if ($timenow > $BaseDate2) {
                                        echo $BaseDate2;
                                    } else {
                                        echo $row['created_date'];
                                    }
                                    ?>
                        </li>
                        <li class="answer"><?php echo $row['answer']; ?></li>
                    </ul>
                    <?php
                            $idx--;
                        }
                        ?>
                </div>
                <div class="notice-write">
                    <button class="new-notice" onclick="location.href='./qna_write.php'">
                        <b>Contact</b>
                    </button>
                </div>
                <div class="page_num">
                    <?php
                        if ($page <= 1) {
                            // 이전페이지로 이동
                        } else {
                            $pre = $page - 1;
                            echo "<a href='/pages_en/notice?page=$pre'> < </a>";
                        }

                        for ($i = $block_start; $i <= $block_end; $i++) {
                            if ($page == $i) {
                                echo "<b>$i</b>";
                            } else {
                                echo "<a href='/pages_en/notice?page=$i'> $i </a>";
                            }
                        }

                        if ($page >= $total_page) {
                        } else {
                            $next = $page + 1;
                            echo "<a href='/pages_en/notice?page=$next'> > </a>";
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="bottom-img" style="width: 60rem!important;">
            <img src='../../public/img/tbsp_is/20220930_bottom.jpg'>
        </div>
    </div>

    <?php include('../../common_en/Footer.php') ?>





</body>

</html>