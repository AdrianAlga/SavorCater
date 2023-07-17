@extends('layouts.main')

@push('style')
<link rel="stylesheet" href="{{ asset('/css/checkout.css') }}">

@endpush

@section('body')
  <section id="navbar">
    <div class="container-fluid fixed-bottom">
      <div class="row justify-content-center text-center bg-abu-abu py-3 font-txt small"
        style="box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3)">
        <div class="col-6">
          <h5 class="fw-bold">Rp 35.000</h5>
        </div>
        <div class="col-6">
          <a href="{{ route('users.succes_grooming.index') }}">
            <button class="btn bg-orange text-white btn- w-100">Pesan Sekarang</button>
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
                <a href="{{ route('users.grooming.index') }}">
                  <h2><i class="bi bi-arrow-left text-dark"></i></h2>
                </a>
                <h4 class="font-txt fw-bold ms-3 py-1">Grooming</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <div>
            <img src="/images/product3.png" alt="img" height="200px" width="100%" />
          </div>
        </div>
      </div>
      <form action="">
        <div class="row shadow-sm p-3">
          <div class="col-12">
            <h4 class="fw-bold">Kucing Persia</h4>
          </div>
          <div class="col-5 col-md-2 text-decoration-line-through">
            <p>Rp. 50.000</p>
          </div>
          <div class="col-6 col-md-10 px-0">
            <p class="fw-bold">Rp. 35.000,-</p>
          </div>
          <div class="col-12 text-warning d-flex fs-6">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-half"></i>
            <div class="ps-2 text-secondary small pt-1">
              <p>125 Reviews</p>
            </div>
          </div>
        </div>
      </form>
      <div class="row border shadow-sm my-3 py-4">
        <div class="col-12 fw-bold">
          <p>Rincian Produk</p>
        </div>
        <div class="col-12">
          <form action="">
            <div class="container">
              <div class="row">
                <div class="col-6"><img src="/images/iconAnimalcare.png" alt="icon" /></div>
                <div class="col-6">
                  <h5 class="fw-bold">Animal Care</h5>
                </div>
              </div>
              <div class="row py-4">
                <div class="col-10">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" />
                  </div>
                </div>
              </div>
              <div class="row py-4">
                <div class="col-12">
                  <div class="mb-3">
                    <label for="time" class="form-label">Jam</label>
                    <div id="time">
                      <div class="container-fluid">
                        <div class="row justify-content-center text-center">
                          <div class="col-md-2 col-6 mt-2">
                            <input type="radio" class="btn-check" name="options-outlined" id="time1"
                              autocomplete="off" />
                            <label class="btn btn-sm btn-outline-info w-75" for="time1">08.00 PM</label>
                          </div>
                          <div class="col-md-2 col-6 mt-2">
                            <input type="radio" class="btn-check" name="options-outlined" id="time2"
                              autocomplete="off" />
                            <label class="btn btn-sm btn-outline-info w-75" for="time2">09.00 PM</label>
                          </div>
                          <div class="col-md-2 col-6 mt-2">
                            <input type="radio" class="btn-check" name="options-outlined" id="time3"
                              autocomplete="off" />
                            <label class="btn btn-sm btn-outline-info w-75" for="time3">10.00 PM</label>
                          </div>
                          <div class="col-md-2 col-6 mt-2">
                            <input type="radio" class="btn-check" name="options-outlined" id="time4"
                              autocomplete="off" />
                            <label class="btn btn-sm btn-outline-info w-75" for="time4">11.00 PM</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row border py-4 shadow-sm">
        <div class="col-12">
          <p class="fw-bold fw-bold">Catatan:</p>
          <p class="txt-rata txt-spasi text-secondary">
            Grooming pada sebuah pet shop adalah proses perawatan dan perbaikan penampilan hewan peliharaan, seperti
            anjing, kucing, dan hewan lainnya. Grooming melibatkan berbagai kegiatan, termasuk mandi, memotong kuku,
            memotong bulu,
            membersihkan telinga, serta merapikan bulu dan bulu hewan. Tujuan utama grooming adalah menjaga kebersihan dan
            kesehatan hewan peliharaan, serta meningkatkan penampilan mereka. Selain itu, grooming juga dapat membantu
            mengurangi risiko infestasi kutu dan penyakit kulit, serta menghilangkan kotoran dan bau yang tidak
            diinginkan. Pada pet shop, para ahli grooming yang terlatih dan berpengalaman akan menggunakan teknik dan
            produk yang tepat
            untuk merawat hewan peliharaan dengan aman dan nyaman. Grooming pada pet shop merupakan salah satu cara untuk
            menjaga kesejahteraan dan kebahagiaan hewan peliharaan, sehingga mereka dapat hidup dengan nyaman dan sehat.
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection
