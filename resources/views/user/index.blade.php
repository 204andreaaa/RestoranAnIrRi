@extends('layouts.user')
@section('about')
<!-- Menu Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
      <h1 class="mb-5">Most Popular Items</h1>
    </div>
    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
      <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
        <li class="nav-item">
          <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
            <i class="fa fa-utensils fa-2x text-primary"></i>
            <div class="ps-3">
              <small class="text-body">Popular</small>
              <h6 class="mt-n1 mb-0">Breakfast</h6>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
            <i class="fa fa-coffee fa-2x text-primary"></i>
            <div class="ps-3">
              <small class="text-body">Special</small>
              <h6 class="mt-n1 mb-0">Launch</h6>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
            <i class="fa fa-hamburger fa-2x text-primary"></i>
            <div class="ps-3">
              <small class="text-body">Lovely</small>
              <h6 class="mt-n1 mb-0">Dinner</h6>
            </div>
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
          <div class="row g-4">
            @foreach ($menus as $menu)
            <div class="col-lg-6">
              <div class="d-flex align-items-center">
                <img class="flex-shrink-0 img-fluid rounded" src="{{ $menu->foto }}" alt=""
                  style="width: 200px; height: 150px;">
                <div class="w-100 d-flex flex-column text-start ps-4">
                  <h5 class="d-flex justify-content-between border-bottom pb-2">
                    <span>{{ $menu->nama }}</span>
                    <span class="text-primary">{{ $menu->harga }}</span>
                  </h5>
                  <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div id="tab-2" class="tab-pane fade show p-0 active">
          <div class="row g-4">
            @foreach ($menuss as $menu)
            <div class="col-lg-6">
              <div class="d-flex align-items-center">
                <img class="flex-shrink-0 img-fluid rounded" src="{{ $menu->foto }}" alt=""
                  style="width: 200px; height: 150px;">
                <div class="w-100 d-flex flex-column text-start ps-4">
                  <h5 class="d-flex justify-content-between border-bottom pb-2">
                    <span>{{ $menu->nama }}</span>
                    <span class="text-primary">{{ $menu->harga }}</span>
                  </h5>
                  <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Menu End -->
@endsection