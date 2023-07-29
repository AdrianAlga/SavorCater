@extends('layouts.main')

@section('body')
  <div id="etalase">
    <div class="container-fluid">
      <div class="row my-3">
        <div class="col-6">
          <a href="{{ route('home') }}">
            <h2><i class="bi bi-arrow-left text-dark"></i></h2>
          </a>
        </div>
      </div>
      <div class="row shadow border rounded-3 p-5 justify-content-around">
        <div class="col-md-12 text-center mb-5">
          <h1>CHECKOUT</h1>
        </div>
        <div class="col-md-7">
          <table class="table align-middle text-center border">
            <thead class="align-content-center">
              <tr>
                <th scope="col">Image</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Jumlah Porsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <td class="col-2"><img src="{{ asset('images/ayam-pop.jpg') }}" alt="img" height="50px" /></td>
                <td class="col-5">Ayam Pop </td>
                <td class="col-5">30</td>
                <td class="col-3">20.000</td>
                <td class="col-1"><button type="button" class="btn-close text-dark" style="font-size: 10px"
                    aria-label="Close"></button></td>
              </tr>
              <tr>
                <td class="col-2"><img src="{{ asset('images/ayam-pop.jpg') }}" alt="img" height="50px" /></td>
                <td class="col-5">Ayam Pop </td>
                <td class="col-5">30</td>
                <td class="col-3">200.000</td>
                <td class="col-1"><button type="button" class="btn-close text-dark" style="font-size: 10px"
                    aria-label="Close"></button></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td class="fw-bold">Total</td>
                <td colspan="4" class="fw-bold text-end">Rp. 20.000</td>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="col-md-5 border shadow p-3">
          <h3 class="mb-5 text-center">Informasi Pembeli:</h3>
          <div class="user-checkout">
            <form action="">
              <div class="form-group">
                <label for="fieldName">Nama Lengkap</label>
                <input type="text" class="form-control" name="fieldName" id="fieldName" aria-describedby="namaHelp"
                  required />
                @error('fieldName')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="fieldName">Alamat Email</label>
                <input type="email" class="form-control" name="fieldName" id="fieldName" aria-describedby="emailHelp" required />
                @error('fieldName')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="fieldName">Telepon</label>
                <input type="number" class="form-control" name="fieldName" id="fieldName" aria-describedby="noHPHelp" required />
                @error('fieldName')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="fieldName">Alamat Lengkap</label>
                <textarea class="form-control" name="fieldName" id="fieldName" rows="3" required></textarea>
              </div>
              <div class="col-md my-3">
                <p>Pilih Pembayaran</p>
              </div>
              <div class="col-md-12 pb-4">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Virtual
                        Account</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="row">
                          <div class="col-6 col-md-10 p-3">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment1" />
                              <label class="form-check-label" for="payment1">
                                <div><img src="{{ asset('/images/payment1.png') }}" alt="dm"
                                    class="img-fluid border-bottom border-3" style="height: 50px" /></div>
                              </label>
                            </div>
                          </div>
                          <div class="col-6 col-md-10 p-3">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment2" />
                              <label class="form-check-label" for="payment2">
                                <div><img src="{{ asset('/images/payment2.png') }}" alt="dm"
                                    class="img-fluid border-bottom border-3" style="height: 50px" /></div>
                              </label>
                            </div>
                          </div>
                          <div class="col-6 col-md-10 p-3">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment3" />
                              <label class="form-check-label" for="payment3">
                                <div><img src="{{ asset('/images/payment3.png') }}" alt="dm"
                                    class="img-fluid border-bottom border-3" style="height: 50px" /></div>
                              </label>
                            </div>
                          </div>
                          <div class="col-6 col-md-10 p-3">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="payment4" />
                              <label class="form-check-label" for="payment4">
                                <div><img src="{{ asset('/images/payment4.png') }}" alt="dm"
                                    class="img-fluid border-bottom border-3" style="height: 50px" /></div>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <a href="{{ route('payment') }}">
                  <button type="button" class="btn btn-info fw-bold text-white w-100">Checkout</button>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @push('script')
    <script src="{{ asset('/js/script.js') }}"></script>
  @endpush
@endsection
