<link rel="stylesheet" href="/public/css/faq.css">
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
                            href="../pages_en/faq.php">FAQ</a>
                    </div>
                    <div class="faq-board">
                        <?php
                        $category = $_REQUEST['division'];
                        $sql2 = "SELECT * FROM faq_board";
                        $result2 = mysqli_query($conn, $sql2);
                        while ($row2 = mysqli_fetch_array($result2)) {
                            $division = $row2['faq_division'];
                            $list[] = $row2;
                        }
                        function filtered($val)
                        {
                            return $val['faq_division'] == $_REQUEST['division'];
                        }

                        if (is_null($category)) {
                            $fdivision = $division;
                            $flist = $list;
                        } else {
                            $fdivision = array_filter($division, "filtered");
                            $flist = array_filter($list, "filtered");
                        }
                        ?>
                        <div class="faq-menu">
                            <ul>
                                <li>
                                    <h3><a href="/pages_en/faq.php?division=창업교육 "
                                            class="<?php $category == '창업교육' ? print('active') : '' ?>">Start-up
                                            Education</a></h3>
                                </li>
                                <li>
                                    <h3><a href="/pages_en/faq.php?division=사업계획서"
                                            class="<?php $category == '사업계획서' ? print('active') : '' ?>">Business
                                            Plan</a></h3>
                                </li>
                                <li>
                                    <h3><a href="/pages_en/faq.php?division=RnD"
                                            class="<?php $category == 'RnD' ? print('active') : '' ?>">R&D Planning</a>
                                    </h3>
                                </li>
                                <li>
                                    <h3><a href="/pages_en/faq.php?division=IR제작"
                                            class="<?php $category == 'IR제작' ? print('active') : '' ?>">IR Works</a>
                                    </h3>
                                </li>
                            </ul>
                        </div>
                        <ul class="faq-list">
                            <?php
                            // $sql = "SELECT * FROM faq_board";
                            // $result = mysqli_query($conn, $sql);
                            // while($row = mysqli_fetch_array($result)){
                            foreach ($flist as $key => $value) {
                            ?>
                            <li>
                                <details>
                                    <summary class="question">
                                        <h2>Q. <?php echo $value['faq_title'] ?></h2>
                                        <i class="fas fa-chevron-down arrow"></i>
                                        <i class="fas fa-chevron-up arrow-up"></i>
                                    </summary>
                                    <div class="faq_text">
                                        <p><?php echo $value['faq_content'] ?></p>
                                    </div>
                                </details>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="notice-write">
                        <?php
                        if (IS_NULL($_SESSION['adminId'])) {
                        ?>
                        <?php
                        } else {
                        ?>
                        <button class="new-notice" onclick="location.href='/pages_en/faq_write.php'">
                            <b>질문추가</b>
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