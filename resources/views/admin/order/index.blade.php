@extends('layouts.main')

@push('style')
  {{-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> --}}
@endpush

@section('body')
  @include('components.navbar_admin')
  @include('components.spasi')

  <!-- produk -->
  <section id="headerPesanan">
    <div class="container-fluid card shadow">
      <div class="row p-3">
        <div class="col-md-12">
          <h3>Pesanan</h3>
          <p>Informasi Pesanan Pembelian Produk</p>
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
                  <th class="col-md-4">Tanggal Pemesanan</th>
                  <th class="col-md-4">Nama Pemesan</th>
                  <th class="col-md-4">Action</th>
                  <th class="col-md-4">Comfirm</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                  <tr>
                    <th scope="row">1</th>
                    <td>2023-06-05</td>
                    <td>isra</td>
                    <td>
                      <a href="{{ route('admin.order.show', ['order' => $order->id]) }}"><span
                          class="badge text-bg-info">Informasi</span></a>
                      <a><span class="badge text-bg-danger" data-bs-toggle="modal"
                          data-bs-target="#deleteModal-{{ $order->id }}">Delete</span></a>
                    </td>
                    <td>
                      <button class="btn btn-sm bg-warning p-0">
                        <select class="bg-transparent border-0 no-icon px-3">
                          <option value="1" selected>padding</option>
                          <option value="2">Succes</option>
                        </select>
                      </button>
                    </td>
                  </tr>
                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal-{{ $order->id }}" tabindex="-1"
                    aria-labelledby="deleteModal-{{ $order->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="deleteModal-{{ $order->id }}Label">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">Apakah anda ingin menghapusnya {{ $order->name }}?</div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                          <form action="{{ route('admin.order.destroy', ['order' => $order->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-primary">Ya</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
