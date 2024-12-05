@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <!-- Article Content -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header bg-gradient-primary text-white">
                        <h4 class="mb-0">{{ $article->title }}</h4>
                    </div>
                    <div class="container">
                        <h1 class="mt-5">{{ $article->title }}</h1>
                        <p>{!! nl2br(e($article->content)) !!}</p>
                    </div>
                    <div>
                        
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

                <!-- Create Article Button -->

            </div>
        </div>
    </div>
@endsection
