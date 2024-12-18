@extends('layouts.user_type.auth')

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div class="container-fluid py-4">

            <!-- Header Section with "Create New Event" -->
            <div class="row mb-4">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h6 class="text-dark font-weight-bold">Events</h6>
                    <a class="btn btn-dark text-white btn-sm" href="{{ route('event_create') }}">Create New Event</a>
                </div>
            </div>

            <!-- Events Card Section -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0 table-striped">
                                    <thead class="text-uppercase text-secondary text-xs font-weight-bold"
                                        style="background-color: #f2f2f2;">
                                        <tr>
                                            <th>Event Title</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Location</th>
                                            <th>Last Activity</th>
                                            @if (Auth::check() && Auth::user()->role === 'admin')
                                                <th>Actions</th>
                                            @endif

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($events->count() > 0)
                                            @foreach ($events as $event)
                                                <tr>
                                                    <!-- Title Column -->
                                                    <td>
                                                        <a href="{{ route('event_show', ['event' => $event->event_id]) }}"
                                                            class="text-dark text-sm font-weight-bold">
                                                            {{ $event->title }}
                                                        </a>
                                                    </td>

                                                    <!-- Description Column -->
                                                    <td>
                                                        {{ \Illuminate\Support\Str::limit($event->description, 50, '...') }}
                                                    </td>

                                                    <!-- Date Column -->
                                                    <td>
                                                        {{ $event->date }}
                                                    </td>

                                                    <!-- Time Column -->
                                                    <td>
                                                        {{ $event->time }}
                                                    </td>

                                                    <!-- Location Column -->
                                                    <td>
                                                        {{ $event->location }}
                                                    </td>

                                                    <!-- Last Updated Column -->
                                                    <td class="text-muted text-sm">
                                                        {{ $event->updated_at->diffForHumans() }}
                                                    </td>

                                                    @if (Auth::check() && Auth::user()->role === 'admin')
                                                        <!-- Actions Column -->
                                                        <td>
                                                            <a href="{{ route('event_edit', ['event' => $event->event_id]) }}"
                                                                class="btn btn-primary btn-sm">Edit</a>
                                                            <form
                                                                action="{{ route('event_destroy', ['event' => $event->event_id]) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm">Delete</button>
                                                            </form>
                                                        </td>
                                                    @endif


                                                </tr>
                                            @endforeach
                                        @else
                                            <!-- Empty State for No Events -->
                                            <tr>
                                                <td colspan="7" class="text-muted text-center py-3">
                                                    No events yet. Start by creating a new one!
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
