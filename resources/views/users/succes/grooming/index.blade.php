@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/succes.css') }}">
@endpush

@section('body')
  <section id="succes">
    <div class="container h-100 bg-orange">
      <div class="row h-100 align-items-center text-center text-white">
        <div class="col-12">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-12 py-5">
                <div><img src="/images/iconsucces.png" alt="icon" /></div>
              </div>
              <div class="col-12">
                <h3>Reservasi anda Telah Sukses</h3>
              </div>
              <div class="col-12">
                <p>Terima kasih telah mempercayakan Animal Care untuk segala kebutuhan hewan peliharaan Anda</p>
                <p>Kami berharap anda datang tepat waktu untuk menitipkan hewan kesayangan anda</p>
              </div>
              <div class="col-12">
                <h5>
                  <div class="badge bg-info rounded-4 p-2 px-4"><i class="bi bi-clock"></i> Kamis 9 September 1:30 PM
                  </div>
                </h5>
              </div>
              <div class="col-10 col-md-6 py-5">
                <a href="{{ route('users.grooming.index') }}">
                  <button class="btn bg-white txt-orange w-100 rounded-4">Kembali</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
