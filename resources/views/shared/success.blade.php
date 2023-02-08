@extends('shared.layout')

@section('title', 'Success')
@section('main')
    @include('partials.navbar')

    <div class="container">
        <div class="d-flex flex-column text-center">
            <p>@lang('globul.success_title')</p>
            <p>@lang('globul.success_desc')</p>
            <a href="{{ route('items.index') }}">@lang('globul.success_redirect')</a>
        </div>
    </div>

@endsection
