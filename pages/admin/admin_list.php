<link rel="stylesheet" href="../../public/css/admin.css">
<link rel="stylesheet" href="../../public/css/aboutus.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <?php include('../../common/Header.php') ?>
    <style>
    th {
        text-align: center;
    }
    </style>
    <script>
    $(document).ready(function() {
        $(".update-status").click(function() {
            var $button = $(this);
            var $select = $button.siblings(".meeting-status");
            var meetingId = $select.data("id");
            var meetStat = $select.val();

            $.ajax({
                url: './updateStatus.php',
                type: 'POST',
                data: {
                    id: meetingId,
                    meetStat: meetStat
                },
                success: function(response) {
                    // 응답을 확인하고 성공 또는 실패 메시지를 표시합니다.
                    alert(response);
                }
            });
        });
    });
    </script>
</head>

<body>
    <?php
    if (IS_NULL($_SESSION['adminId'])) {
        echo "<script>alert('접근권한이 없습니다.');history.back();</script>";
    ?>
    <?php
    } else {
    ?>
    <?php include('../../common/Nav.php') ?>
    <div class="container">
        <div class="top-banner">
            <div class="top-text">
                상담 신청자 목록
            </div>
        </div>
        <div class="admin-area">
            <div class="logout">
                <a class="btn btn-danger" href="/pages/admin/logout.php">
                    로그아웃
                </a>
                <a class="btn btn-primary" href="/pages/admin/down.php">
                    csv다운
                </a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>결제 아이디</th>
                        <th>결제 금액</th>
                        <th>상품명</th>

                        <th>구매자명</th>
                        <th>구매자 연락처</th>
                        <th>구매자 이메일</th>

                        <th>구매자 회사명</th>
                        <th>희망 신청일</th>
                        <th>희망 신청시</th>

                        <th>결제 상태</th>
                        <th>결제 일시</th>

                        <th>상담 상태</th>
                        <th>상담 수정</th>
                        <!--<th>카테고리</th>-->
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $sql = "SELECT * FROM payments";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                    <tr>
                        <td><?php echo $row['merchant_uid']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['name']; ?></td>

                        <td><?php echo $row['buyer_name']; ?></td>
                        <td><?php echo $row['buyer_tel']; ?></td>
                        <td><?php echo $row['buyer_email']; ?></td>

                        <td><?php echo $row['buyer_com']; ?></td>
                        <td><?php echo $row['appointment_date']; ?></td>

                        <td><?php echo $row['appointment_time']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>

                        <td><?php echo $row['meetStat']; ?></td>
                        <td>
                            <select class="meeting-status" data-id="<?php echo $row['id']; ?>">
                                <option value="대기중" <?php if ($row['meetStat'] == '대기중') echo 'selected'; ?>>대기
                                    중</option>
                                <option value="확인됨" <?php if ($row['meetStat'] == '확인됨') echo 'selected'; ?>>확인됨
                                </option>
                                <option value="완료됨" <?php if ($row['meetStat'] == '완료됨') echo 'selected'; ?>>
                                    완료됨</option>
                                <option value="취소됨" <?php if ($row['meetStat'] == '취소됨') echo 'selected'; ?>>취소됨
                                </option>
                            </select>
                            <button class="update-status">수정</button>
                        </td>
                        <!--<td>
                            <button class="listViewButton" type="button"
                                onclick="listView('<?php echo $row['query']; ?>')">View</button>
                        </td>-->

                    </tr>
                    <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include('../../common/Footer.php') ?>

    <?php } ?>
</body>
<script>
function generateWhereClause(arr2) {
    let whereConditions = [];

    if (arr2[0] !== '전체' && arr2[0] == '예창') {
        whereConditions.push(`pre LIKE '%${arr2[0]}%'`);
    } else if (arr2[0] !== '전체' && arr2[0] != '예창') {
        whereConditions.push(`career2 LIKE '%${arr2[0]}%'`);
    } else if (arr2[0] !== '전체' && arr2[0] == '무관') {
        whereConditions.push(`pre LIKE '%${arr2[0]}%'`);
    } else if (arr2[0] !== '전체' && arr2[0] != '무관') {
        whereConditions.push(`career2 LIKE '%${arr2[0]}%'`);
    }
    if (arr2[1] !== '전체' && arr2[1] == '청년창업') {
        whereConditions.push(`isBoy LIKE '%${arr2[1]}%'`);
    } else if (arr2[1] !== '전체' && arr2[1] == '재창업자') {
        whereConditions.push(`restartup LIKE '%${arr2[1]}%'`);
    } else if (arr2[1] !== '전체' && arr2[1] == '여성창업') {
        whereConditions.push(`isfemale LIKE '%${arr2[1]}%'`);
    }
    if (arr2[2] !== '전체') {
        whereConditions.push(`local1 LIKE '%${arr2[2]}%'`);
    }
    let whereClause = '';
    if (whereConditions.length > 0) {
        whereClause = "AND (" + whereConditions.join(' AND ') + ")";
        //whereClause = "AND (career2 ='무관' OR  local1 ='무관' OR (" + whereConditions.join(' AND ') + "))";
    }
    return whereClause;
}

function listView(query) {
    const arr3 = query.split(',');

    // AJAX 요청을 보내서 $sum 값을 가져와서 표시
    $.ajax({
        url: './support_project.php',
        type: 'POST',
        cache: false, // 캐싱 방지
        data: {
            whereClause: generateWhereClause(arr3)
        },
        //dataType: 'json',
        success: function(res) {
            console.log('d', res);
        },
        error: function(e) {
            console.log('e', e);
        }
    });
}
</script>

</html>