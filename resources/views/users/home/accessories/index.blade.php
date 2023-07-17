@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
@endpush

@section('body')
  @include('components.navbar')
  <section id="home">
    <div class="container">
      @include('components.nav_accessories')
      <div class="row">
        <div class="col-md-3 col-6 p-0">
          <a href="{{ route('users.etalase.index') }}">
            <div class="m-1 shadow-sm rounded-3">
              <div class="text-center">
                <img src="{{ asset('/images/product_accessories.png') }}" alt="img" height="200px" width="100%" />
              </div>
              <div class="py-3 px-2">
                <h5 class="txt-merah">Whiskas 80gr</h5>
                <p class="m-0 fw-bold fs-5">Rp. 8.000,-</p>
                <p class="m-0">Rp. 10.000</p>
                <div class="text-end">
                  <p class="bg-orange d-inline px-2 py-1 rounded-4 fw-bold">10%</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-6 p-0">
         <a href="{{ route('users.etalase.index') }}">
          <div class="m-1 shadow-sm rounded-3">
            <div class="text-center">
              <img src="{{ asset('/images/produk2.png') }}" alt="img" height="200px" width="100%" />
            </div>
            <div class="py-3 px-2">
              <h5 class="txt-merah">Whiskas 80gr</h5>
              <p class="m-0 fw-bold fs-5">Rp. 8.000,-</p>
              <p class="m-0">Rp. 10.000</p>
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
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                      <img src="{{ asset('/images/product_accessories.png') }}" alt="img" height="80px" width="100%" />
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
