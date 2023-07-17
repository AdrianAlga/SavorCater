@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/booking.css') }}">
@endpush

@section('body')
  @include('components.navbar')
  <section id="booking">
    <div class="container shadow-sm pb-5 rounded-bottom-5">
      <div class="row">
        <div class="col-12 text-center p-4">
          <h3 class="fw-bold">Reservasi Anda</h3>
        </div>
      </div>
      <div class="row mx-4 rounded-3 mb-3 border rounded-5">
        <div class="col-6 text-center p-0">
          <a href="{{ route('users.booking.index') }}">
            <button class="btn bg-abu-abu rounded-start-5 rounded-end-0 border w-100 shadow-sm">Berlangsung</button>
          </a>
        </div>
        <div class="col-6 text-center px-0">
          <a href="{{ route('users.history_booking.index') }}">
            <button class="btn bg-orange rounded-end-5 rounded-start-0 w-100 shadow-sm text-white">History</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-4 pb-5">
    <div class="container-fluid p-2 mb-5">
      <div class="bg-white p-3 rounded-3">
        <div class="row">
          <div class="col-4 text-center">
            <div>
              <img src="/images/iconAnimalcare.png" alt="img" />
            </div>
          </div>
          <div class="col-8">
            <h5>Animal Care</h5>
            <div class="col-12 text-warning d-flex fs-6">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i>
              <div class="ps-2 text-secondary small pt-1">
                <p>125 Reviews</p>
              </div>
            </div>
            <div>
              <div class="container-fluid p-0">
                <div class="row">
                  <div class="col-5">
                    <p><i class="bi bi-geo-alt"></i> 1.5 km</p>
                  </div>
                  <div class="col-7">
                    <p><i class="bi bi-cash-coin"></i> Rp 50.000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="rounded-4 p-3 bg-abu-abu3">
          <div class="row">
            <div class="col-12">
              <div class="container">
                <div class="row">
                  <div class="col-1"><i class="bi bi-map fs-4"></i></div>
                  <div class="col-11">
                    <p class="fw-bold m-0">Animal Care</p>
                    <p>Jl. H. M. Yasin Limpo No. 36</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="container">
                <div class="row">
                  <div class="col-1"><i class="bi bi-clock fs-4"></i></div>
                  <div class="col-11 pt-1">
                    <p>Wed 9 Sep — 10:30 am</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="container">
                <div class="row">
                  <div class="col-1"><i class="bi bi-hourglass fs-4"></i></div>
                  <div class="col-11 pt-1">
                    <p><span class="badge bg-success px-3">succes</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="batal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Batalkan?</h1>
          </div>
          <div class="modal-body">Apakah anda yakin ingin membatalkannya?</div>
          <div class="modal-footer">
            <button type="button" class="btn bg-orange w-25" data-bs-dismiss="modal">Tidak</button>
            <button type="button" class="btn bg-orange w-25">Iya</button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
