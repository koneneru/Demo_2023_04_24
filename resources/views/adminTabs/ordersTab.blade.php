<div class="tab-pane fade show active" id="orders" role="tabpanel" aria-labelledby="orders-tab">
    @foreach ($orders as $order)
    <div class="card text-dark bg-light mb-3">
        <div class="card-header">
            <h5 class="card-title">
                Заказ №{{ $order[0]->id }} от {{ $order[0]->created_at }}
            </h5>
        </div>
        <div class="card-body">
            <div class="card-text"><strong>Заказчик: </strong>{{ $order[0]->user }}</div>
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
                    <div class="col-6">
                        <form action="{{ route('changeOrderStatus') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            
                            <input type="hidden" name="id" value="{{ $order[0]->id }}">
                            <input type="hidden" name="status" value="accepted">
                            <button class="btn btn-success w-100" type="submit">
                                Принять
                            </button>
                        </form>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-danger w-100" type="button" data-bs-toggle="collapse" data-bs-target="#rejectCollapse-{{ $order[0]->id }}" aria-expanded="false" aria-controls="rejectCollapse-{{ $order[0]->id }}">
                            Отклонить
                        </button>
                    </div>
                </div>
                <div class="collapse mt-1" id="rejectCollapse-{{ $order[0]->id }}">
                    <div class="card card-body">
                        <form action="{{ route('changeOrderStatus') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            
                            <input type="hidden" name="id" value="{{ $order[0]->id }}">
                            <input type="hidden" name="status" value="rejected">
                            <div class="mb-3">
                                <label for="AddCategoryModal" class="form-label"><strong>Причина отказа</strong></label>
                                <textarea name="rejectReason" class="form-control" id="AddCategoryModal" rows="3"></textarea>
                              </div>
                            <button class="btn btn-danger float-end" type="submit">Отклонить</button>
                        </form>
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
