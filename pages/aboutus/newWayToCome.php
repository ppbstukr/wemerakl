<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("../../common/newHeader.php")
    ?>
    <!-- Libraries Stylesheet -->
    <link href="../../public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="../../public/lib/animate/animate.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../../public/css/style.css" rel="stylesheet" />
</head>

<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <?php
        include("../../common/newGnp.php")
        ?>

        <div class="container-fluid py-5 bg-header" style="margin-bottom: 90px; background:rgba(96, 78, 152,.9);">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">오시는길</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class=" d-flex align-items-center justify-content-center rounded"
                            style="width: 75px; height: 75px;background:rgba(96, 78, 152,1);">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="mb-2">질문 전화</h4>
                            <h6 class="text-primary mb-0">051-911-3330</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class=" d-flex align-items-center justify-content-center rounded"
                            style="width: 75px; height: 75px;background:rgba(96, 78, 152,1);">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="mb-2">무료 상담</h4>
                            <h6 class="text-primary mb-0">office@meraklus.com</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class=" d-flex align-items-center justify-content-center rounded"
                            style="width: 75px; height: 75px;background:rgba(96, 78, 152,1);">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-3">
                            <h4 class="mb-2">사무실 방문</h4>
                            <h6 class="text-primary mb-0">부산 해운대구 센텀중앙로 97<br /> 센텀스카이비즈 A동 2407호</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class=" rounded h-100 d-flex align-items-center p-5 wow"
                        style="background:rgba(96, 78, 152,0.5);">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control border-0 bg-light px-4"
                                        placeholder="Your Name" style="height: 55px" />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control border-0 bg-light px-4"
                                        placeholder="Your Email" style="height: 55px" />
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject"
                                        style="height: 55px" />
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 bg-light px-4 py-3" rows="4"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-12" style="background:rgba(96, 78, 152,0.8);">
                                    <button class="btn text-white w-100 py-3" type="submit">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.2611820721745!2d129.12353462571537!3d35.175042293618056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356893f2e4b0262f%3A0x2137e15e3e3ac719!2sMelakeul!5e0!3m2!1sen!2skr!4v1670401149127!5m2!1sen!2skr"
                        frameborder="0" style="min-height: 350px; border: 0" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <?php include('../../common/Footer.php') ?>
    <!-- Footer End -->

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