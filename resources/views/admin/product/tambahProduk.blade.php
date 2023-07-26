@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
@endpush

@section('body')
  @include('components.navbar_admin')
  @include('components.spasi')

  <section id="header-tambahProduk">
    <div class="container-fluid card shadow-lg">
      <div class="row mt-3">
        <div class="col-2">
          <a href="{{ route('admin.produk') }}"><button type="button" class="btn btn-primary"><i
                class="bi bi-arrow-left-circle"></i></button></a>
        </div>
        <div class="col-12 text-center">
          <h3>Tambah Produk</h3>
          <p>Tambahkan Produk pada colom dibawah</p>
        </div>
      </div>
    </div>
  </section>

  <section id="addProduk">
    <div class="container-fluid">
      <div class="row m-4 justify-content-center">
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="login-box">
              <form>
                <h4 class="mb-4 text-center">Produk</h4>
                <div class="user-box">
                  <input type="text" name="" required="" />
                  <label class="text-black">Nama Produk</label>
                </div>
                <div class="user-box">
                  <input type="number" name="" required="" min="0" />
                  <label class="text-black">Harga Produk</label>
                </div>
                <div class="user-box">
                  <input type="number" name="" required="" min="0" />
                  <label class="text-black">Jumlah Stok</label>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-6 px-0">
                      <label class="pb-2">kategori Makanan :</label>
                      <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected>-</option>
                        <option value="1">Catering</option>
                        <option value="2">Frozen</option>
                      </select>
                    </div>
                    <div class="col-6">
                      <label class="pb-2">kategori Menu :</label>
                      <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected>-</option>
                        <option value="1">Ayam</option>
                        <option value="2">Sapi</option>
                        <option value="3">Risol</option>
                        <option value="3">Sosis</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="my-3">
                  <label for="formFile" class="form-label">Masukkan foto produk</label>
                  <input class="form-control" type="file" id="formFile" required />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Catatan Produk</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="row text-center my-4">
                  <div class="col-md-12">
                    <div class="login-box">
                      <button type="submit" class="card">
                        Tambah
                        <span></span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
