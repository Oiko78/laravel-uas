@extends('shared.layout')

@section('title', 'Users')
@section('main')
    @include('partials.navbar')

    <div class="container">
        <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
            <h1 class="h2">Users</h1>
        </div>

        <table class="w-100 mb-0 table bg-white align-middle">
            <thead class="bg-light">
                <tr>
                    <th width="40%">User</th>
                    <th width="30%">Role</th>
                    <th width="30%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img
                                    class="rounded-circle" src={{ asset('storage/' . $user->display_picture) }}
                                    alt="" style="width: 45px; height: 45px" />
                                <div class="ms-3">
                                    <p class="fw-bold mb-0">{{ $user->first_name . ' ' . $user->last_name }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items center">
                                <p class="mb-0">{{ $user->role->name }}</p>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex gap-3">
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-outline-danger flex-shrink-0" type="submit">
                                        <i class="bi-trash-fill me-1"></i>
                                        Remove
                                    </button>
                                </form>
                                <form action="{{ route('users.update.role', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="input-group">
                                        <select class="form-select" id="slRole" name="role_id">
                                            <option selected disabled>Select a Role</option>
                                            <option value="1"
                                                {{ (old('role_id') ?? $user->role_id) == '1' ? 'selected' : '' }}>
                                                User</option>
                                            <option value="2"
                                                {{ (old('role_id') ?? $user->role_id) == '2' ? 'selected' : '' }}>
                                                Admin</option>
                                        </select>
                                        <button class="btn btn-success" type="submit">
                                            <i class="bi-check-circle me-1"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
