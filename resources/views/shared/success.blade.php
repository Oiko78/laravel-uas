@extends('shared.layout')

@section('title', 'Success')
@section('main')
    @include('partials.navbar')

    <div class="container">
        <div class="d-flex flex-column text-center">
            <p>Success</p>
            <p>We will contact you 1x24 hours</p>
            <a href="{{ route('items.index') }}">Click here to go back</a>
        </div>
    </div>

@endsection