@extends('shared.layout')

@section('title', 'Profile')
@section('main')
    @include('partials.navbar')
    <section class="py-5">
        <div class="px-lg-5 container my-5 px-4">
            <div class="row gx-4 gx-lg-5">
                <div class="col-6 pt-1">
                    <img class="card-img-top mb-md-0 mb-5" src="{{ asset('storage/' . $user->display_picture) }}"
                        alt="..." />
                </div>
                <form class="col-6" action="{{ route('users.show', auth()->user()->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col">
                            <div>
                                <label class="form-label" for="inpFirstName">First Name</label>
                                <input id="inpFirstName" name="first_name" type="text"
                                    value="{{ old('first_name') ?? $user->first_name }}" @class(['form-control', 'is-invalid' => $errors->get('first_name')])
                                    placeholder="First Name">
                                @error('first_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col">
                            <div>
                                <label class="form-label" for="inpLastName">Last Name</label>
                                <input id="inpLastName" name="last_name" type="text"
                                    value="{{ old('last_name') ?? $user->last_name }}" @class(['form-control', 'is-invalid' => $errors->get('last_name')])
                                    placeholder="Last Name">
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
                                <input id="inpEmail" name="email" type="text"
                                    value="{{ old('email') ?? $user->email }}" @class(['form-control', 'is-invalid' => $errors->get('email')])
                                    placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col">
                            <label class="form-label" for="slRole">Role</label>
                            <select id="slRole" name="role_id" @class(['form-select', 'is-invalid' => $errors->get('role_id')])>
                                <option selected disabled>Select a Role</option>
                                <option value="1" {{ (old('role_id') ?? $user->role_id) == '1' ? 'selected' : '' }}>
                                    User</option>
                                <option value="2" {{ (old('role_id') ?? $user->role_id) == '2' ? 'selected' : '' }}>
                                    Admin</option>
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
                                <input id="inpDisplayPicture" name="display_picture" type="file"
                                    @class([
                                        'form-control',
                                        'is-invalid' => $errors->get('display_picture'),
                                    ])>
                                @error('display_picture')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
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
                                        ])
                                        {{ (old('gender_id') ?? $user->gender_id) == '1' ? 'checked' : '' }}>
                                    <span>Male</span>
                                </label>
                                <label class="list-group-item list-group-item-action border-top rounded-0 d-flex gap-2"
                                    for="rbFemaleGender">
                                    <input id="rbFemaleGender" name="gender_id" type="radio" value="2"
                                        @class([
                                            'form-check-input flex-shrink-0',
                                            'is-invalid' => $errors->get('gender_id'),
                                        ])
                                        {{ (old('gender_id') ?? $user->gender_id) == '2' ? 'checked' : '' }}>
                                    <span>Female</span>
                                </label>
                            </div>
                            @error('gender_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex mb-2">
                        <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                            <i class="bi-check-circle me-1"></i>
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
