@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/form_add.css') }}">
@endpush

@section('body')
  @include('components.navbar_admin')
  @include('components.spasi')

  <section id="header-informasi">
    <div class="container pt-3">
      <div class="row shadow card p-3">
        <div class="col-md-12 text-center">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3>Informasi Pemesanan</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="informasi">
    <div class="container">
      <div class="row card shadow p-4 mt-3">
        <div class="col-md-12">
          <div class="card-body">
            <div class="col-md-12">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th class="col-3" colspan="2">Pembeli :</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td>andi</td>
                  </tr>
                  <tr>
                    <td>Alamat Email</td>
                    <td>:</td>
                    <td>andi@gmail.com</td>
                  </tr>
                  <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td>085xxxx</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>Makassar</td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th class="col-3" colspan="2">Rincian Produk :</th>
                  </tr>
                </thead>
                <tbody class="border">
                  <tr>
                    <td>Nama Makanan</td>
                    <td>:</td>
                    <td>Ayam Pecel</td>
                  </tr>
                  <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>255</td>
                  </tr>
                  <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>Frozen</td>
                  </tr>
                  <tr>
                    <td>Jenis Makanan</td>
                    <td>:</td>
                    <td>Risol</td>
                  </tr>
                  <tr>
                    <td>Harga/Porsi</td>
                    <td>:</td>
                    <td>Rp.50.000</td>
                  </tr>
                  <tr>
                    <td>Jumlah Pesanan</td>
                    <td>:</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td>100.000</td>
                  </tr>
                  <tr>
                    <td>Gambar</td>
                    <td>:</td>
                    <td><img src="{{ asset('images/ayam-pop.jpg') }}" alt="img" height="150px"></td>
                  </tr>
                </tbody>
                <tbody class="border">
                  <tr>
                    <td>Nama Makanan</td>
                    <td>:</td>
                    <td>Sapi Rendang</td>
                  </tr>
                  <tr>
                    <td>Stok</td>
                    <td>:</td>
                    <td>255</td>
                  </tr>
                  <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>Frozen</td>
                  </tr>
                  <tr>
                    <td>Jenis Makanan</td>
                    <td>:</td>
                    <td>Risol</td>
                  </tr>
                  <tr>
                    <td>Harga/Porsi</td>
                    <td>:</td>
                    <td>Rp.50.000</td>
                  </tr>
                  <tr>
                    <td>Jumlah Pesanan</td>
                    <td>:</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td>100.000</td>
                  </tr>
                  <tr>
                    <td>Gambar</td>
                    <td>:</td>
                    <td><img src="{{ asset('images/frozen.jpg') }}" alt="img" height="150px"></td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th class="col-3" colspan="2">Pembayaran :</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Total Pembayaran</td>
                    <td>:</td>
                    <td>Rp.200.000</td>
                  </tr>
                  <tr>
                    <td>Metode Pembayaran</td>
                    <td>:</td>
                    <td>BCA</td>
                  </tr>
                  <tr>
                    <td>Tanggal Pembelian</td>
                    <td>:</td>
                    <td>2023-06-06</td>
                  </tr>
                  <tr>
                    <td>Nomor Pesanan</td>
                    <td>:</td>
                    <td>8965432</td>
                  </tr>
                  <tr>
                    <td>Bukti Pembayaran</td>
                    <td>:</td>
                    <td><img src="{{ asset('images/frozen.jpg') }}" alt="img" height="300px"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div>
            <button type="button" class="btn btn-primary"
              style="--bs-btn-padding-y: 0.25rem; --bs-btn-padding-x: 0.5rem; --bs-btn-font-size: 0.75rem"><a
                href="{{ route('admin.pesanan') }}">Back</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
