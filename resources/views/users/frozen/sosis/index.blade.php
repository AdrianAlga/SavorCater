@extends('layouts.main')

@push('style')
  {{-- <link rel="stylesheet" href="{{ asset('/css/home.css') }}"> --}}
@endpush

@section('body')
  @include('components.navbar')
  <section id="home">
    <div class="container">
      @include('components.nav_frozen')
      <div class="row">
        <div class="col-md-3 col-6 p-0 box">
          <a href="{{ route('users.etalase.index') }}">
            <div class="m-1 shadow-sm card rounded-4">
              <div class="text-center">
                <img src="{{ asset('images/frozen.jpg') }}" alt="img" height="400px" width="100%"
                  class="rounded-top-4" />
              </div>
              <div class="py-3 px-2 text-center">
                <h4 class="m-0 fw-bold">Sosis Pop</h4>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-3 col-6 p-0 box">
          <a href="{{ route('users.etalase.index') }}">
            <div class="m-1 shadow-sm rounded-4 card">
              <div class="text-center">
                <img src="{{ asset('images/frozen.jpg') }}" alt="img" height="400px" width="100%"
                  class="rounded-top-4" />
              </div>
              <div class="py-3 px-2 text-center">
                <h4 class="m-0 fw-bold">Sosis Frozen</h4>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div>
        <div class="row" style="margin-top: 115px">
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
                      <img src="{{ asset('images/ayam-pop.jpg') }}" alt="img" height="80px" width="100%" />
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="container h-100">
                      <div class="row align-items-center h-100">
                        <div class="col-12 fw-bold fs-6">
                          <h5>Ayam Pop</h5>
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
