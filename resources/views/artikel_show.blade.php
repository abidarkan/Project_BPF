@extends('layouts.user_type.auth')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <!-- Article Content -->
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header bg-gradient-primary text-white">
                     
                    </div>
                    <div class="container">
                        <h1 class="mt-5">{{ $article->title }}</h1>
                        <p>{!! nl2br(e($article->content)) !!}</p>
                    </div>
                    <div>
                        
                    </div>

                    <!-- Comments Section -->
                    

                <!-- Sidebar -->

                <!-- Create Article Button -->

            </div>
        </div>
    </div>
@endsection
