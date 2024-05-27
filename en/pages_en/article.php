<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
?>

<link rel="stylesheet" href="/public/css/article.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MERAKL</title>
    <?php include('../common_en/Header.php') ?>
</head>

<body>
    <?php include('../common_en/Nav.php') ?>
    <div class="container">
        <div class="notice-banner">
            <div class="top-text">
                Communication Space
            </div>
        </div>
        <div class="notice-area">
            <div class="notice-content">
                <div class="notice-menu">
                    <div class="n_title">
                        <h1>Communication Space</h1>
                    </div>
                    <ul>
                        <li><a href="../pages_en/notice.php">Notice</a></li>
                        <li><a href="../pages_en/article.php">Article</a></li>
                        <li><a href="../pages_en/New.php">News</a></li>
                        <li><a href="../pages_en/qna.php">Q&A</a></li>
                        <li><a href="../pages_en/faq.php?division=창업교육">FAQ</a></li>
                    </ul>
                </div>
                <div class="notice-board-area">
                    <div class="route">
                        <a href="/">Home</a> > <a href="../pages_en/notice.php">Communication Space</a> > <a
                            href="../pages_en/article.php">Article</a>
                    </div>
                    <div class="notice-board">
                        <ul>
                            <li class="no">No</li>
                            <li class="title">Title</li>
                            <li class="name">Writer</li>
                            <li class="date">Date Created</li>
                            <li class="read">Views</li>
                        </ul>
                        <?php
                        $sql = "SELECT * FROM tbnotice WHERE division='2'";
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


                        $sql2 = "SELECT * FROM tbnotice WHERE division='2' ORDER BY id DESC LIMIT $page_start, $list";
                        $result = mysqli_query($conn, $sql2);

                        $idx = $total_notice - $page_start;
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <ul>
                            <li class="no"><?php echo $idx; ?></li>
                            <li class="title">
                                <a href="/pages_en/notice-detail.php?id=<?php echo $row['id'] ?>">
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
                                        echo $row['title'];
                                        ?>
                                </a>
                                <?php echo $img; ?>
                            </li>
                            <li class="name"><?php echo $row['name']; ?></li>
                            <li class="date">
                                <?php
                                    if ($timenow > $BaseDate2) {
                                        echo $BaseDate2;
                                    } else {
                                        echo $row['created_date'];
                                    }
                                    ?>
                            </li>
                            <li class="read"><?php echo $row['hit']; ?></li>
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
                            echo "<a href='/pages_en/article.php?page=$pre'> < </a>";
                        }

                        for ($i = $block_start; $i <= $block_end; $i++) {
                            if ($page == $i) {
                                echo "<b>$i</b>";
                            } else {
                                echo "<a href='/pages_en/article.php?page=$i'> $i </a>";
                            }
                        }

                        if ($page >= $total_page) {
                        } else {
                            $next = $page + 1;
                            echo "<a href='/pages_en/article.php?page=$next'> > </a>";
                        }
                        ?>
                    </div>
                    <div class="notice-write">
                        <?php
                        if (IS_NULL($_SESSION['adminId'])) {
                        ?>
                        <?php
                        } else {
                        ?>
                        <button class="new-notice" onclick="location.href='/pages_en/notice-editor.php'">
                            <b>Registration</b>
                        </button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../common_en/Footer.php') ?>
</body>

</html>