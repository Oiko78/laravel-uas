@extends('shared.layout')

@section('title', 'Success')
@section('main')
    @include('partials.navbar')

    <div class="container">
        <div class="d-flex flex-column text-center">
            <p>@lang('globul.saved_title')</p>
            <a href="{{ route('items.index') }}">@lang('globul.saved_redirect')</a>
        </div>
    </div>

@endsection
