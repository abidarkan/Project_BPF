@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Diskusi</h6>
                            <a class="btn btn-primary btn-sm ms-auto" href="/discussions/create">Mulai Diskusi</a>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Judul</th>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Tag</th>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Penulis</th>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Balasan</th>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aktivitas Terakhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="/discussions/1" class="text-sm font-weight-bold">Bagaimana cara mengimplementasikan autentikasi di Laravel?</a>
                                            </td>
                                            <td>
                                                <span class="badge bg-primary text-white">Laravel</span>
                                                <span class="badge bg-secondary text-white">Autentikasi</span>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="avatar me-3">
                                                        <img src="../assets/img/kal-visuals-square.jpg" alt="Penulis" class="border-radius-lg shadow">
                                                    </div>
                                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">John Doe</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-xs">15</span>
                                            </td>
                                            <td>
                                                <span class="text-xs">2 jam yang lalu</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/discussions/2" class="text-sm font-weight-bold">Praktik terbaik untuk migrasi basis data</a>
                                            </td>
                                            <td>
                                                <span class="badge bg-primary text-white">Basis Data</span>
                                                <span class="badge bg-secondary text-white">Praktik Terbaik</span>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="avatar me-3">
                                                        <img src="../assets/img/marie.jpg" alt="Penulis" class="border-radius-lg shadow">
                                                    </div>
                                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Marie Smith</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-xs">8</span>
                                            </td>
                                            <td>
                                                <span class="text-xs">5 jam yang lalu</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/discussions/3" class="text-sm font-weight-bold">Mengatasi kesalahan API di Flask</a>
                                            </td>
                                            <td>
                                                <span class="badge bg-primary text-white">Flask</span>
                                                <span class="badge bg-secondary text-white">API</span>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div class="avatar me-3">
                                                        <img src="../assets/img/team-4.jpg" alt="Penulis" class="border-radius-lg shadow">
                                                    </div>
                                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Peterson Clark</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-xs">10</span>
                                            </td>
                                            <td>
                                                <span class="text-xs">1 hari yang lalu</span>
                                            </td>
                                        </tr>
                                        <!-- Baris tambahan jika diperlukan -->
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
