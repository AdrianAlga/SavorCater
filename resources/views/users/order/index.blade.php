@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/order.css') }}">
@endpush

@section('body')
  @include('components.navbar')
  <section id="order">
    <div class="container shadow-sm pb-5 rounded-bottom-5">
      <div class="row">
        <div class="col-12 text-center p-4">
          <h3 class="fw-bold">Status Order</h3>
        </div>
      </div>
      <div class="row mx-4 rounded-3 mb-3 border rounded-5">
        <div class="col-6 text-center p-0">
          <a href="{{ route('order') }}">
            <button class="btn bg-orange rounded-end-0 rounded-start-5 w-100 shadow-sm text-white">Berlangsung</button>
          </a>
        </div>
        <div class="col-6 text-center px-0">
          <a href="{{ route('order.history') }}">
            <button class="btn bg-abu-abu rounded-start-0 rounded-end-5 w-100 border shadow-sm">History</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-4 pb-5">
    <div class="container p-2 mb-5">
      <div class="bg-white p-3 rounded-3">
        <div class="row mb-3 align-items-center">
          <div class="col-md-3">
            <div>
              <img src="/images/ayam-pop.jpg" alt="img" width="100%" height="320px" class="rounded-4" />
            </div>
          </div>
          <div class="col-md-9">
            <div class="container">
              <div class="rounded-4 px-3 border shadow-sm">
                <div class="row">
                  <div class="col-12 fw-bold pt-3 border-bottom">
                    <p class="fw-bold fs-5 text-center">Rincian Produk</p>
                  </div>
                  <div class="col-12 py-3">
                    <div class="container">
                      <div class="row">
                        <div class="col-12 p-0">
                          <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col-1">
                                  Stok
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  255
                                </th>
                              </tr>
                              <tr>
                                <th scope="col-1">
                                  Kategori
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  Frozen
                                </th>
                              </tr>
                              <tr>
                                <th scope="col-1">
                                  Jenis Makanan
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  Risol
                                </th>
                              </tr>
                              <tr>
                                <th scope="col-1">
                                  Harga /porsi
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  Rp.50.000
                                </th>
                              </tr>
                              <tr>
                                <th scope="col-1">
                                  Jumlah Pesanan
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  Rp.30
                                </th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-3 align-items-center">
          <div class="col-md-3">
            <div>
              <img src="/images/frozen.jpg" alt="img" width="100%" height="320px" class="rounded-4" />
            </div>
          </div>
          <div class="col-md-9">
            <div class="container">
              <div class="rounded-4 px-3 border shadow-sm">
                <div class="row">
                  <div class="col-12 fw-bold pt-3 border-bottom">
                    <p class="fw-bold fs-5 text-center">Rincian Produk</p>
                  </div>
                  <div class="col-12 py-3">
                    <div class="container">
                      <div class="row">
                        <div class="col-12 p-0">
                          <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col-1">
                                  Stok
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  255
                                </th>
                              </tr>
                              <tr>
                                <th scope="col-1">
                                  Kategori
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  Frozen
                                </th>
                              </tr>
                              <tr>
                                <th scope="col-1">
                                  Jenis Makanan
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  Risol
                                </th>
                              </tr>
                              <tr>
                                <th scope="col-1">
                                  Harga /porsi
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  Rp.50.000
                                </th>
                              </tr>
                              <tr>
                                <th scope="col-1">
                                  Jumlah Pesanan
                                </th>
                                <th scope="col">
                                  :
                                </th>
                                <th scope="col">
                                  Rp.30
                                </th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3 border-top border-2 pt-3 text-center">
          <div class="col-md-4 fw-bold fs-5">
            <span class="px-3">Total Pesanan :</span><span>Rp.</span><Span>500.000</Span>
          </div>
          <div class="col-md-4">
            <span class="fw-bold">Status : </span><span class="badge text-bg-info text-white">Padding</span>
          </div>
          <div class="col-md-4">
            <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Kirim Bukti
              Pembayaran</button>
          </div>
        </div>
      </div>
    </div>
    {{-- Modal Bukti Pembayaran --}}
    <form action="">
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Payment</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="formFileSm" class="form-label">Masukkan Bukti Pembayaran</label>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
@endsection