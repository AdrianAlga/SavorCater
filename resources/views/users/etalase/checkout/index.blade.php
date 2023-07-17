@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/checkout.css') }}">
@endpush

<section id="navbar">
  <div class="container-fluid fixed-bottom">
    <div class="row justify-content-center text-center bg-abu-abu py-3 font-txt small"
      style="box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3)"">
      <div class="col-6">
      </div>
      <div class="col-6">
        <a href="{{ route('users.succes.index') }}">
          <button class="btn bg-orange text-white btn- w-100">Beli Sekarang</button>
        </a>
      </div>
    </div>
  </div>
</section>
<section id="product" class="pb-5">
  <div class="container font-txt mb-4">
    <div class="row my-3">
      <div class="col-md-12">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex">
              <a href="{{ route('users.etalase.index') }}">
                <h2><i class="bi bi-arrow-left text-dark"></i></h2>
              </a>
              <h4 class="font-txt fw-bold ms-3 py-1">Checkout</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row border shadow-sm mb-3 py-4">
      <div class="col-12">
        <p><i class="bi bi-geo-alt-fill"></i> Alamat Pengirim</p>
      </div>
      <div class="col-12 small ps-4">
        Ananda Nur Amalia | (+62) 812-4328-1779 <br />
        Jl. Batua raya no. 17 <br />
        PANAKKUKANG, KOTA MAKASSAR, SULAWESI SELATAN, <br />
        ID 90231
      </div>
    </div>
    <div class="row border shadow-sm mb-3 py-3">
      <div class="col-4 col-md-2">
        <div>
          <img src="/images/produk1.png" alt="img" height="100px" width="100%" />
        </div>
      </div>
      <div class="col-8 col-md-10">
        <div class="container h-100">
          <div class="row align-items-end h-100">
            <div class="col-12 txt-merah fw-bold fs-6">
              <p>Whiskas 80gr</p>
            </div>
            <div class="col-12 fw-bold small">
              <p>Variasi : Tuna</p>
              <p>Rp.8.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row border shadow-sm my-3 py-4">
      <div class="col-12 fw-bold">
        <p>Pilih Pengiriman</p>
      </div>
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-6 col-md-4">
              <select class="form-select" aria-label="Default select example">
                <option value="1">Lambat</option>
                <option value="2">Sedang</option>
                <option value="3">Cepat</option>
              </select>
            </div>
            <div class="col-6 text-end pt-1">
              <p>Rp.10.000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row border shadow-sm my-3 py-4">
      <div class="col-12 fw-bold">
        <p>Catatan</p>
      </div>
      <div class="col-6">
        <p>Total Pesanan (1 Produk)</p>
      </div>
      <div class="col-6">
        <p>Rp.18.000</p>
      </div>
      <div class="col-6">
        <p>Metode Pembayaran</p>
      </div>
      <div class="col-6">
        <p>COD (Bayar di Tempat)</p>
      </div>
    </div>
    <div class="row border shadow-sm my-3 py-4">
      <div class="col-12 fw-bold">
        <p>Rincian Pembayaran</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-8">
            <p>Subtotal untuk Produk</p>
          </div>
          <div class="col-4 ps-0">
            <p>Rp.8.000</p>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <p>Subtotal untuk Pengiriman</p>
          </div>
          <div class="col-4 ps-0">
            <p>Rp.10.000</p>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <p>Biaya Penanganan</p>
          </div>
          <div class="col-4 ps-0">
            <p>Rp.500</p>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <p>Total Pembayaran</p>
          </div>
          <div class="col-4 ps-0">
            <p>Rp.18.500</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
