<!-- <link rel="stylesheet" href="/public/css/notice.css"> -->
<link rel="stylesheet" href="/public/css/notice-detail.css">
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
                    echo 'Notice';
                } else {
                    echo 'Article';
                }
                ?>
            </div>
            <div class="notice_title">
                <?php echo $row['title']; ?>
            </div>
            <div class="author">
                <div class="write"><?php echo $row['name']; ?></div>
                <div class="date"><?php echo $row['created_date']; ?></div>
                <div class="hit">Views <?php echo $row['hit']; ?></div>
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
                    onclick="location.href='/pages_en/notice-detail.php?id=<?php echo $row['id']; ?>'">
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
                    onclick="location.href='/pages_en/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages_en/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages_en/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages_en/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages_en/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages_en/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                    onclick="location.href='/pages_en/notice-detail.php?id=<?php echo $row['id']; ?>'"><i
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
                ?><button class="notice_list" onclick="location.href='/pages_en/notice.php'">
                    <?php
                } else {
                    ?>
                    <button class="notice_list" onclick="location.href='/pages_en/article.php'">
                        <?php } ?>
                        List
                    </button>
                    <?php
                        if (IS_NULL($_SESSION['adminId'])) {
                        ?>
                    <?php
                        } else {
                        ?>
                    <button class="notice_list"
                        onclick="location.href='/pages_en/notice-update.php?id=<?php echo $id; ?>'">
                        Update
                    </button>
                    <button class="notice_list"
                        onclick="location.href='/pages_en/notice-delete.php?id=<?php echo $id; ?>'">
                        Remove
                    </button>
                    <?php }
                        ?>
            </div>
        </div>
    </div>

    <?php include('../common_en/Footer.php') ?>
</body>

</html>