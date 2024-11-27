@extends('layouts.user_type.auth')

@section('content')
    <div class="row">
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold">Announcement</p>
                                <h5 class="font-weight-bolder">(Judul Announcement)</h5>
                                <p class="mb-4">(Isi Announcement)</p>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href="javascript:;">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center mt-3 mt-lg-0">
                            <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                <img class="w-75 position-relative z-index-2" src="../assets/img/announcement.png"
                                    alt="announcement">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold">Article</p>
                                <h5 class="font-weight-bolder">(Judul)</h5>
                                <p class="mb-5">(isi)</p>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href="javascript:;">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                            <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                <img class="w-100 position-relative z-index-2 pt-4" src="../assets/img/Artikel.jpg"
                                    alt="rocket">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card h-100 p-3">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                    style="background-image: url('../assets/img/ivancik.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Event</h5>
                        <p class="text-white">(isi event)</p>
                        <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                            Read More
                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('dashboard')
    <script>
        // Existing JavaScript code
    </script>
@endpush
