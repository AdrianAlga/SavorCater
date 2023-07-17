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
              <div class="col-6 d-flex">
                <a href="{{ route('users.food.index') }}">
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
        <div class="col-12 text-center">
          <div>
            <img src="/images/checkout.png" alt="img" height="200px" width="100%" />
          </div>
        </div>
      </div>
      <form action="">
        <div class="row shadow-sm p-3">
          <div class="col-12">
            <h4 class="fw-bold">Whiskas 80gr</h4>
          </div>
          <div class="col-5 col-md-2 text-decoration-line-through">
            <p>Rp. 100.000,-</p>
          </div>
          <div class="col-6 col-md-10 px-0">
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
            <p class="m-0 pb-2">Pilih variasi (2 Rasa)</p>
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" />
            <label class="btn btn-sm btn-outline-warning" for="option1">Tuna</label>
            <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off " />
            <label class="btn btn-sm btn-outline-warning" for="option2">Mackerel</label>
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
      <div class="row border shadow-sm my-3 py-4">
        <div class="col-12 fw-bold">
          <p>Rincian Produk</p>
        </div>
        <div class="col-12">
          <div class="container">
            <div class="row">
              <div class="col-6">Stok</div>
              <div class="col-6">255</div>
            </div>
            <div class="row">
              <div class="col-6">Usia</div>
              <div class="col-6">Anak Kucing</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row border py-4 shadow-sm">
        <div class="col-12">
          <p class="fw-bold fw-bold">Catatan:</p>
          <p class="txt-rata txt-spasi text-secondary">
            Whiskas pouch sudah berubah gramasinya, dari 85 gram jadi sisa 80 gram. Kemasan juga berubah ukuran, panjang
            kemasan bertambah 3mm dan tingginya berkurang 2mm. Posisi robekan juga naik dari 21mm ke 18mm. Mohon
            pemaklumannya,
            soalnya dari pabrik barang barunya sudah begitu semua, dan stok kami semua yang baru.. Membeli = Setuju bahwa
            berat netto nya adalah 80 gram saat ini. Terima kasih. Whiskas junior pouch adalah salah satu makanan kucing
            yang
            diformulasikan khusus untuk kucing berusia 0-12 bulan. Pada usia tersebut, kucing sangat rentan dan sensitif,
            sehingga membutuhkan makanan khusus. Whiskas dibuat dengan nutrisi lengkap dan seimbang agar dapat memenuhi
            gizi
            harian lengkap yang baik untuk sistem kekebalan tubuh. Makanan basah ini mengandung vitamin, mineral, kalsium,
            taurine dengan proporsi yang sesuai. Whiskas dengan cita rasa tuna menjadi salah satu makanan favorit bagi
            kitten.
            Makanan ini sangat baik diberikan pada kitten kesayangan Anda, agar kitten dapat tumbuh menjadi kucing dewasa
            yang sehat, kuat dengan tampilan dan bulu yang lebat. Makanan ini bertekstur lembut, beraroma lezat dan mudah
            dicerna oleh kitten. Manfaat Whiskas Junior: 1. Mengandung nutrisi lengkap dan seimbang. 2. Baik untuk tulang,
            sendi dan gigi. 3. Menjaga kulit agar tetap sehat dan lembut. 4. Membantu dalam pertumbuhan kucing agar dapat
            menjadi kucing dewasa yang sehat. Note: Tersedia berbagai varian rasa yang berbeda, harap menghubungi Costumer
            Service kami untuk pilihan varian yang diinginkan atau akan kami kirimkan secara random sesuai stok yang
            tersedia.
            Untuk mengetahui stok dan rasa yang tersedia, silahkan hubungi CS kami. Terima kasih.
          </p>
        </div>
      </div>
      <!-- Modal keranjang -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
