@extends('layouts.user')
@section('content')

<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container text-center my-5 pt-5 pb-4">
    <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center text-uppercase">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
      </ol>
    </nav>
  </div>
</div>

<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6 text-start">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="/restoran/img/about-1.jpg">
          </div>
          <div class="col-6 text-start">
            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="/restoran/img/about-2.jpg"
              style="margin-top: 25%;">
          </div>
          <div class="col-6 text-end">
            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="/restoran/img/about-3.jpg">
          </div>
          <div class="col-6 text-end">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="/restoran/img/about-4.jpg">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
        <h1 class="mb-4">Selamat Datang Di <i class="fa fa-utensils text-primary me-2"></i>Restoran 3 Sekawan</h1>
        <p class="mb-4">Selamat datang di Restoran 3 Sekawan! Kami adalah sebuah restoran bergaya Timur Tengah yang terletak di jantung kota Jakarta. 
          Kami menawarkan pengalaman kuliner yang autentik, dengan menu yang menggabungkan cita rasa tradisional Arab dengan sentuhan modern.</p>
        <p class="mb-4">Kami bangga menggunakan bahan-bahan segar dan berkualitas dalam setiap hidangan kami. 
          Menu kami menawarkan beragam pilihan hidangan yang lezat, mulai dari hidangan pembuka yang khas Timur Tengah seperti hummus, falafel, dan tabbouleh, hingga hidangan utama seperti grill daging kambing, ayam tandoori, dan ikan panggang.
          Kami juga menawarkan beragam hidangan vegetarian yang lezat bagi mereka yang memiliki preferensi diet khusus.</p>
        <div class="row g-4 mb-4">
          <div class="col-sm-6">
            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
              <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">10</h1>
              <div class="ps-4">
                <p class="mb-0">Tahun</p>
                <h6 class="text-uppercase mb-0">Pengalaman</h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
              <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">20</h1>
              <div class="ps-4">
                <p class="mb-0">Popular</p>
                <h6 class="text-uppercase mb-0">Master Chefs</h6>
              </div>
            </div>
          </div>
        </div>
        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl pt-5 pb-3">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Karyawan</h5>
      <h1 class="mb-5">Master Chefs Terbaik</h1>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item text-center rounded overflow-hidden">
          <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="/restoran/img/team-1.jpg" alt="">
          </div>
          <h5 class="mb-0">Irham</h5>
          <small>Capt Cook</small>
          <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item text-center rounded overflow-hidden">
          <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="/restoran/img/team-2.jpg" alt="">
          </div>
          <h5 class="mb-0">Andrea</h5>
          <small>Capt Helper</small>
          <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item text-center rounded overflow-hidden">
          <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="/restoran/img/team-3.jpg" alt="">
          </div>
          <h5 class="mb-0">Rifki</h5>
          <small>Capt cook</small>
          <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item text-center rounded overflow-hidden">
          <div class="rounded-circle overflow-hidden m-4">
            <img class="img-fluid" src="/restoran/img/team-4.jpg" alt="">
          </div>
          <h5 class="mb-0">Reza</h5>
          <small>Helper</small>
          <div class="d-flex justify-content-center mt-3">
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
<!-- Team End -->