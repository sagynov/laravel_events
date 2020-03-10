@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <strong>{{ $event->title }}</strong>
                        <a href="{{ url('/event/'.$event->id.'/edit') }}" class="btn btn-primary">Edit event</a>
                    </div>
                    <div class="card-body">
                    <p>{{ $event->description }}</p>
                    <strong>Sessions</strong>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Room</th>
                                <th>Speaker</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($event->sessions as $session)
                            <tr>
                                <td>{{ $session->title }}</td>
                                <td>{{ $session->room }}</td>
                                <td>{{ $session->speaker }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection