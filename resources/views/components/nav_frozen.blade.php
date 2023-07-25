@extends('layouts.main')
<section>
  <div class="container-fluid p-0">
    <div class="row py-3">
      <div class="col-10 pe-0">
        <form class="d-flex" role="search">
          <button class="btn position-absolute" type="submit"><i class="bi bi-search"></i></button>
          <input class="form-control me-2 ps-5 rounded-3" type="search" placeholder="Search" />
        </form>
      </div>
      <div class="col-2 text-start">
        <button data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none">
          <i class="bi bi-cart fs-3"></i>
        </button>
      </div>
    </div>
    <div class="row shadow-sm mx-4 rounded-3 mb-3">
      <div class="col-6 text-center px-0">
        <a href="{{ route('users.chicken.index') }}">
          <div class="rounded-3 h-100 w-100 py-3">
            <img src="{{ asset('/images/catering.png') }}" alt="icon" height="30px" />
            <span class="fw-bold">Catering</span>
          </div>
        </a>
      </div>
      <div class="col-6 text-center px-0">
        <a href="{{ route('users.frozen.risol.index') }}">
          <div class="rounded-3 bg-orange h-100 w-100 pt-3">
            <img src="{{ asset('/images/frozen-food.png') }}" alt="icon" height="30px" />
            <span class="fw-bold">Frozen</span>
          </div>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
              <img src="{{ asset('/images/slide1.jpeg') }}" class="d-block w-100" alt="img" height="300px" />
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <img src="{{ asset('/images/slide2.jpeg') }}" class="d-block w-100" alt="img" height="300px" />
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <img src="{{ asset('/images/slide3.jpeg') }}" class="d-block w-100" alt="img" height="300px" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center font-txt text-white" style="font-size: 13px">
      <div class="col-6 my-3 px-1">
        <a href="{{ route('users.frozen.risol.index') }}">
          <div class="bg-white shadow-sm py-2 rounded-3">
            <img src="{{ asset('/images/risol.png') }}" alt="img" height="25px" />
            <span class="text-abu">Risol</span>
          </div>
        </a>
      </div>
      <div class="col-6 my-3 px-1">
        <a href="{{ route('users.frozen.sosis.index') }}">
          <div class="bg-white shadow-sm py-2 rounded-3">
            <img src="{{ asset('/images/sosis.png') }}" alt="img" height="25px" />
            <span class="txt-abu">Sosis</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
