@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Event</div>
                <div class="card-body">
                    <form action="{{ url('/event/' . $event->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="title" class="col-form-label col-md-4">Title</label>
                        <div class="col-md-6">
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $event->title }}">
                            @error('title')
                                <div class="text-danger"><b>{{ $message }}</b></div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-form-label col-md-4">Description</label>
                        <div class="col-md-6">
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" cols="30" rows="10">{{ old('description') ?? $event->description }}</textarea>
                        @error('description')
                            <div class="text-danger"><b>{{ $message }}</b></div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-form-label col-md-4">Date</label>
                        <div class="col-md-6">
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') ?? $event->date }}" />
                        @error('date')
                            <div class="text-danger"><b>{{ $message }}</b></div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="time" class="col-form-label col-md-4">Time</label>
                        <div class="col-md-6">
                        <input type="time" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') ?? $event->time }}" />
                        @error('time')
                            <div class="text-danger"><b>{{ $message }}</b></div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="duration_days" class="col-form-label col-md-4">Duration days</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control @error('duration_days') is-invalid @enderror" name="duration_days" value="{{ old('duration_days') ?? $event->duration_days }}" />
                        @error('duration_days')
                            <div class="text-danger"><b>{{ $message }}</b></div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-form-label col-md-4">Location</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') ?? $event->location }}" />
                        @error('location')
                            <div class="text-danger"><b>{{ $message }}</b></div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="standard_price" class="col-form-label col-md-4">Standard price</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control @error('standard_price') is-invalid @enderror" name="standard_price" value="{{ old('standard_price') ?? $event->standard_price }}" />
                        @error('standard_price')
                            <div class="text-danger"><b>{{ $message }}</b></div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="capacity" class="col-form-label col-md-4">Capacity</label>
                        <div class="col-md-6">
                        <input type="text" class="form-control @error('capacity') is-invalid @enderror" name="capacity" value="{{ old('capacity') ?? $event->capacity }}" />
                        @error('capacity')
                            <div class="text-danger"><b>{{ $message }}</b></div>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                    <session></session>
                        <div class="col-md-8">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Session</th>
                                        <th>Time</th>
                                        <th>Location</th>
                                        <th>Speaker</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-secondary">Add session</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success">Update event</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection