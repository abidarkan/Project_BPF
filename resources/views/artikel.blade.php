@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Diskusi</h6>
                            <a class="btn btn-primary btn-sm ms-auto" href="{{ route('artikel.create') }}">Mulai Diskusi</a>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                Judul</th>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                Tag</th>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                Penulis</th>
                                            {{-- <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                Balasan</th>
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                Aktivitas Terakhir</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($articles->count() > 0)
                                            @foreach ($articles as $article)
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('artikel.show', $article->id) }}"
                                                            class="text-sm font-weight-bold">
                                                            {{ $article->title }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary text-white">Tag1</span>
                                                        <span class="badge bg-secondary text-white">Tag2</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex px-2">
                                                            {{-- <div class="avatar me-3">
                                                                <img src="../assets/img/kal-visuals-square.jpg"
                                                                    alt="Penulis" class="border-radius-lg shadow">
                                                            </div> --}}
                                                            <div
                                                                class="d-flex align-items-start flex-column justify-content-center">
                                                                @if ($article->user)
                                                                    <h6 class="mb-0 text-sm">{{ $article->user->name }}</h6>
                                                                    <!-- Displaying the author's name -->
                                                                @else
                                                                    <h6 class="mb-0 text-sm">Unknown Author</h6>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                    {{-- <td>
                                                        <span class="text-xs">15</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-xs">2 jam yang lalu</span>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5">No articles found.</td>
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
