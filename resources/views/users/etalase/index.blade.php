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
          <button class="btn bg-orange text-white btn- w-100"><i class="bi bi-plus-lg"></i> Keranjang</button>
        </div>
        <div class="col-6">
          <a href="{{ route('users.checkout.index') }}">
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
              <div class="col-6 d-flex">
                <a href="{{ route('users.chicken.index') }}">
                  <h2><i class="bi bi-arrow-left text-dark"></i></h2>
                </a>
                <h4 class="font-txt fw-bold ms-3 py-1">Makanan</h4>
              </div>
              <div class="col-6 text-end">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none">
                  <i class="bi bi-cart fs-3"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center p-0">
                <div>
                  <img class="rounded-top-4" src="/images/ayam-pop.jpg" alt="img" height="600px" width="100%" />
                </div>
              </div>
            </div>
            <form action="">
              <div class="row shadow-sm p-3">
                <div class="col-12">
                  <h4 class="fw-bold">Ayam Pop</h4>
                </div>
                <div class="col-12">
                  <p class="fw-bold">Rp. 8.000,-</p>
                </div>
                <div class="col-12 text-warning d-flex fs-6">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <div class="text-dark ps-2"><span>4.6</span><span> (2,5k)</span></div>
                </div>
                <div class="col-6 py-3">
                  <p class="m-0 pb-2">Jumlah</p>
                  <div class="quantity-input">
                    <div class="quantity-btn minus">-</div>
                    <input type="number" min="0" value="1" />
                    <div class="quantity-btn2 plus">+</div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="container">
            <div class="row border shadow-sm mb-3 py-4">
              <div class="col-12 fw-bold">
                <p>Rincian Produk</p>
              </div>
              <div class="col-12">
                <div class="container">
                  <div class="row">
                    <div class="col-12 p-0">
                      <table class="table">
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
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row border py-4 shadow-sm">
              <div class="col-12">
                <p class="fw-bold fw-bold">Catatan:</p>
                <p class="txt-rata txt-spasi text-secondary">
                  Kami menyediakan layanan catering makanan yang berkualitas dan beragam, siap untuk memenuhi kebutuhan
                  acara Anda. Dari acara formal hingga pesta santai, kami memiliki menu yang dirancang khusus untuk
                  memuaskan selera setiap tamu Anda.
                  <br>
                  Pilihan hidangan kami mencakup berbagai masakan lokal dan internasional yang lezat dan menggugah selera.
                  Mulai dari hidangan pembuka yang segar dan menggugah selera, hidangan utama dengan daging berkualitas
                  tinggi dan bahan-bahan segar, hingga hidangan penutup yang manis dan lezat.
                  <br>
                  Setiap hidangan kami dipersiapkan dengan penuh perhatian oleh koki kami yang berpengalaman dan ahli
                  dalam menciptakan cita rasa yang tak terlupakan. Kami juga selalu mengutamakan kebersihan dan keamanan
                  pangan dalam setiap tahap persiapan makanan.
                  <br>
                  Kami menghadirkan pengalaman kuliner yang istimewa bagi tamu Anda dengan mengutamakan kualitas, rasa,
                  dan presentasi yang menarik. Tidak hanya itu, kami juga dapat menyesuaikan menu sesuai dengan kebutuhan
                  dan preferensi Anda, termasuk opsi vegetarian, makanan bebas gluten, atau masakan khusus lainnya.
                  <br>
                  Tak hanya menawarkan hidangan yang lezat, kami juga memberikan pelayanan yang ramah dan profesional,
                  siap membantu Anda dalam menyusun rencana catering yang sesuai dengan anggaran dan tema acara Anda.
                  <br>
                  Dengan layanan catering makanan kami, Anda dapat bersantai dan menikmati momen spesial bersama tamu-tamu
                  Anda tanpa harus khawatir tentang makanan. Percayakan kebutuhan catering Anda kepada kami, dan kami akan
                  memberikan pengalaman kuliner yang tak terlupakan bagi setiap tamu di acara Anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal keranjang -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                      <img src="{{ asset('/images/produk1.png') }}" alt="img" height="80px" width="100%" />
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="container h-100">
                      <div class="row align-items-end h-100">
                        <div class="col-12 txt-merah fw-bold fs-6">
                          <p>Whiskas 80gr</p>
                        </div>
                        <div class="col-12 fw-bold small">
                          <p>Rp.8.000</p>
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
  @push('script')
    <script src="{{ asset('/js/orderquantity.js') }}"></script>
  @endpush
@endsection
