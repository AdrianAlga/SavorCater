@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
@endpush

<section id="navbar" class="fixed-bottom">
  <div class="container-fluid">
    <div class="row text-center bg-abu-abu pt-2 font-txt small" style="box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3)">
      <div class="col-3">
        <a href="{{ route('users.food.index') }}">
          <i class="bi bi-search fs-2"></i>
          <p>Search</p>
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
