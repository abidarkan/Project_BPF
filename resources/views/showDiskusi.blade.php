@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-gradient-primary text-white">
                    <h4 class="mb-0">{{ $discussion->title }}</h4>
                </div>
                <div class="container">
                    <h1 class="mt-5">{{ $discussion->title }}</h1>
                    <p>{!! nl2br(e($discussion->content)) !!}</p>
                </div>

                <!-- Comments Section -->
                <div class="card">
                    <div class="card-header bg-gradient-secondary text-white">
                        <h5 class="mb-0">Comments</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($discussion->comments as $comment)
                                <li class="list-group-item d-flex align-items-center">
                                    <div>
                                        <h6 class="text-dark mb-1">{{ $comment->user->name }}</h6>
                                        <p class="mb-0 text-sm">{{ $comment->content }}</p>
                                        <span class="text-xs text-muted">Posted on: {{ $comment->created_at->format('M d, Y') }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Add Comment -->
                        <form action="{{ route('discussion-comments.store') }}" method="POST" class="mt-3">
                            @csrf
                            <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="content" placeholder="Write a comment..." required></textarea>
                            </div>
                            <button type="submit" class="btn bg-gradient-primary mt-2">Post Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
