@extends('layouts.app')

@section('head')
    <title>Где нас найти?</title>
@endsection

@section('content')
    <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-5 d-flex align-items-center">
                <img src="{{ asset('img/location/map.png') }}" class="img-fluid rounded-start h-100 w-100 img-cont" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                    <h1 class="card-title">Наши контакты</h1>
                    <div class="row">
                        <div class="col-md-3 card-text"><strong>Адрес:</strong></div>
                        <div class="col-md-9 card-text">г. Екатеринбург, ул. Савушкина, д. 141, ТЦ «Меркурий», 1 этаж</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 card-text"><strong>Время работы:</strong></div>
                        <div class="col-md-9 card-text">с 10-00 до 22-00</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 card-text"><strong>Телефон:</strong></div>
                        <div class="col-md-9 card-text">+7 (962) 684-04-52</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 card-text"><strong>email:</strong></div>
                        <div class="col-md-9 card-text">sales@my-tea.ru</div>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
