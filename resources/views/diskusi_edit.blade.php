@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">
        
        <!-- Header Section with "Edit Diskusi" -->
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h6 class="text-dark font-weight-bold">Edit Diskusi</h6>
                <a class="btn btn-dark text-white btn-sm" href="{{ route('discussions.index') }}">Back to Diskusi</a>
            </div>
        </div>

        <!-- Discussion Editing Form Section -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-3">
                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Discussion Editing Form -->
                        <form action="{{ route('discussions.update', ['discussion' => $discussion->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Judul Diskusi</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $discussion->title) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Konten Diskusi</label>
                                <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content', $discussion->content) }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Update Diskusi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
