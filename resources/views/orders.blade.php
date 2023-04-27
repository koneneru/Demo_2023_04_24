@extends('layouts.app')

@section('head')
    <title>Заказы</title>
@endsection

@section('content')
    <div class="container">
        @foreach ($orders as $order)
            <div class="card text-dark bg-light mb-3">
                <div class="card-header">
                    <h5 class="card-title">
                        Заказ №{{ $order[0]->id }} от {{ $order[0]->created_at }}
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 col-md-2 col-lg-1 card-text"><strong>Товары: </strong></div>
                        <div class="col-8 col-md-10 col-lg-11">
                            @foreach ($order as $product)
                                <div class="card-text">
                                    {{ $product->count }}x
                                    {{ $product->product }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-text">
                        <strong>Статус: </strong>
                        {{ $order[0]->statusTitle }} ({{ $order[0]->updated_at }})
                    </div>
                    @if ($order[0]->status == 'new')
                        <div class="row">
                            <div class="col-12">
                                <!-- Button trigger modal -->
                                <button class="btn btn-danger w-100" type="submit" data-bs-toggle="modal" data-bs-target="#deleteOrderModal">
                                    Отменить
                                </button><!-- Modal -->
                                <div class="modal fade" id="deleteOrderModal" tabindex="-1" aria-labelledby="deleteOrderModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="deleteOrderModalLabel">Удаление заказа</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Вы уверены, что хотите удалить заказ №{{ $order[0]->id }} от {{ $order[0]->created_at }}
                                            <form id="deleteOrderForm" action="{{ route('deleteOrder') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <input type="hidden" name="orderId" value="{{ $order[0]->id }}">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                            <a class="btn btn-danger" href="{{ route('deleteOrder') }}" role="button"
                                            onclick="event.preventDefault(); document.getElementById('deleteOrderForm').submit();">Удалить</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    @endif
                    @if ($order[0]->status == 'rejected')
                        <div class="card-text"><strong>Причина отказа</strong></div>
                        <div class="card-text">{{ $order[0]->reason }}</div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection
