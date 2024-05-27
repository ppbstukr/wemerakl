<?php

?>

<!-- Navbar & Carousel Start -->
<!--<div class="container-fluid position-relative p-0">-->
<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="/index123.php" class="navbar-brand p-0">
        <img class="chImg" src="/public/img/banner/G24G22.png" style="width: 10rem;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

        <div class="navbar-nav ms-auto py-0">
            <a href="/index123.php" style="color: black;" class="nav-item nav-link <?php if ($currentPage == 'index123.php') {
                                                                                        echo 'active';
                                                                                    } ?>">Home</a>
            <!-- <a href="about.html" class="nav-item nav-link">사업분야</a>
                <a href="service.html" class="nav-item nav-link">포트폴리오</a> -->
            <div class="nav-item dropdown">
                <a href="#" style="color: black;" class="nav-link <?php if ($currentPage == 'member.php' || $currentPage == 'blog.html') {
                                                                        echo 'active';
                                                                    } ?> dropdown-toggle"
                    data-bs-toggle="dropdown">회사소개</a>
                <div class="dropdown-menu m-0">
                    <a href="/startup/blog.html" style="color: black;" class="dropdown-item">회사소개</a>
                    <a href="detail.html" style="color: black;" class="dropdown-item">CI</a>
                    <a href="/startup/member.php" style="color: black;" class="dropdown-item">조직도</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" style="color: black;" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">사업분야</a>
                <div class="dropdown-menu m-0">
                    <a href="/pages/team/newGMAC.php" style="color: black;" class="dropdown-item">액셀러레이터</a>
                    <a href="/pages/team/newRNDS.php" style="color: black;" class="dropdown-item">R&D</a>
                    <a href="/pages/team/newBMPS.php" style="color: black;" class="dropdown-item">플랫폼 개발</a>
                    <a href="/pages/team/newIRDS.php" style="color: black;" class="dropdown-item">전문 디자인</a>
                </div>
            </div>
            <a href="index.html" style="color: black;" class="nav-item nav-link">포트폴리오</a>

            <a href="/pages/aboutus/newWayToCome.php" style="color: black;"
                class="nav-item nav-link <?php if ($currentPage == 'newWayToCome.php') {
                                                                                                            echo 'active';
                                                                                                        } ?>">Contact</a>
        </div>
        <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
        <!-- 위 모달은 다른 상황에서 쓸 수 있을듯 함 -->

    </div>
</nav>

<!-- </div> -->

<!-- Navbar & Carousel End -->