<link rel="stylesheet" href="/public/css/notice-detail.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Merakl</title>
    <?php include('../common_en/Header.php') ?>
</head>

<body>
    <?php include('../common_en/Nav.php') ?>
    <div class="container">
        <div class="noticeWarp">
            <?php
            $id = $_GET['id'];
            //  조회수 증가
            $query = "UPDATE bp_board
              SET
              hit = hit+1
              WHERE id = '" . $id . "'; ";
            $hit = mysqli_query($conn, $query);
            $sql = "SELECT * FROM bp_board WHERE id='" . $id . "'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>
            <div class="notice_route">
                Portfolio - details
            </div>
            <div class="notice_title">
                <?php echo $row['bp_title']; ?>
            </div>
            <div class="author">
                <div class="write">Merakl Admin</div>
                <div class="date"><?php echo $row['created_date']; ?></div>
                <div class="hit">views <?php echo $row['hit']; ?></div>
            </div>
            <div class="notice_content">
                <?php echo $row['bp_text']; ?>
            </div>
            <div class="list_area">
                <!-- 다음글 -->
                <?php
                $sql = "SELECT * FROM bp_board WHERE id='" . $id . "'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                if ($row['division'] == '1') {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id + 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '1') {
                ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'">
                    <i class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?>
                </div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num + 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '1') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else if ($row['division'] == '2') {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id + 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '2') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num + 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '2') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else if ($row['division'] == '3') {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id + 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '3') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num + 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '3') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else if ($row['division'] == '4') {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id + 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '4') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num + 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '4') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id + 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '5') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num + 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '5') {
                        ?> <div class="list_next"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-up"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                }
                ?>
                <?php
                $sql = "SELECT * FROM bp_board WHERE id='" . $id . "'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                if ($row['division'] == '1') {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id - 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '1') {
                ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'">
                    <i class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?>
                </div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num - 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '1') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else if ($row['division'] == '2') {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id - 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '2') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num - 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '2') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else if ($row['division'] == '3') {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id - 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '3') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num - 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '3') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else if ($row['division'] == '4') {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id - 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '4') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num - 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '4') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                } else {
                    $num = $id;
                    $sql = "SELECT * FROM bp_board WHERE id='" . ($id - 1) . "'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    if ($row['division'] == '5') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php
                    } else {
                        for ($i = 0; $i < 100; $i++) {
                            $num = $num - 1;
                            $sql = "SELECT * FROM bp_board WHERE id='" . $num . "'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($result);
                            if ($row['division'] == '5') {
                        ?> <div class="list_prev"
                    onclick="location.href='/pages_en/bp_detail.php?id=<?php echo $row['id']; ?>'"><i
                        class="fas fa-angle-down"></i><?php echo $row['bp_title']; ?></div>
                <?php break;
                            }
                        }
                    }
                }
                ?>
            </div>
            <div class="menu">
                <?php
                $sql = "SELECT * FROM bp_board WHERE id='" . $id . "'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <button class="notice_list" onclick="location.href='/pages_en/Bp.php?division=1'">
                    List
                </button>
                <?php
                if (IS_NULL($_SESSION['adminId'])) {
                ?>
                <?php
                } else {
                ?>
                <button class="notice_list" onclick="location.href='/pages_en/bp_update.php?id=<?php echo $id; ?>'">
                    Update
                </button>
                <button class="notice_list" onclick="location.href='/pages_en/bp_delete.php?id=<?php echo $id; ?>'">
                    Delete
                </button>
                <?php }
                ?>
            </div>
        </div>
    </div>

    <?php include('../common_en/Footer.php') ?>
</body>

</html>