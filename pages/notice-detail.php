<!-- <link rel="stylesheet" href="/public/css/notice.css"> -->
<link rel="stylesheet" href="/public/css/notice-detail.css">
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
            <div class="notice_route">
                <?php if ($row['division'] == '1') {
                    echo '소통공간 - 공지사항';
                } else {
                    echo '소통공간 - Article';
                }
                ?>
            </div>
            <div class="notice_title">
                <?php echo $row['title']; ?>
            </div>
            <div class="author">
                <div class="write"><?php echo $row['name']; ?></div>
                <div class="date"><?php echo $row['created_date']; ?></div>
                <div class="hit">조회수 <?php echo $row['hit']; ?></div>
            </div>
            <?php if (empty($row['file'])) {
            } else {
            ?><div class="file" onclick="location.href='./file_download.php?file=<?php echo $row['file']; ?>'">
                <?php echo $row['file']; ?>
                <i class="fas fa-download"></i>
            </div><?php
                    } ?>
            <div class="notice_content">
                <?php echo $row['content']; ?>
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
                    onclick="location.href='/pages/notice-detail.php?id=<?php echo $row['id']; ?>'">
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
                    onclick="location.href='/pages/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                ?><button class="notice_list" onclick="location.href='/pages/notice.php'">
                    <?php
                } else {
                    ?>
                    <button class="notice_list" onclick="location.href='/pages/article.php'">
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
                        onclick="location.href='/pages/notice-update.php?id=<?php echo $id; ?>'">
                        수정
                    </button>
                    <button class="notice_list"
                        onclick="location.href='/pages/notice-delete.php?id=<?php echo $id; ?>'">
                        삭제
                    </button>
                    <?php }
                        ?>
            </div>
        </div>
    </div>

    <?php include('../common/Footer.php') ?>
</body>

</html>