@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-gradient-primary text-white">
                    <h4 class="mb-0">Create New Article</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('articles.store') }}" method="POST"  > 
                        @csrf
                        <div class="form-group">
                            <label for="title" class="form-label">Article Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter article title" value="{{ old('title') }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="content" rows="8" class="form-control" placeholder="Enter article content" required>{{ old('content') }}</textarea>
                        </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn bg-gradient-primary">Create Article</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
