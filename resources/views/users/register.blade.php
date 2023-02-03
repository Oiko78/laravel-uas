@extends('shared.layout')

@section('title', 'Register')
@section('main')
    @include('partials.header')

    <section class="w-100 d-flex justify-content-center mt-auto p-4">
        <form style="width: 30rem;" action="/register" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <div class="col">
                    <h1 class="fw-bold text-dark text-center">Register</h1>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div>
                        <label class="form-label" for="inpFirstName">First Name</label>
                        <input id="inpFirstName" name="first_name" type="text" value="{{ old('first_name') }}"
                            @class(['form-control', 'is-invalid' => $errors->get('first_name')]) placeholder="First Name">
                        @error('first_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label class="form-label" for="inpLastName">Last Name</label>
                        <input id="inpLastName" name="last_name" type="text" value="{{ old('last_name') }}"
                            @class(['form-control', 'is-invalid' => $errors->get('last_name')]) placeholder="Last Name">
                        @error('last_name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div>
                        <label class="form-label" for="inpEmail">Email</label>
                        <input id="inpEmail" name="email" type="text" value="{{ old('email') }}"
                            @class(['form-control', 'is-invalid' => $errors->get('email')]) placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <label class="form-label" for="slRole">Role</label>
                    <select id="slRole" name="role_id" @class(['form-select', 'is-invalid' => $errors->get('role_id')])>
                        <option selected disabled>Select a Role</option>
                        <option value="1" {{ old('role_id') === '1' ? 'selected' : '' }}>User</option>
                        <option value="2" {{ old('role_id') === '2' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div>
                        <label class="form-label" for="inpPassword">Password</label>
                        <input id="inpPassword" name="password" type="password" @class(['form-control', 'is-invalid' => $errors->get('password')])
                            placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col">
                    <div>
                        <label class="form-label" for="inpPasswordConfirmation">Password Confirmation</label>
                        <input id="inpPasswordConfirmation" name="password_confirmation" type="password"
                            @class(['form-control', 'is-invalid' => $errors->get('password')]) placeholder="Password Confirmation">
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <div>
                        <label class="form-label" for="inpDisplayPicture">Display Picture</label>
                        <input id="inpDisplayPicture" name="display_picture" type="file" @class(['form-control', 'is-invalid' => $errors->get('email')])>
                        @error('display_picture')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col">
                    <label class="form-label">Gender</label>
                    <div @class([
                        'list-group d-flex flex-row',
                        'is-invalid' => $errors->get('gender_id'),
                    ])>
                        <label class="list-group-item list-group-item-action border-top rounded-0 d-flex gap-2"
                            for="rbMaleGender">
                            <input id="rbMaleGender" name="gender_id" type="radio" value="1"
                                @class([
                                    'form-check-input flex-shrink-0',
                                    'is-invalid' => $errors->get('gender_id'),
                                ]) {{ old('gender_id') === '1' ? 'checked' : '' }}>
                            <span>Male</span>
                        </label>
                        <label class="list-group-item list-group-item-action border-top rounded-0 d-flex gap-2"
                            for="rbFemaleGender">
                            <input id="rbFemaleGender" name="gender_id" type="radio" value="2"
                                @class([
                                    'form-check-input flex-shrink-0',
                                    'is-invalid' => $errors->get('gender_id'),
                                ]) {{ old('gender_id') === '2' ? 'checked' : '' }}>
                            <span>Female</span>
                        </label>
                    </div>
                    @error('gender_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="d-flex mb-2">
                <button class="btn btn-dark btn-block w-75 mx-auto" type="submit">Sign up</button>
            </div>

            <div class="text-center">
                <p>
                    Already have an account?
                    <a class="text-decoration-underline text-dark fw-bold" href="/login">
                        click here to sign in
                    </a>
                </p>
            </div>
        </form>
    </section>
@endsection
