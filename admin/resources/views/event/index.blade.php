@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-2 d-flex justify-content-end">
    <a href="/admin/event/create" class="btn btn-success">Add event</a>
    </div>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Event</th>
            <th>Date</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse($events as $event)
        <tr>
            <td><a href="/admin/event/{{ $event->id }}">{{ $event->title }}</a></td>
            <td>{{ $event->date }}</td>
            <td>{{ $event->standard_price }}</td>
            <td>
                <a href="/admin/event/{{ $event->id }}/attendee" class="btn btn-primary">Attendee list</a>
                <a href="/admin/event/{{ $event->id }}/rating" class="btn btn-secondary">Rating Diagram</a>
            </td>
        </tr>
    @empty
        <p>Events not found</p>
    @endforelse
    </tbody>
    </table>
</div>
@endsection