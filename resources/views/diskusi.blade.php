@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Diskusi</h6>
                        <a class="btn btn-primary btn-sm ms-auto" href="{{ route('discussions.create') }}">Mulai Diskusi</a>
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
                                    @if ($discussions->count() > 0)
                                        @foreach ($discussions as $discussion)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('discussions.show', $discussion->id) }}" class="text-sm font-weight-bold text-dark">
                                                        {{ $discussion->title }}
                                                    </a>
                                                </td>
                                                <td>
                                                    @foreach($discussion->tags as $tag)
                                                        <span class="badge bg-primary text-white">{{ $tag->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div class="d-flex align-items-start flex-column justify-content-center">
                                                            @if($discussion->user)
                                                                <h6 class="mb-0 text-sm">{{ $discussion->user->name }}</h6>
                                                            @else
                                                                <h6 class="mb-0 text-sm">Unknown Author</h6>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-xs">{{ $discussion->comments->count() }}</td>
                                                <td class="text-xs">{{ $discussion->updated_at->diffForHumans() }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">No discussions found.</td>
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
