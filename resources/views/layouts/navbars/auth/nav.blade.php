<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm">
                    <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                </li>
                <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                    {{ str_replace('-', ' ', Request::path()) }}
                </li>
            </ol>
            <h6 class="font-weight-bolder mb-0 text-capitalize">{{ str_replace('-', ' ', Request::path()) }}</h6>
        </nav>

        <!-- Right Section of Navbar -->
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">
            <ul class="navbar-nav justify-content-end">
                <!-- User Profile Section -->
                <li class="nav-item dropdown d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0 d-flex align-items-center" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('storage/default.png') }}" 
                             alt="Profile Picture" 
                             class="rounded-circle me-2" 
                             style="width: 40px; height: 40px; object-fit: cover;">
                        <span class="d-none d-md-inline font-weight-bold">{{ Auth::user()->name }}</span>
                        <i class="fa fa-chevron-down ms-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3" aria-labelledby="profileDropdown">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/profile') }}">
                                <i class="fa fa-user me-2"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('/logout') }}">
                                <i class="fa fa-sign-out-alt me-2"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
