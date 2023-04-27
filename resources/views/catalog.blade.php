@extends('layouts.app')

@section('head')
    <title>Каталог</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card text-dark bg-white mb-3">
                    <div class="card-header"><h5 class="card-title">Категории</h5></div>
                    <div class="card-body">
                        @foreach ($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check-{{ $category->name }}">
                                <label class="form-check-label card-text" for="check-{{ $category->name }}">
                                    {{ $category->title }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card text-dark bg-white mb-3">
                    <div class="card-body">
                        <label>
                            Упорядочить по:
                            <select class="form-select d-inline-block w-auto ms-1" aria-label="storeOrderSelect">
                                <option selected>новизне</option>
                                <option value="priceAsc">возростанию цены</option>
                                <option value="priceDesc">убыванию цены</option>
                                <option value="taste">вкусу</option>
                                <option value="country">стране-изготовителю</option>
                              </select>
                        </label>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset($product->image) }}" class="card-img-top img-cont" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title">{{ $product->title }}</h3>
                                    <h4 class="card-text">{{ $product->price }} руб./унция</h4>
                                </div>
                                <a class="btn btn-primary card-footer catalog-card-bottom" href="{{ route('product', ['name' => $product->name]) }}" role="button">Подробнее</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
