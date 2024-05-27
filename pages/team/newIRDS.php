<link rel="stylesheet" href="../../public/css/bootstrap.min.css">
<link rel="stylesheet" href="../../public/css/style.css">

<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <?php include('../../common/newHeader.php'); ?>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
    <div class="container-fluid position-relative p-0">
        <?php include('../../common/newGnp.php') ?>
        <div class="carousel-item">
            <img class="w-100" src="../../public/img/startupimg/carousel-2.jpg" alt="Image" />
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                        Creative & Innovative
                    </h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                        Creative & Innovative Digital Solution
                    </h1>
                    <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free
                        Quote</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="../../public/img/startupimg/carousel-1.jpg" alt="Image" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                            Creative & Innovative
                        </h5>
                        <h1 class="display-6 text-white mb-md-4 animated zoomIn">
                            성공하는 기업보다 가치있는 기업이 되고자<br /> 노력하는 메라클이 되겠습니다.
                        </h1>

                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="../../public/img/startupimg/carousel-2.jpg" alt="Image" />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">
                            Creative & Innovative
                        </h5>
                        <h1 class="display-6 text-white mb-md-4 animated zoomIn">
                            성공하는 기업보다 가치있는 기업이 되고자<br /> 노력하는 메라클이 되겠습니다.

                        </h1>

                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Full Screen Search End -->

    <?php include('../../common/Footer.php'); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../public/lib/wow/wow.min.js"></script>
    <script src="../../public/lib/easing/easing.min.js"></script>
    <script src="../../public/lib/waypoints/waypoints.min.js"></script>
    <script src="../../public/lib/counterup/counterup.min.js"></script>
    <script src="../../public/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="../../public/js/main.js"></script>
</body>

</html>