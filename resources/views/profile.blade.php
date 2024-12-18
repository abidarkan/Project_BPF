@extends('layouts.user_type.auth')

@section('content')
<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <div class="container-fluid">
        
        <!-- User Profile Section -->
        <div class="card card-body blur shadow-blur mx-4 mt-4 overflow-hidden">
            <div class="row gx-4 align-items-center">
                <!-- Profile Image -->
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture" class="rounded-circle">
                    </div>
                </div>

                <!-- User Info -->
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                        <p class="mb-0 font-weight-bold text-sm"> {{ Auth::user()->role }}</p>
                    </div>
                </div>

                <!-- Edit Options -->
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0"></div>
                </div>
            </div>
        </div>

        <!-- Profile Information Section -->
        <div class="d-flex justify-content-center align-items-center mt-4">
            <div class="col-12 col-md-6">
                <div class="card h-100">
                    <div class="card-body p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 ps-0 pt-0 text-sm">
                                <strong class="text-dark">Full Name:</strong> &nbsp; {{ Auth::user()->name }}
                            </li>
                            <li class="list-group-item border-0 ps-0 text-sm">
                                <strong class="text-dark">Email:</strong> &nbsp; {{ Auth::user()->email }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth.footer')
</div>
@endsection
