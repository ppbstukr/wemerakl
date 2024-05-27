<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
?>

<link rel="stylesheet" href="/public/css/new.css">
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
                <div class="news-board-area">
                    <div class="route">
                        <a href="/">Home</a> > <a href="../pages_en/notice.php">Communication Space</a> > <a
                            href="../pages_en/New.php">News</a>
                    </div>
                    <div class="news-title">
                        <h1>MERAKL News</h1>
                        <h3>We deliver various news such as MERAKL's corporate news and media reports</h3>
                    </div>
                    <?php
                    $sql2 = "SELECT * FROM tbspnews";
                    $result2 = mysqli_query($conn, $sql2);
                    $total_notice = mysqli_num_rows($result2);

                    $list = 5;
                    $block_cnt = 5;
                    $block_num = ceil($page / $block_cnt);
                    $block_start = (($block_num - 1) * $block_cnt) + 1;
                    $block_end = $blcok_start + $block_cnt - 1;

                    $total_page = ceil($total_notice / $list);
                    if ($block_end > $total_page) {
                        $block_end = $total_page;
                    }
                    $total_block = ceil($total_page / $block_cnt);
                    $page_start = ($page - 1) * $list;
                    $idx = $total_notice - $page_start;

                    $sql = "SELECT * FROM tbspnews ORDER BY id DESC LIMIT $page_start, $list";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_array($result)) {
                        $title2 = nl2br($row['newstitle']);
                        $txt2 = nl2br($row['newstext']);
                    ?>
                    <article style="height: 300px;" class="news-content"
                        onclick="window.open('<?php echo $row['newslink']; ?>')">
                        <div style="float: left;">
                            <div class="news-date">
                                <?php echo $row['created_date']; ?>
                            </div>
                            <div class="news-name" style="font-size: 1.1rem !important;">
                                <?php echo $title2; ?>
                            </div>
                            <div class="news-text">
                                <?php echo $txt2; ?>
                            </div>
                        </div>
                        <div class="news-img" style="float: right;">
                            <?php echo "<img width='auto' height='100%' src =../public/uploads/" . $row['img_link'] . ">"; ?>
                        </div>
                    </article>
                    <div class="news_page">
                        <?php
                            if ($page <= 1) {
                                // 이전페이지로 이동
                            } else {
                                $pre = $page - 1;
                                echo "<a href='/pages_en/new.php?page=$pre'> < </a>";
                            }

                            for ($i = $block_start; $i <= $block_end; $i++) {
                                if ($page == $i) {
                                    echo "<b>$i</b>";
                                } else {
                                    echo "<a href='/pages_en/new.php?page=$i'> $i </a>";
                                }
                            }

                            if ($page >= $total_page) {
                            } else {
                                $next = $page + 1;
                                echo "<a href='/pages_en/new.php?page=$next'> > </a>";
                            }
                            ?>
                    </div>

                    <?php
                    }
                    ?>
                    <?php
                    if (IS_NULL($_SESSION['adminId'])) {
                    ?>
                    <?php
                    } else {
                    ?>
                    <button class="newsadd" onclick="location.href='/pages_en/Newadd.php'">
                        등록
                    </button>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('../common_en/Footer.php') ?>
</body>

</html>