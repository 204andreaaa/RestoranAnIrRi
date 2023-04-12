<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Restoran - Bootstrap Restaurant Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="/restoran/img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="/restoran/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/restoran/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/restoran/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="/restoran/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="/restoran/css/style.css" rel="stylesheet">
  <style>
    .containerr {
      position: relative;
      width: 50%;
    }
    
    .imagee {
      opacity: 1;
      display: block;
      width: 100%;
      height: auto;
      transition: .5s ease;
      backface-visibility: hidden;
    }
    
    .middlee {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }
    
    .containerr:hover .imagee {
      opacity: 0.3;
    }
    
    .containerr:hover .middlee {
      opacity: 1;
    }
    </style>
</head>

<body>
  <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
          <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
          <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="/home" class="nav-item nav-link active">rumah</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="/service" class="nav-item nav-link">Service</a>
            <a href="/menu" class="nav-item nav-link">Menu</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
              <div class="dropdown-menu m-0">
                <a href="booking.html" class="dropdown-item">Booking</a>
                <a href="team.html" class="dropdown-item">Our Team</a>
                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
              </div>
            </div>
            <a href="/contact" class="nav-item nav-link">Contact</a>
          </div>
          <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
        </div>
      </nav>
    </div>
    <!-- Navbar & Hero End -->

    @yield("content")



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Contact Us</a>
            <a class="btn btn-link" href="">Reservation</a>
            <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>MH.Thamrin, Jakarta</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 21876578</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>3sekawangroup@gmail.com</p>
            <div class="d-flex pt-2">
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
              <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Jam Buka</h4>
            <h5 class="text-light fw-normal">Senin - Sabtu</h5>
            <p>09.00 - 21.00</p>
            <h5 class="text-light fw-normal">Minggu</h5>
            <p>10.00 - 20.00</p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Founder</h4>
            <p class="btn btn-link">Muhammad Irham Badzhurahman</p>
            <p class="btn btn-link">Andrea</p>
            <p class="btn btn-link">Muhammad Rifki Bachtiar</p>
            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">tigasekawangroup</a>, All Right Reserved.

              <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
              Designed By <a class="border-bottom" href="https://htmlcodex.com">tigasekawangroup</a><br><br>
              Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">PT.TigasekawanGroup</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="">Home</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/restoran/lib/wow/wow.min.js"></script>
  <script src="/restoran/lib/easing/easing.min.js"></script>
  <script src="/restoran/lib/waypoints/waypoints.min.js"></script>
  <script src="/restoran/lib/counterup/counterup.min.js"></script>
  <script src="/restoran/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/restoran/lib/tempusdominus/js/moment.min.js"></script>
  <script src="/restoran/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="/restoran/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="/restoran/js/main.js"></script>
</body>

</html>