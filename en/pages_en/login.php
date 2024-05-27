<link rel="stylesheet" href="/public/css/admin.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>메라클 홈페이지</title>
    <?php include('../common_en/Header.php') ?>
</head>
<body>
    <div class="loginCont">
        <div class="loginwrap">
            <div class="tbspCi">
                <a href="/"></a><img src="/public/img/main/logo-color_merakl.png"></a>  
            </div>
            <div class="login-title">
                관리자 로그인
            </div>
            <form class="login-form" method="post" action="/pages_en/login_check.php">
                <div class="input-area id">
                    <input type="text" class="id-input" placeholder="관리자아이디" name="adminId">
                </div>
                <div class="input-area pw">
                    <input type="password" class="pw-input" placeholder="패스워드" name="adminPw">
                </div>
                <div class="form-submit">
                    <input class="submit-btn" type="submit" value="로그인">
                </div>
            </form>
            <div class="admin_join" onclick="location.href='/pages_en/join.php'">
                <button class="join_btn">회원가입</button>
            </div>
        </div>
    </div>
</body>
</html>