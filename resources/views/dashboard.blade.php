@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div class="container-fluid py-4">

            <!-- Recent Discussion Section -->
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-1 pt-2 text-bold">Recent Discussion</p>
                                        @if($discussions->isNotEmpty())
                                            <h5 class="font-weight-bolder">
                                                <a href="{{ route('discussions.show', $discussions->first()->id) }}" class="text-decoration-none">
                                                    {{ $discussions->first()->title }}
                                                </a>
                                            </h5>
                                        @else
                                            <p class="mb-4">No recent discussions available.</p>
                                        @endif
                                        <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('discussions.index') }}">
                                            All discussions
                                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-center mt-3 mt-lg-0">
                                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                        {{-- <img class="w-75 position-relative z-index-2" src="../assets/img/announcement.png" alt="announcement"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Article Section -->
            <div class="row mt-4">
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-1 pt-2 text-bold">Recent Article</p>
                                        @if($articles->isNotEmpty())
                                            <h5 class="font-weight-bolder">
                                                <a href="{{ route('artikel.show', $articles->first()->id) }}" class="text-decoration-none">
                                                    {{ $articles->first()->title }}
                                                </a>
                                            </h5>
                                        @else
                                            <p class="mb-5">No recent articles available.</p>
                                        @endif
                                        <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('artikel.index') }}">
                                            All articles
                                            <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                        {{-- <img class="w-100 position-relative z-index-2 pt-4" src="../assets/img/Artikel.jpg" alt="rocket"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card h-100 p-3 shadow-sm border-0">
                        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
                            <span class="mask bg-gradient-dark"></span>
                            <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                                <h5 class="text-white font-weight-bolder mb-4 pt-2">Recent Event</h5>
                                @if($events->isNotEmpty())
                                    <p class="text-white">
                                        <a href="{{ route('event_show', ['event' => $events->first()->event_id]) }}" class="text-decoration-none text-white">
                                            {{ $events->first()->title }}
                                        </a>
                                    </p>
                                @else
                                    <p class="text-white">No recent events available.</p>
                                @endif
                                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="{{ route('events.index') }}">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

@push('dashboard')
    <script>
        // Existing JavaScript code
    </script>
@endpush
