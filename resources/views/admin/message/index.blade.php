@extends('layouts.main')

@push('style')
  {{-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> --}}
@endpush

@section('body')
  @include('components.navbar_admin')
  @include('components.spasi')

  <!-- produk -->
  <section id="headerProduk">
    <div class="container-fluid card shadow">
      <div class="row p-3">
        <div class="col-md-12">
          <h3>Pesan</h3>
          <p>Menambahkan pesan informasi kepada pelanggan</p>
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#pesan">Buat
            Pesan</button>
        </div>
      </div>
    </div>
  </section>

  <!-- alerts -->
  <div id="liveAlertPlaceholder"></div>

  <!-- End Alerts -->

  <section class="produk">
    <div class="container-fluid card shadow my-3">
      <div class="row">
        <div class="col-md-12 p-4">
          <div class="table-responsive">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th class="col-md-0">No.</th>
                  <th class="col-md-6">Tanggal Pesan</th>
                  <th class="col-md-6">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2023/07/25</td>
                  <td>
                    <button class="p-0 bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#info"><span class="badge text-bg-info">Informasi</span></button>
                    <a href="#"><span class="badge text-bg-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Delete</span></a>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Hapus -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Apakah anda ingin menghapusnya?</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                  </div>
                </div>
              </div>
            <!-- Message -->
            <form action="">
              <div class="modal fade" id="pesan" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Message</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Masukkan Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
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
            <!-- Informasi -->
            <div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Informasi Pesan</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="selamat datang" disabled></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
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
