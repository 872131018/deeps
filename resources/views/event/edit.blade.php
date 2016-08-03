@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <form action="{{ url('/events/edit') }}/{{ $event->id }}" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="category">Category:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="category" value="{{ $event->category }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" value="{{ $event->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="location">Location:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="location" value="{{ $event->location }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="description">Description:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="description" value="{{ $event->description }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="address">Address:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="address" value="{{ $event->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="city">City:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="city" value="{{ $event->city }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="state">State:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="state" value="{{ $event->state }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="zip">Zip:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="zip" value="{{ $event->zip }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="phone">Phone:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="phone" value="{{ $event->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="images">Images:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="images" value="{{ $event->images }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="latitude">Latitude:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="latitude" value="{{ $event->latitude }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="longitude">Longitude:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="longitude" value="{{ $event->longitude }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="url">Url:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="url" value="{{ $event->url }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="start_date">Start Date:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="start_date" value="{{ $event->start_date }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="start_time">Start Time:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="start_time" value="{{ $event->start_time }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="end_date">End Date:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="end_date" value="{{ $event->end_date }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="end_time">End Time:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="end_time" value="{{ $event->end_time }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
