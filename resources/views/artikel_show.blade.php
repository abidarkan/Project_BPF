@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Artikel Content -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-gradient-primary text-white">
                    <h4 class="mb-0">{{ $artikel->title }}</h4>
                </div>
                <div class="card-body">
                    <p class="text-muted">Published on: <span class="text-dark">{{ $artikel->created_at->format('F d, Y') }}</span></p>
                    <p>{{ $artikel->content }}</p>
                </div>
            </div>

            <!-- Comments Section -->
            <div class="card">
                <div class="card-header bg-gradient-secondary text-white">
                    <h5 class="mb-0">Comments</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <!-- Example Comments -->
                        <li class="list-group-item d-flex align-items-center">
                            <div>
                                <h6 class="text-dark mb-1">John Doe</h6>
                                <p class="mb-0 text-sm">This is a great article! Really enjoyed the insights.</p>
                                <span class="text-xs text-muted">Posted on: March 02, 2023</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <div>
                                <h6 class="text-dark mb-1">Jane Smith</h6>
                                <p class="mb-0 text-sm">I found the details about the topic very helpful. Thank you!</p>
                                <span class="text-xs text-muted">Posted on: March 03, 2023</span>
                            </div>
                        </li>
                    </ul>

                    <!-- Add Comment -->
                    <form class="mt-3">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Write a comment..."></textarea>
                        </div>
                        <button type="submit" class="btn bg-gradient-primary mt-2">Post Comment</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <div class="card h-100 mb-4">
                <div class="card-header bg-gradient-primary text-white">
                    <h5 class="mb-0">Related Articles</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <!-- Replace with dynamic related articles -->
                        <li class="list-group-item border-0">
                            <a href="#" class="text-dark font-weight-bold">Understanding the Basics of Web Development</a>
                            <p class="text-xs text-muted mb-0">Published on: February 10, 2023</p>
                        </li>
                        <li class="list-group-item border-0">
                            <a href="#" class="text-dark font-weight-bold">Top 10 Tips for Effective Coding Practices</a>
                            <p class="text-xs text-muted mb-0">Published on: January 25, 2023</p>
                        </li>
                        <li class="list-group-item border-0">
                            <a href="#" class="text-dark font-weight-bold">How to Build Responsive Websites</a>
                            <p class="text-xs text-muted mb-0">Published on: December 15, 2022</p>
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
                    <a href="{{ route('artikel.create') }}" class="btn bg-gradient-primary">Create New Artikel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
