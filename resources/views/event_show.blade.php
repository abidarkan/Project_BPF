@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">
        
        <!-- Header Section with "Back to Events" -->
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h6 class="text-dark font-weight-bold">{{ $event->title }}</h6>
                <a class="btn btn-dark text-white btn-sm" href="{{ route('events.index') }}">Back to Events</a>
            </div>
        </div>

        <!-- Event Detail Card Section -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-3">
                        <div class="row">
                            <!-- Event Details -->
                            <div class="col-12">
                                <div class="d-flex flex-column h-100">
                                    <h5 class="font-weight-bolder">{{ $event->title }}</h5>
                                    <p class="mb-4"><strong>Description:</strong> {{ $event->description }}</p>
                                    <p class="mb-4"><strong>Date:</strong> {{ \Illuminate\Support\Carbon::parse($event->date)->format('Y-m-d') }}</p>
                                    <p class="mb-4"><strong>Time:</strong> {{ \Illuminate\Support\Carbon::parse($event->time)->format('H:i') }}</p>
                                    <p class="mb-4"><strong>Location:</strong> {{ $event->location }}</p>
                                    <p class="text-muted text-sm mt-5"><strong>Last Updated:</strong> {{ $event->updated_at->diffForHumans() }}</p>
                                </div>
                            </div>

                            <!-- Optional Image Section for Event (if any) -->
                            <div class="col-12 text-center mt-3 mt-lg-0">
                                @if($event->image)
                                    <img class="w-100 position-relative z-index-2" src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}">
                                @else
                                    <img class="w-75 position-relative z-index-2" src="../assets/img/default-event.png" alt="event">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
    