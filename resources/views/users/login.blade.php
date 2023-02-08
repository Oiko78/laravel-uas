@extends('shared.layout')

@section('title', 'Login')
@section('main')
    @include('partials.navbar')
    @include('partials.header')

    <section class="w-100 d-flex justify-content-center mt-auto p-4">
        <form style="width: 25rem;" action="/login" method="POST">
            @csrf

            <div class="row mb-4">
                <div class="col">
                    <h1 class="fw-bold text-dark text-center">Login</h1>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input id="inpEmail" name="email" type="text" @class(['form-control', 'is-invalid' => $errors->get('email')]) placeholder="Email Address">
                <label for="inpEmail">Email address</label>
                @error('email')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-5">
                <input id="inpPassword" name="password" type="password" @class(['form-control', 'is-invalid' => $errors->get('password')]) placeholder="Password">
                <label class="form-label" for="inpPassword">Password</label>
                @error('password')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <button class="btn btn-dark btn-block w-100 mb-4" type="submit">@lang('globul.login_submit')</button>

            <div class="text-center">
                <p>
                    @lang('globul.login_account')
                    <a class="text-decoration-underline text-dark fw-bold" href="/register">
                        @lang('globul.login_register')
                    </a>
                </p>
            </div>
        </form>
    </section>
@endsection
