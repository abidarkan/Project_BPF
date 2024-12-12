@extends('layouts.user_type.auth')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">
        
        <!-- Header Section with "Edit Event" -->
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h6 class="text-dark font-weight-bold">Edit Event</h6>
                <a class="btn btn-dark text-white btn-sm" href="{{ route('events.index') }}">Back to Events</a>
            </div>
        </div>

        <!-- Event Editing Form Section -->
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

                        <!-- Event Editing Form -->
                        <form action="{{ route('event_update', ['event' => $event->event_id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Event Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event->title) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $event->description) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $event->date) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="time" class="form-label">Time</label>
                                <input type="time" class="form-control" id="time" name="time" value="{{ old('time', $event->time) }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $event->location) }}" required>
                            </div>
                            <button type="submit" class="btn btn-dark">Update Event</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
