<link rel="stylesheet" href="/public/css/project.css">
<script src="/public/js/project.js" defer></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>프로젝트</title>
    <?php include('../common/Header.php') ?>
</head>

<body>
    <?php include('../common/Nav.php') ?>
    <?php include('../pages/project-timer.php') ?>
    <div class="container">
        <section class="project-banner-wrap">
            <div class="project-banner">
                <h2>2022 수행 및 모집 프로젝트</h2>
            </div>
        </section>
        <section class="project-wrap">
            <div class="edu-project-title">
                <h3>Accelerating Startup</h3>
                <h2>창업교육 프로그램</h2>
            </div>
            <div class="edu-content-wrap">
                <div class="edu-content">
                    <div class="program-wrap">


                        <div class="edu-program" onclick="location.href='/pages/project_detail.php'">
                            <div class="bg-edu">

                            </div>
                            <?php
                            $sql = "SELECT * FROM merakl_project WHERE project_type=1";
                            $result = mysqli_query($conn, $sql);

                            while ($row = mysqli_fetch_array($result)) {


                            ?>
                            <div class="edu-image">
                                <?php echo "<img src='../public/uploads/" . $row['project_img'] . "'>" ?></div>
                            <div class="edu-program-title">
                                <?php echo "<h3>" . $row['title'] . "</h3>" ?>
                                <?php echo "<h4>" . $row['cal_s'] . " ~ " . $row['cal_e'] . "</h4>" ?>
                                <span><?php timer($row['cal_s'], $row['cal_e']) ?></span>
                            </div>
                            <?php
                            }
                            ?>
                        </div>


                        <div class="program-bar"></div>
                        <div class="program-slide">
                            <button class="program-pre"></button>
                            <button class="program-next"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="project-wrap">
            <div class="rnd-project-title">
                <h3>Research & Development</h3>
                <h2>연구개발서비스</h2>
            </div>
            <div class="rnd-content">
                <div class="program-wrap">


                    <div class="rnd-program" onclick="location.href='/pages/project_detail.php'">
                        <div class="bg-edu">백그라운드</div>
                        <div class="rnd-image"><img src="../public/img/upload/1988134370.jpg"></div>
                        <div class="rnd-program-title">
                            <h3>부산 프리챔프 육성사업</h3>
                            <h4>2021.00.00~2021.00.00</h4>
                            <span><?php  ?></span>
                        </div>
                    </div>
                    <div class="rnd-program" onclick="location.href='/pages/project_detail.php'">
                        <div class="bg-edu">백그라운드</div>
                        <div class="rnd-image"><img src="../public/img/card/card_05.png"></div>
                        <div class="rnd-program-title">
                            <h3>경남콘텐츠코리아랩 평가용역</h3>
                            <h4>2021.00.00~2021.00.00</h4>
                            <span><?php  ?></span>
                        </div>
                    </div>

                    <div class="program-bar"></div>
                    <div class="program-slide">
                        <button class="program-pre"></button>
                        <button class="program-next"></button>
                    </div>
                </div>
            </div>
        </section>
        <?php
        if (IS_NULL($_SESSION['adminId'])) {
        ?>
        <?php
        } else {
        ?>
        <button class="new-notice" onclick="location.href='/pages/project_add.php'">
            <b>프로그램 등록</b>
        </button>
        <?php
        }
        ?>

    </div>
    <?php include('../common/Footer.php') ?>
</body>

</html>