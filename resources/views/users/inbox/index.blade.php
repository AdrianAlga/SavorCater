@extends('layouts.main')

@section('body')
  @include('components.navbar')
  <section id="product" class="pb-5">
    <div class="container font-txt mb-4">
      <div class="row my-3">
        <div class="col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-2">
              </div>
              <div class="col-8 text-center">
                <h4 class="font-txt fw-bold ms-3 py-1">Chat</h4>
              </div>
              <div class="col-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="border border-end-0 border-start-0 border-top-0 mb-3">
        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="bg-transparent border-0">
          <div class="row">
            <div class="col-2">
              <div>
                <img src="/images/Background1.png" alt="img" height="50px" width="50px" class="rounded-circle" />
              </div>
            </div>
            <div class="col-10">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-start">
                    <h5>Pet Shoop</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-start">Hello apa kabar, yuk checkout lagi</div>
                </div>
              </div>
            </div>
          </div>
        </button>
      </div>
      <div class="border border-end-0 border-start-0 border-top-0 mb-3">
        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="bg-transparent border-0">
          <div class="row">
            <div class="col-2">
              <div>
                <img src="/images/Background1.png" alt="img" height="50px" width="50px" class="rounded-circle" />
              </div>
            </div>
            <div class="col-10">
              <div class="container">
                <div class="row">
                  <div class="col-12 text-start">
                    <h5>Pet Shoop</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-start">Hello apa kabar, yuk checkout lagi</div>
                </div>
              </div>
            </div>
          </div>
        </button>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <div class="container">
              <div class="row">
                <div class="col-12 text-center">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Notifikasi</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body">Hello apa kabar, yuk checkout lagi jangan lupa belanja</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
