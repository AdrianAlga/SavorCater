@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
@endpush

<section id="navbar" class="fixed-bottom">
  {{-- WhatsApp --}}
  <div class="container-fluid" style="">
    <div class="row col-12">
      <div class="mb-3">
        <img class="whatsapp" src="{{ asset('images/whatsapp.png') }}" alt="img" height="50px"
          onclick="openWhatsApp()">
      </div>
    </div>
  </div>
  {{-- fitur --}}
  <div class="container-fluid">
    <div class="row text-center bg-abu-abu pt-2 font-txt small" style="box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3)">
      <div class="col-3">
        <a href="{{ route('users.chicken.index') }}">
          <i class="bi bi-house-door fs-2"></i>
          <p>Home</p>
        </a>
      </div>
      <div class="col-3">
        <a href="{{ route('users.inbox.index') }}">
          <i class="bi bi-inbox fs-2"></i>
          <p>Inbox</p>
        </a>
      </div>
      <div class="col-3">
        <a href="{{ route('users.booking.index') }}">
          <i class="bi bi-calendar2-week fs-2"></i>
          <p>Booking</p>
        </a>
      </div>
      <div class="col-3">
        <a href="{{ route('users.profile.index') }}">
          <i class="bi bi-person-circle fs-2"></i>
          <p>Profile</p>
        </a>
      </div>
    </div>
  </div>
</section>
