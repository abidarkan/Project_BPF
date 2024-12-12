@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Edit Article Form -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-gradient-primary text-white">
                    <h4 class="mb-0">Edit Artikel</h4>
                </div>
                <div class="card-body">
                    <!-- Form -->
                    <form action="{{ route('artikel.update', ['artikel' => $article->id]) }}" method="POST">
                        @csrf <!-- CSRF protection -->
                        @method('PUT')
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content', $article->content) }}</textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="tags" class="form-label">Tags</label>
                            <div id="tags">
                                @foreach($tags as $tag)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}" id="tag{{ $tag->id }}"
                                        {{ in_array($tag->id, $article->tags->pluck('id')->toArray()) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="tag{{ $tag->id }}">
                                            {{ $tag->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <button type="submit" class="btn bg-gradient-primary mt-4">Update Artikel</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card h-100 mb-4">
                <div class="card-header bg-gradient-primary text-white">
                    <h5 class="mb-0">Guidelines</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item border-0">
                            <p class="mb-0">- Provide a clear and concise title.</p>
                        </li>
                        <li class="list-group-item border-0">
                            <p class="mb-0">- Write engaging and informative content.</p>
                        </li>
                        <li class="list-group-item border-0">
                            <p class="mb-0">- Avoid using offensive language.</p>
                        </li>
                        <li class="list-group-item border-0">
                            <p class="mb-0">- Check for grammatical errors before publishing.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Create Article Button -->
            <div class="card h-100">
                <div class="card-header bg-gradient-secondary text-white">
                    <h5 class="mb-0">Admin Actions</h5>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center">
                    <a href="{{ route('artikel.create') }}" class="btn bg-gradient-primary">Back to Create</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
