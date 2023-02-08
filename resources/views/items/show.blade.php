@extends('shared.layout')

@section('title', 'Item Detail')
@section('main')
    @include('partials.navbar')

    <section class="py-5">
        <div class="px-lg-5 container my-5 px-4">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-md-0 mb-5" src="{{ asset('storage/images/item.jpg') }}" alt="..." />
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $item->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span>{{ \App\Models\Item::format($item->price) }}</span>
                    </div>
                    <p class="lead">{{ $item->description }}</p>
                    <div class="d-flex">
                        @if (auth()->user()->cart->items->find($item->id) != null)
                            <form action="/cart" method="POST">
                                @csrf
                                @method('DELETE')

                                <input class="form-control visually-hidden" name="item_id" type="text"
                                    value="{{ $item->id }}">
                                <button class="btn btn-outline-danger flex-shrink-0" type="submit">
                                    <i class="bi-trash-fill me-1"></i>
                                    @lang('globul.items_remove')
                                </button>
                            </form>
                        @else
                            <form action="/cart" method="POST">
                                @csrf
                                <input class="form-control visually-hidden" name="item_id" type="text"
                                    value="{{ $item->id }}">
                                <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                    @lang('globul.items_add')
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
