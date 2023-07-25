@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('body')
  <section id="login">
    <div class="container-fluid h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-md-9 text-center text-white">
              <h1>Warung Jawa</h1>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-11 col-md-5 ">
              <div class="login-box">
                <p>Registrasi</p>
                <p style="color: red; font-style: italic;" class="text-center">Username / Password Salah!</p>
                <form action="" method="post">
                  <div class="user-box">
                    <input required="" name="username" type="gmail" />
                    <label>Gmail</label>
                  </div>
                  <div class="user-box">
                    <input required="" name="username" type="text" maxlength="30"/>
                    <label>Username</label>
                  </div>
                  <div class="user-box">
                    <input required="" name="password" type="password" maxlength="6"/>
                    <label>Password</label>
                  </div>
                  <button type="submit" name="login">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Submit
                  </button>
                </form>
                <div class="container pt-3">
                  <div class="row">
                    <div class="col-12">
                      <span class="text-white">Sudah mempunyai akun?</span>
                      <span class="ps-1"><a href="{{ route('.login') }}">Masuk sekarang</a></span>
                    </div>
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
