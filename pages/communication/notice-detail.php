<!-- <link rel="stylesheet" href="/public/css/notice.css"> -->
<link rel="stylesheet" href="/public/css/notice-detail.css">
<link rel="stylesheet" href="../../public/css/qna.css">
<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클</title>
    <?php include('../../common/Header.php') ?>
</head>

<body>
    <?php include('../../common/Nav.php') ?>
    <div class="co-banner">
        <div class="top-text">
            소통공간
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
        <div class="noticeWarp">
            <?php
            $id = $_GET['id'];
            //  조회수 증가
            $query = "UPDATE tbnotice
             SET
             hit = hit+1
             WHERE id = '" . $id . "'; ";
            $hit = mysqli_query($conn, $query);
            $sql = "SELECT * FROM tbnotice WHERE id='" . $id . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>


            <div class="notice_title">
                <?php echo $row['title']; ?>
            </div>
            <div class="qna_area">
                <ul class="qna_contents">
                    <li class="user m-auto">작성자</li>
                    <li class="user_name m-auto" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['name']; ?></li>
                    <li class="crt m-auto">작성일</li>
                    <li class="created m-auto" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php echo $row['created_date']; ?></li>
                    <li class="user m-auto">첨부파일</li>
                    <li class="user_name m-auto" style="border-top:1px solid rgba(128,128,128,0.2)">
                        <?php if (empty($row['file'])) {
            } else {
            ?><div class="m-auto" style="cursor:pointer; font-size:10px;" onclick="location.href='./file_download.php?file=<?php echo $row['file']; ?>'">
                            <?php echo $row['file']; ?>
                            <i class="fas fa-download"></i>
                        </div><?php
                    } ?></li>
                </ul>
            </div>
            <div class="qna_text">
                <?php echo nl2br($row['content']); ?>
            </div>
            <div class="list_area">
                <!-- 다음글 -->
                <?php
                if ($row['division'] == '1') {
                    $num = $id;
                    $sql = "SELECT * FROM tbnotice WHERE id='" . ($id + 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '1') {
                ?> <div class="list_next"
                    onclick="location.href='/pages/communication/notice-detail.php?id=<?php echo $row['id']; ?>'">
                    <i class="fas fa-angle-up"></i><?php echo $row['title']; ?>
                </div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num + 1;
                            $sql = "SELECT * FROM tbnotice WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '1') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages/communication/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else {
                    $num = $id;
                    $sql = "SELECT * FROM tbnotice WHERE id='" . ($id + 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '2') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages/communication/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num + 1;
                            $sql = "SELECT * FROM tbnotice WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '2') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages/communication/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['title']; ?></div>
                <?php break;
                            }
                        }
                    }
                }
                ?>
                <?php
                $sql = "SELECT * FROM tbnotice WHERE id='" . $id . "'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                if ($row['division'] == '1') {
                    $num = $id;
                    $sql = "SELECT * FROM tbnotice WHERE id='" . ($id - 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '1') {
                ?> <div class="list_prev"
                    onclick="location.href='/pages/communication/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num - 1;
                            $sql = "SELECT * FROM tbnotice WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '1') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages/communication/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else {
                    $num = $id;
                    $sql = "SELECT * FROM tbnotice WHERE id='" . ($id - 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '2') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages/communication/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num - 1;
                            $sql = "SELECT * FROM tbnotice WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '2') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages/communication/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['title']; ?></div>
                <?php break;
                            }
                        }
                    }
                }
                ?>
            </div>
            <div class="menu">
                <?php
                $sql = "SELECT * FROM tbnotice WHERE id='" . $id . "'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                if ($row['division'] == '1') {
                ?><button class="notice_list" onclick="location.href='/pages/communication/notice.php'">
                    <?php
                } else {
                    ?>
                    <button class="notice_list" onclick="location.href='/pages/communication/article.php'">
                        <?php } ?>
                        목록
                    </button>
                    <?php
                        if (IS_NULL($_SESSION['adminId'])) {
                        ?>
                    <?php
                        } else {
                        ?>
                    <button class="notice_list"
                        onclick="location.href='/pages/communication/notice-update.php?id=<?php echo $id; ?>'">
                        수정
                    </button>
                    <button class="notice_list"
                        onclick="location.href='/pages/communication/notice-delete.php?id=<?php echo $id; ?>'">
                        삭제
                    </button>
                    <?php }
                        ?>
            </div>
        </div>
    </div>

    <?php include('../../common/Footer.php') ?>
</body>

</html>