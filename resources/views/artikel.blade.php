@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">
        
        <!-- Header Section with "Buat Artikel Baru" -->
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h6 class="text-dark font-weight-bold">Artikel</h6>
                <a class="btn btn-dark text-white btn-sm" href="{{ route('artikel.create') }}">Buat Artikel Baru</a>
            </div>
        </div>

        <!-- Articles Card Section -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0 table-striped">
                                <thead class="text-uppercase text-secondary text-xs font-weight-bold" style="background-color: #f2f2f2;">
                                    <tr>
                                        <th>Judul</th>
                                        <th>Tag</th>
                                        <th>Penulis</th>
                                        <th>Aktivitas Terakhir</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($articles->count() > 0)
                                        @foreach ($articles as $article)
                                            <tr>
                                                <!-- Title Column -->
                                                <td>
                                                    <a href="{{ route('artikel.show', $article->id) }}"
                                                        class="text-dark text-sm font-weight-bold">
                                                        {{ $article->title }}
                                                    </a>
                                                </td>
                                                
                                                <!-- Tags Section -->
                                                <td>
                                                    @foreach($article->tags as $tag)
                                                        <span class="badge bg-secondary text-white">{{ $tag->name }}</span>
                                                    @endforeach
                                                </td>
                                                
                                                <!-- Author Column -->
                                                <td>
                                                    @if($article->user)
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-sm text-muted">{{ $article->user->name }}</span>
                                                        </div>
                                                    @else
                                                        <span class="text-sm text-muted">Unknown Author</span>
                                                    @endif
                                                </td>
                                                
                                                <!-- Last Updated Column -->
                                                <td class="text-muted text-sm">
                                                    {{ $article->updated_at->diffForHumans() }}
                                                </td>

                                                <!-- Actions Column -->
                                                <td>
                                                    <a href="{{ route('artikel.edit', ['artikel' => $article->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{ route('artikel.destroy', ['artikel' => $article->id]) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <!-- Empty State for No Articles -->
                                        <tr>
                                            <td colspan="5" class="text-muted text-center py-3">
                                                Belum ada artikel. Mulai dengan membuat yang baru!
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
