@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">

        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h6 class="text-dark font-weight-bold">User Management</h6>
            </div>
        </div>

        <!-- Users Table Card Section -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0 table-striped">
                                <thead class="text-uppercase text-secondary text-xs font-weight-bold" style="background-color: #f2f2f2;">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->count() > 0)
                                        @foreach ($users as $user)
                                            <tr>
                                                <!-- Name Column -->
                                                <td class="text-sm font-weight-bold">{{ $user->name }}</td>
                                                
                                                <!-- Email Column -->
                                                <td class="text-sm">{{ $user->email }}</td>
                                                
                                                <!-- Role Column -->
                                                <td class="text-sm">
                                                    <form action="{{ route('users.updateRole', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <select name="role" class="form-control form-control-sm" onchange="this.form.submit()">
                                                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                            <option value="guest" {{ $user->role == 'guest' ? 'selected' : '' }}>Guest</option>
                                                        </select>
                                                    </form>
                                                </td>

                                                <!-- Actions Column -->
                                                <td>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <!-- Empty State for No Users -->
                                        <tr>
                                            <td colspan="4" class="text-muted text-center py-3">
                                                No users found.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
