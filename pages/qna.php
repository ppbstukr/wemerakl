<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
?>

<link rel="stylesheet" href="/public/css/qna.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../common/Header.php') ?>
</head>

<body>
    <?php include('../common/Nav.php') ?>
    <div class="container">
        <div class="notice-banner">
            <div class="top-text">
                소통공간
            </div>
        </div>
        <div class="notice-area">
            <div class="notice-content">
                <div class="notice-menu">
                    <div class="n_title">
                        <h1>소통공간</h1>
                    </div>
                    <ul>
                        <li><a href="../pages/notice.php">Notice</a></li>
                        <li><a href="../pages/article.php">Article</a></li>
                        <li><a href="../pages/New.php">News</a></li>
                        <li><a href="../pages/qna.php">Q&A</a></li>
                        <li><a href="../pages/faq.php?division=창업교육">FAQ</a></li>
                    </ul>
                </div>
                <div class="notice-board-area">
                    <div class="route">
                        <a href="/">Home</a> > <a href="../pages/notice.php">소통공간</a> > <a
                            href="../pages/qna.php">Q&A</a>
                    </div>
                    <div class="notice-board">
                        <ul>
                            <li class="no">No</li>
                            <li class="division">유형</li>
                            <li class="title">제목</li>
                            <li class="name">작성자</li>
                            <li class="date">작성일자</li>
                            <li class="answer">답변</li>
                            <!-- <li class="read">조회수</li> -->
                        </ul>
                        <?php
                        $sql = "SELECT * FROM qna_board";
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


                        $sql2 = "SELECT * FROM qna_board ORDER BY qna_id DESC LIMIT $page_start, $list";
                        $result = mysqli_query($conn, $sql2);

                        $idx = $total_notice - $page_start;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <ul>
                            <li class="no"><?php echo $idx; ?></li>
                            <li class="division"><?php echo $row['division']; ?></li>
                            <li class="title">
                                <a href="/pages/qna_pwd.php?qna_id=<?php echo $row['qna_id'] ?>">
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
                    <div class="page_num">
                        <?php
                        if ($page <= 1) {
                            // 이전페이지로 이동
                        } else {
                            $pre = $page - 1;
                            echo "<a href='/pages/notice?page=$pre'> < </a>";
                        }

                        for ($i = $block_start; $i <= $block_end; $i++) {
                            if ($page == $i) {
                                echo "<b>$i</b>";
                            } else {
                                echo "<a href='/pages/notice?page=$i'> $i </a>";
                            }
                        }

                        if ($page >= $total_page) {
                        } else {
                            $next = $page + 1;
                            echo "<a href='/pages/notice?page=$next'> > </a>";
                        }
                        ?>
                    </div>
                    <div class="notice-write">
                        <button class="new-notice" onclick="location.href='/pages/qna_write.php'">
                            <b>문의하기</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../common/Footer.php') ?>
</body>

</html>