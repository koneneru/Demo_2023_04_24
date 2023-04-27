@extends('layouts.app')

@section('head')
    <title>Панель администратора</title>
@endsection

@section('content')
    <div class="container">
        <ul class="nav nav-tabs mb-3" id="adminTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="true">Заказы</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab" aria-controls="products" aria-selected="false">Товары</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="categories-tab" data-bs-toggle="tab" data-bs-target="#categories" type="button" role="tab" aria-controls="categories" aria-selected="false">Категории</button>
            </li>
        </ul>
        <div class="tab-content" id="adminTabContent">
            @include('adminTabs.ordersTab')
            @include('adminTabs.productsTab')
            @include('adminTabs.categoriesTab')
        </div>
    </div>
@endsection
