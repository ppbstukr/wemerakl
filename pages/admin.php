<?php
function get_url_fsockopen($url)
{
    $URL_parsed = parse_url($url);
    $scheme = $URL_parsed["scheme"];
    $host = $URL_parsed["host"];
    $port = isset($URL_parsed["port"]) ? $URL_parsed["port"] : ($scheme === "https" ? 443 : 80);
    $path = $URL_parsed["path"] . (isset($URL_parsed["query"]) ? '?' . $URL_parsed["query"] : '');

    $out = "GET $path HTTP/1.1\r\n";
    $out .= "Host: $host\r\n";
    $out .= "Connection: Close\r\n\r\n";

    $fp = fsockopen(($scheme === "https" ? "ssl://" : "") . $host, $port, $errno, $errstr, 30);
    if (!$fp) {
        return "Error: $errstr ($errno)";
    } else {
        fputs($fp, $out);
        $response = "";
        while (!feof($fp)) {
            $response .= fgets($fp, 128);
        }
        fclose($fp);

        // 헤더와 본문을 분리
        list($response_headers, $response_body) = explode("\r\n\r\n", $response, 2);
        return $response_body;
    }
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <link rel="stylesheet" href="/public/css/admin.css">
    <link rel="stylesheet" href="/public/css/aboutus.css">
    <?php include('../common/Header.php'); ?>
</head>

<body>
    <?php
    session_start();
    if (IS_NULL($_SESSION['adminId'])) {
        echo "<script>alert('접근권한이 없습니다.');history.back();</script>";
    } else {
        // HTTP GET 요청을 보내어 결과를 $apiResponse 변수에 저장
        $apiResponse = get_url_fsockopen("https://jsonplaceholder.typicode.com/posts");
        include('../common/Nav.php');
    ?>
        <div class="container">
            <div class="top-banner">
                <div class="top-text">
                    관리자 페이지
                </div>
            </div>
            <div class="admin-area">
                <div class="logout">
                    <a href="/pages/logout.php">
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
                        // 데이터베이스 연결 및 쿼리 실행
                        $conn = mysqli_connect("localhost", "username", "password", "database");
                        $sql = "SELECT * FROM merakl_contact";
                        $result = mysqli_query($conn, $sql);

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
                <div>TEST</div>
                <?php
                // TEST 부분에 응답 출력
                if (strpos($apiResponse, "Error:") !== false) {
                    // 오류 메시지를 출력합니다.
                    echo $apiResponse;
                } else {
                    // TEST 부분에 응답 출력
                    echo $apiResponse;
                }

                ?>
            </div>
        </div>
    <?php
        include('../common/Footer.php');
    }
    ?>
</body>

</html>