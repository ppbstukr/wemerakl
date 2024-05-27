<link rel="stylesheet" href="../../public/css/admin.css">
<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <?php include('../../common_en/Header.php') ?>
</head>

<body>
    <?php
    if (IS_NULL($_SESSION['adminId'])) {
        echo "<script>alert('접근권한이 없습니다.');history.back();</script>";
    ?>
    <?php
    } else {
    ?>
    <?php include('../../common_en/Nav.php') ?>
    <div class="container">
        <div class="top-banner">
            <div class="top-text">
                관리자 페이지
            </div>
        </div>
        <div class="admin-area">
            <div class="logout">
                <a href="/en/pages_en/admin/logout.php">
                    로그아웃
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>성함</th>
                        <th>이메일</th>
                        <th>연락처</th>
                        <th>내용</th>
                        <th>문의일자</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $sql = "SELECT * FROM merakl_contact";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);

                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                    <tr>
                        <td><?php echo $row['contact_name']; ?></td>
                        <td><?php echo $row['contact_email']; ?></td>
                        <td><?php echo $row['contact_phone']; ?></td>
                        <td><?php echo $row['contact_content']; ?></td>
                        <td><?php echo $row['created_date']; ?></td>
                    </tr>
                    <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include('../../common_en/Footer.php') ?>

    <?php } ?>
</body>

</html>