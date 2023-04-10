@extends('layouts.user')
@section('content')

<!-- Service Start -->
<div class="container-xxl py-5 bg-dark hero-header mb-5">
  <div class="container text-center my-5 pt-5 pb-4">
    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center text-uppercase">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
      </ol>
    </nav>
  </div>
</div>
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
            <h5>Master Chefs</h5>
            <p>Ini merupakan form card karyawan yang bekerja di restoran kami</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
            <h5>Kualitas Makanan</h5>
            <p>Ini merupakan informasi berisi kualitas dari makanan yang kami sediakan</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
            <h5>Online Order</h5>
            <p>Ini merupakan informasi cara untuk melakukan order online untuk customer</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="service-item rounded pt-3">
          <div class="p-4">
            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
            <h5>24/7 Service</h5>
            <p>Ini merupakan forum pengaduan kritik & saran kami untuk customer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->
@endsection