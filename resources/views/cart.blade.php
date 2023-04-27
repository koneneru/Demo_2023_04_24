@extends('layouts.app')

@section('head')
    <title>Корзина</title>
@endsection

@section('content')
    <div class="container">
        <div class="card text-dark bg-light mb-3">
            @if ($cart->isEmpty())
                <div class="card-body">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <h2 class="card-text text-center">В корзине ничего нет</h2>
                        </div>
                    </div>
                </div>
            @else
                <div class="card-body">
                    @foreach ($cart as $product)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-4 offset-1 col-md-4">
                                <img src="{{ asset($product->image) }}" class="img-fluid rounded-start img-cont" alt="...">
                            </div>
                            <div class="col-5 offset-1 col-md-6">
                                <h5 class="card-title">{{ $product->title }}</h5>
                            </div>
                            <div class="col-5 offset-1 col-md-2">
                                <h4 class="card-text">{{ $product->count }}X</h4>
                            </div>
                            <div class="col-5 col-md-2">
                                <h4 class="card-text text-end">{{ $product->price }}/унция</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <form id="addOrderForm" action="{{ route('addOrder') }}" method="POST">
                        @csrf
    
                        <div class="mb-3">
                            <a class="btn btn-primary" href="{{ route('addOrder') }}" role="button"
                            onclick="event.preventDefault(); document.getElementById('addOrderForm').submit();">Заказать</a>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
@endsection
