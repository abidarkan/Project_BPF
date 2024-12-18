@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div class="container-fluid py-4">

            <!-- Header Section with "Mulai Diskusi" -->
            <div class="row mb-3">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h6 class="text-dark font-weight-bold">Diskusi</h6>
                    <a class="btn btn-dark text-white btn-sm" href="{{ route('discussions.create') }}">Mulai Diskusi</a>
                </div>
            </div>

            <!-- Discussion Table Card Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0 table-striped">
                                    <thead class="text-uppercase text-secondary text-xs font-weight-bolder"
                                        style="background-color: #f2f2f2;">
                                        <tr>
                                            <th>Judul</th>
                                            <th>Tag</th>
                                            <th>Penulis</th>
                                            <th>Balasan</th>
                                            <th>Aktivitas Terakhir</th>
                                            @if (Auth::check() && Auth::user()->role === 'admin')
                                                <th>Actions</th>
                                            @endif

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($discussions->count() > 0)
                                            @foreach ($discussions as $discussion)
                                                <tr>
                                                    <!-- Title -->
                                                    <td>
                                                        <a href="{{ route('discussions.show', $discussion->id) }}"
                                                            class="text-dark text-sm font-weight-bold">
                                                            {{ $discussion->title }}
                                                        </a>
                                                    </td>

                                                    <!-- Tags Section -->
                                                    <td>
                                                        @foreach ($discussion->tags as $tag)
                                                            <span
                                                                class="badge bg-secondary text-white">{{ $tag->name }}</span>
                                                        @endforeach
                                                    </td>

                                                    <!-- Author Info -->
                                                    <td>
                                                        @if ($discussion->user)
                                                            <div class="d-flex align-items-center">
                                                                <span
                                                                    class="text-sm text-muted">{{ $discussion->user->name }}</span>
                                                            </div>
                                                        @else
                                                            <span class="text-sm text-muted">Unknown Author</span>
                                                        @endif
                                                    </td>

                                                    <!-- Comments Count -->
                                                    <td class="text-center text-sm">
                                                        {{ $discussion->comments->count() }}
                                                    </td>

                                                    <!-- Last Activity -->
                                                    <td class="text-muted text-sm">
                                                        {{ $discussion->updated_at->diffForHumans() }}
                                                    </td>

                                                    <!-- Actions Column -->

                                                    @if (Auth::check() && Auth::user()->role === 'admin')
                                                        <td>
                                                            <a href="{{ route('discussions.edit', ['discussion' => $discussion->id]) }}"
                                                                class="btn btn-primary btn-sm">Edit</a>
                                                            <form
                                                                action="{{ route('discussions.destroy', ['discussion' => $discussion->id]) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">Delete</button>
                                                            </form>
                                                        </td>
                                                    @endif

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6" class="text-muted text-center py-3">
                                                    Belum ada diskusi. Mulai dengan membuat yang baru!
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
