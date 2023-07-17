@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endpush

@section('body')
  @include('components.navbar')
  <section id="profile">
    <div class="container font-txt">
      <div class="row my-3">
        <div class="col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-2">
                <a href="{{ route('users.profile.index') }}">
                  <h2><i class="bi bi-arrow-left text-dark"></i></h2>
                </a>
              </div>
              <div class="col-8 text-center">
                <h4 class="font-txt fw-bold ms-3 py-1">Data Diri Anda</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form action="">
        <div class="row">
          <div class="col-12 text-center">
            <div class="position-relative">
              <img src="/images/profile.JPG" alt="img" class="rounded-circle" height="130px" width="130px" />
              <button class="position-absolute border-0 bg-transparent top-100 ps-5 start-50 translate-middle"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
                <h1><i class="bi bi-plus-circle-fill txt-orange"></i></h1>
              </button>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <div class="login-box">
              <div class="user-box">
                <input type="text" name="" value="Ananda Nuramalia Arfan" />
                <label>Nama Lengkap</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3 text-center">
          <div class="login-box">
            <div class="user-box d-flex pt-3">
              <label class="text-start JK">Jenis Kelamin</label>
            </div>
          </div>
          <div class="col-6">
            <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off"
              checked>
            <label class="btn btn-outline-warning w-100 rounded-5" for="success-outlined"><i class="bi bi-gender-male"></i> Laki-Laki</label>
          </div>
          <div class="col-6">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-warning w-100 rounded-5" for="danger-outlined"><i class="bi bi-gender-female"></i>Perempuan</label>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <div class="login-box">
              <div class="user-box">
                <input type="email" name="" value="anandanuramalia@gmail.com" required />
                <label>Email</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <div class="login-box">
              <div class="user-box">
                <input type="number" name="" value="085251754701" required />
                <label>Phone</label>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <div class="login-box">
              <div class="user-box">
                <div class="mb-3 pt-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                  <textarea class="form-control" id="" rows="5" required></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pb-4">
          <div class="col-12 text-center">
            <button type="submit" class="btn bg-orange px-5">Simpan</button>
          </div>
        </div>
      </form>
      <div>
        <div class="row" style="margin-top: 94px">
          <div class="col-md-12"></div>
        </div>
      </div>
      <!-- Modal edit gambar -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Gambar</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="formFile" class="form-label">Masukkan Gambar</label>
                <input class="form-control" type="file" id="formFile">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection
