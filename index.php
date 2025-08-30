<?php
$page = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= ucfirst($page); ?> - CV. NUSAPRATAMA ANUGRAH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/npa2.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-light shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="?page=home" class="navbar-brand">
                    <img src="img/npa2.png" alt="Logo" class="img-fluid" style="max-height: 50px;">
                    <span class="text-success company-name">CV. NUSAPRATAMA ANUGRAH</span>
                    <!-- <img src="img/logo.png" alt="Logo" class="img-fluid" style="max-height: 50px;"> -->
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="?page=home" class="nav-item nav-link <?php if($page === 'home') echo "active"; ?>">Home</a>
                        <a href="?page=about" class="nav-item nav-link <?php if($page === 'about') echo "active"; ?>">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if(in_array($page, ['chemicals', 'mesin'])) echo "active"; ?>" data-bs-toggle="dropdown">Products</a>
                            <div class="dropdown-menu bg-navbar-dropown mt-2">
                                <a href="?page=chemicals" class="dropdown-item <?php if($page === 'chemicals') echo "active"; ?>">CHEMICALS agrochemical</a>
                                <a href="?page=mesin" class="dropdown-item <?php if($page === 'mesin') echo "active"; ?>">Mesin Peralatan Pabrik</a>
                            </div>
                        </div>
                        <a href="?page=contact" class="nav-item nav-link <?php if($page === 'contact') echo "active"; ?>">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

<?php
// Cek apakah file ada
$file = __DIR__ . "/{$page}.php";

if (file_exists($file)) {
    include $file;
} else {
    include __DIR__ . "/404.php"; // fallback kalau file nggak ada
}
?>

    <!-- Footer Start -->
    <div class="container-fluid bg-white footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="?page=home" class="d-inline-flex align-items-center mb-3 text-decoration-none">
                        <img src="img/npa2.png" alt="Logo" class="img-fluid me-2" style="max-height: 50px;">
                        <span class="text-success">CV. NUSAPRATAMA ANUGRAH</span>
                    </a>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Bakalan, Bakalan Wringinpitu, Kec. BalongBendo, Kabupaten Sidoarjo, Jawa Timur 61263</p>
                </div>
                <div class="col-md-6 col-lg-9 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p><i class="fa fa-phone-alt me-3"></i>031 – 99790973</p>
                    <p><i class="fa fa-phone-alt me-3"></i>0823-2009-0022</p>
                    <p><i class="fa fa-envelope me-3"></i>admin@nusapratama.co.id</p>
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="/">CV. NUSAPRATAMA ANUGRAH</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>