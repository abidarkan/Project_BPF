@extends('layouts.user_type.auth')

@section('content')
<div class="container-fluid py-4" style="font-family: 'Arial', sans-serif; color: #333;">

    <!-- Discussion and Comments Section -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4 shadow-sm" style="border: 1px solid #33333300; border-radius: 8px;">

                <!-- Discussion Title Section -->
                <div class="card-header text-white text-center" 
                     style="background-color: #333; border-radius: 8px 8px 0 0; font-size: 24px; font-weight: bold;">
                   
                </div>
                
                <!-- Discussion Content Section -->
                <div class="container p-4" style="background-color: #f8f8f8; border-radius: 0 0 8px 8px;">
                    <h2 class="mt-2 text-dark">{{ $discussion->title }}</h2>
                    <p class="text-dark text-sm">{!! nl2br(e($discussion->content)) !!}</p>

                    <!-- Comments Section -->
                    <div class="card mt-4 shadow-sm" style="border: 1px solid #5c3a3a00; border-radius: 8px;">
                        <div class="card-header text-white text-center" style="background-color: #b2b2b2; border-radius: 8px 8px 0 0;">
                            <h5 class="mb-0" style="color: #ffffff">Comments</h5>
                        </div>
                        <div class="card-body bg-white" style="border-radius: 0 0 8px 8px;">
                            <ul class="list-group">
                                @forelse ($discussion->comments as $comment)
                                    <li class="list-group-item d-flex align-items-center border-light" style="border-radius: 5px; border: 1px solid #ddd;">
                                        <div>
                                            <h6 class="text-dark mb-1">{{ $comment->user->name }}</h6>
                                            <p class="mb-0 text-sm text-muted">{{ $comment->comment }}</p>
                                            <span class="text-xs text-muted">Posted on: {{ $comment->created_at->format('M d, Y') }}</span>
                                        </div>
                                    </li>
                                @empty
                                    <li class="list-group-item text-muted text-sm text-center">No comments yet. Be the first to comment!</li>
                                @endforelse
                            </ul>

                            <!-- Comment Submission Form -->
                            <form action="{{ route('discussion-comments.store') }}" method="POST" class="mt-3">
                                @csrf
                                <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">
                                <div class="form-group">
                                    <textarea 
                                        class="form-control border-dark rounded-3" 
                                        rows="3" 
                                        name="comment" 
                                        placeholder="Write your response here..." 
                                        required
                                    ></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark text-white mt-2 rounded-3">Post Comment</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
@endsection
