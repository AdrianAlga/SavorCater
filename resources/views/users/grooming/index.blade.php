@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endpush

@section('body')
  @include('components.navbar')
  <section id="grooming">
    <div class="container">
      <div class="row py-3">
        <div class="col-10 pe-0">
          <form class="d-flex" role="search">
            <button class="btn position-absolute" type="submit"><i class="bi bi-search"></i></button>
            <input class="form-control me-2 ps-5 rounded-3" type="search" placeholder="Search" />
          </form>
        </div>
        <div class="col-2 text-start">
          <button data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none">
            <i class="bi bi-cart fs-3"></i>
          </button>
        </div>
      </div>
      <div class="row shadow-sm mx-4 rounded-3 mb-3">
        <div class="col-6 text-center px-0">
          <a href="{{ route('users.food.index') }}">
            <div class="rounded-3 h-100 w-100 py-3">
              <img src="{{ asset('/images/icon.png') }}" alt="icon" height="30px" />
              <span class="fw-bold">Petshop</span>
            </div>
          </a>
        </div>
        <div class="col-6 text-center px-0">
          <a href="{{ route('users.grooming.index') }}">
            <div class="rounded-3 bg-orange h-100 w-100 pt-3">
              <img src="{{ asset('/images/icon2.png') }}" alt="icon" height="30px" />
              <span class="fw-bold">Grooming</span>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="4000">
                <img src="{{ asset('/images/slide1.png') }}" class="d-block w-100" alt="img" height="200px" />
              </div>
              <div class="carousel-item" data-bs-interval="4000">
                <img src="/images/slide2.png" class="d-block w-100" alt="img" height="200px" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3 col-6 p-0">
          <a href="{{ route('users.etalase_grooming.index') }}">
            <div class="m-1 shadow-sm rounded-3">
              <div class="text-center">
                <img src="{{ asset('/images/product3.png') }}" alt="img" height="200px" width="100%" />
              </div>
              <div class="py-3 px-2">
                <h5 class="txt-merah">Kucing Persia</h5>
                <p class="m-0"><del>Rp. 50.000</del></p>
                <p class="m-0 fw-bold fs-5">Rp. 35.000,-</p>
                <div class="text-end">
                  <p class="bg-orange d-inline px-2 py-1 rounded-4 fw-bold">10%</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-6 p-0">
          <a href="{{ route('users.etalase_grooming.index') }}">
            <div class="m-1 shadow-sm rounded-3">
              <div class="text-center">
                <img src="{{ asset('/images/produk3.png') }}" alt="img" height="200px" width="100%" />
              </div>
              <div class="py-3 px-2">
                <h5 class="txt-merah">Maine Coon</h5>
                <p class="m-0"><del>Rp. 100.000</del></p>
                <p class="m-0 fw-bold fs-5">Rp. 70.000,-</p>
                <div class="text-end">
                  <p class="bg-orange d-inline px-2 py-1 rounded-4 fw-bold">10%</p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div>
        <div class="row" style="margin-top: 94px">
          <div class="col-md-12"></div>
        </div>
      </div>

      <!-- Modal keranjang -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header text-center">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="fs-5 txt-orange font-txt">Keranjang Belanja <i class="bi bi-cart4"></i></h1>
                  </div>
                </div>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container p-0">
                <div class="row border py-3 my-1">
                  <div class="col-4">
                    <div>
                      <img src="/images/produk1.png" alt="img" height="80px" width="100%" />
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="container h-100">
                      <div class="row align-items-end h-100">
                        <div class="col-12 txt-merah fw-bold fs-6">
                          <p>Whiskas 80gr</p>
                        </div>
                        <div class="col-12 fw-bold small">
                          <p>Rp.8.000</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="container p-0">
                <div class="row">
                  <div class="col-8">
                    <div class="container p-0">
                      <div class="row">
                        <div class="col-4 fw-bold">
                          <p>Total</p>
                        </div>
                        <div class="col-8 fw-bold">
                          <p>Rp.120.000</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <button type="button" class="btn btn-sm bg-orange text-white">Check Out</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
