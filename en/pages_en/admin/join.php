<link rel="stylesheet" href="../../public/css/admin.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <?php include('../../common_en/Header.php') ?>
</head>
<body>
    <div class="loginCont">
        <div class="loginwrap">
            <div class="tbspCi">
                <a href="/"></a><img src="../../public/img/main/logo-color_merakl.png"></a>
            </div>
            <div class="login-title">
                관리자 생성
            </div>
            <form class="login-form" method="post" action="/en/pages_en/admin/join_check.php">
                <div class="input-area id">
                    <input type="text" class="id-input" placeholder="관리자아이디" name="adminId">
                </div>
                <div class="input-area pw">
                    <input type="password" class="pw-input" placeholder="패스워드" name="adminPw">
                </div>
                <div class="input-area pw">
                    <input type="password" class="pw-input" placeholder="패스워드 확인" name="PwCheck">
                </div>
                <div class="input-area code">
                    <input type="text" class="code-input" placeholder="코드" name="admincode">
                </div>
                <div class="form-submit">
                    <input class="submit-btn" type="submit" value="관리자생성">
                </div>
            </form>
        </div>
    </div>
</body>
</html>