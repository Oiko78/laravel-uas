@extends('shared.layout')

@section('main')

    @include('partials.navbar')

    <div class="container">
        <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
            <h1 class="h2">Your Cart</h1>
        </div>

        @if (count(auth()->user()->cart->items) == 0)
            <p style="padding: 0 1rem;">You have no products in cart!</p>
        @else
            <table class="w-100 mb-0 table bg-white align-middle">
                <thead class="bg-light">
                    <tr>
                        <th width="60%">Item</th>
                        <th width="20%">Price</th>
                        <th width="20%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->cart->items as $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img
                                        class="rounded-circle" src={{ asset("storage/{$item->image}") }} alt=""
                                        style="width: 45px; height: 45px" />
                                    <div class="ms-3">
                                        <p class="fw-bold mb-0">{{ $item->name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-0">IDR {{ $item->price }}</p>
                            </td>
                            <td>
                                <form id="{{ $item->id }}" action="/cart" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input class="form-control" name="item_id" type="text" value="{{ $item->id }}"
                                        hidden>
                                    <button class="btn btn-sm btn-danger w-100" form="{{ $item->id }}" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td class="d-flex gap-3">
                            <p class="fw-bold mb-0">Grand Total</p>
                            <p class="fw-normal mb-0">IDR
                                {{ auth()->user()->cart->items->sum(fn($item) => $item->price) }}
                            </p>
                        </td>
                        <td>
                            <form action="{{ route('cart.checkout') }}" method="POST">
                                @csrf

                                <button class="w-100 btn btn-dark" type="submit">Checkout</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endif
    </div>

@endsection
