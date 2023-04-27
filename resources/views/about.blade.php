@extends('layouts.app')

@section('head')
    <title>О нас</title>
@endsection

@section('content')
    <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4 col-lg-3 offset-lg-1 d-flex align-items-center">
                <img src="{{ asset('img/logo_old.png') }}" class="img-fluid rounded-start img-cont" alt="...">
              </div>
              <div class="col-md-8 col-lg-7">
                <div class="card-body">
                  <h1 class="card-title">Чайная лавка</h1>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
        </div>
        <div class="card text-dark bg-light mb-3">
            <div class="card-header"><h5 class="card-title">Новинки</h5></div>
                <div class="card-body"><div id="newestCarousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#newestCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#newestCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#newestCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#newestCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      <button type="button" data-bs-target="#newestCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($products as $product)
                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="{{ asset($product->image) }}" class="d-block w-100 bg-white img-cont" alt="...">
                                <div class="carousel-caption d-none d-md-block bg-dark opacity-75 text-white">
                                    <h5>{{ $product->title }}</h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#newestCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#newestCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </div>
@endsection
