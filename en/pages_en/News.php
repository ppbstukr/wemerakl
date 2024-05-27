<link rel="stylesheet" href="/public/css/news.css">
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <?php include('../common_en/Header.php') ?>
</head>
<body>
    <?php include('../common_en/Nav.php')?>
    <div class="container">
        <div class="news-banner">
            <div class="top-text">
                기업소식
            </div>
        </div>
        <div class="news-area">
            <div class="news-title">
                <h1>MERAKL News</h1>
                <h3>메라클의 기업소식, 언론보도 등 다양한 소식을 전해드립니다.</h3>
            </div>
            <?php
                $sql = "SELECT * FROM tbspnews ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);

                while( $row = mysqli_fetch_array($result)){
                    ?>
                    <article class="news-content" onclick="window.open('<?php echo $row['newslink'];?>')">
                        <div class="news-date">
                            <?php echo $row['newsdate'];?>
                        </div>
                        <div class="news-name" style="font-size: 1.1rem !important;">
                            <?php echo $row['newstitle'];?>
                        </div>
                        <div class="news-text">
                            <?php echo $row['newstext'];?>
                        </div>
                    </article>
                    
                    <?php
                }
            ?>
            <?php
                if(IS_NULL($_SESSION['adminId'])){
            ?>
                <?php
                }else{
                ?>
            <button class="newsadd" onclick="location.href='/pages/Newadd.php'">
                등록
                <!-- <a href="/pages/notice-editor.php">등록</a> -->
            </button>
                <?php
                }
                ?>
        </div>
        
    </div>
    
    <?php include('../common_en/Footer.php')?>
</body>

</html>