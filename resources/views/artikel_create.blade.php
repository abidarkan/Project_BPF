@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Create Article Form -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-gradient-primary text-white">
                    <h4 class="mb-0">Create New Artikel</h4>
                </div>
                <div class="card-body">
                    <!-- Form -->
                    <form action="{{ route('artikel.store') }}" method="POST">
                        @csrf <!-- CSRF protection -->
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter article title" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="6" placeholder="Write the content here..." required></textarea>
                        </div>
                        <button type="submit" class="btn bg-gradient-primary mt-4">Publish Artikel</button>
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