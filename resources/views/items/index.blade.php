@extends('shared.layout')

@section('title', 'Home')
@section('main')
    @include('partials.navbar')
    @include('partials.header')

    <!-- Section-->
    <section class="py-5">
        <div class="px-lg-5 container mt-5 px-4">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($items as $item)
                    <div class="col mb-5">
                        <a class="card h-100 text-decoration-none text-dark" href={{ "/items/{$item->id}" }}>
                            <img class="card-img-top" src="{{ asset('storage/images/item.jpg') }}" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{ $item->name }}</h5>
                                    {{ \App\Models\Item::format($item->price) }}
                                </div>
                            </div>
                            <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                                <div class="text-center">
                                    @if (auth()->user()->cart->items->find($item->id) != null)
                                        <form action="/cart" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <input class="form-control visually-hidden" name="item_id" type="text"
                                                value="{{ $item->id }}">
                                            <button class="btn btn-outline-danger mt-auto" type="submit">
                                                <i class="bi-trash-fill me-1"></i>
                                                Remove
                                            </button>
                                        </form>
                                    @else
                                        <form action="/cart" method="POST">
                                            @csrf

                                            <input class="form-control visually-hidden" name="item_id" type="text"
                                                value="{{ $item->id }}">
                                            <button class="btn btn-outline-dark mt-auto" type="submit">
                                                <i class="bi-cart-fill me-1"></i>
                                                Add to Cart
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{ $items->links() }}
            </div>

        </div>

    </section>
@endsection
