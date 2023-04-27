@extends('layouts.app')

@section('head')
    <title>{{ $product->title }}</title>
@endsection

@section('content')
    <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset($product->image) }}" class="img-fluid rounded-start img-cont" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title">{{ $product->title }}</h1>
                        <h3 class="card-text">{{ $product->price }} руб./унция</h3>
                        @auth
                            <div class="row">
                                @if (!$inCart)
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary col-md-3 offset-md-8" data-bs-toggle="modal" data-bs-target="#addCartModal">
                                        В корзину
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="addCartModal" tabindex="-1" aria-labelledby="addCartModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="addCartModalLabel">Добавление в корзину</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form id="addCartForm" action="{{ route('addCart') }}" method="POST">
                                                @csrf

                                                <input type="hidden" id="product" name="product" value="{{ $product->id }}">
                                                <div class="mb-3">
                                                    <label for="count" class="form-label">Введите количество</label>
                                                    <input type="number" class="form-control" id="count" name="count" min="1" max="{{ $product->count }}" value="1">
                                                </div>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                                <a class="btn btn-primary" href="{{ route('addCart') }}" role="button"
                                                onclick="event.preventDefault(); document.getElementById('addCartForm').submit();">Добавить</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                @else
                                    <a class="btn btn-primary col-md-3 offset-md-8" href="{{ route('cart') }}" role="button">В корзине</a>
                                @endif
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="card text-dark bg-light mb-3">
            <div class="card-header"><h3 class="card-title">Характеристики</h3></div>
            <div class="card-body details-list">
                <div class="row">
                    <div class="col-6">Страна-изготовитель</div>
                    <div class="col-6 text-end">{{ $product->country }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Категория</div>
                    <div class="col-6 text-end">{{ $product->category }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Вкус</div>
                    <div class="col-6 text-end">{{ $product->taste }}</div>
                </div>
                <div class="row">
                    <div class="col-6">Ингридиенты или основные ноты</div>
                    <div class="col-6 text-end">{{ $product->compound }}</div>
                </div>
            </div>
        </div>
        <div class="card text-dark bg-light mb-3">
            <div class="card-header"><h3 class="card-title">Описание</h3></div>
            <div class="card-body">
                <p class="card-text">{{ $product->description }}</p>
            </div>
        </div>
    </div>
@endsection
