@extends('shared.layout')

@section('title', 'Success')
@section('main')
    @include('partials.navbar')

    <div class="container">
        <div class="d-flex flex-column text-center">
            <p>Saved!</p>
            <a href="{{ route('items.index') }}">Click here to go back</a>
        </div>
    </div>

@endsection
