@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="{{ url('/property/edit') }}" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" value="{{ $property->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="address">Address:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="address" value="{{ $property->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="city">City:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="city" value="{{ $property->city }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="state">State:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="state" value="{{ $property->state }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="zip">Zip:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="zip" value="{{ $property->zip }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="phone">Phone Number:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="phone" value="{{ $property->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="slug">Slug:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="slug" value="{{ $property->slug }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="latitude">Latitude:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="latitude" value="{{ $property->latitude }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="longitude">Longitude:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="longitude" value="{{ $property->longitude }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="url">Url:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="url" value="{{ $property->url }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="availability_username">Availability Username:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="availability_username" value="{{ $property->availability_username }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="availability_password">Availability Password:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="availability_password" value="{{ $property->availability_password }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="availability_identifier">Availability Identifier:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="availability_identifier" value="{{ $property->availability_identifier }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="availability_provider">Availability Provider:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="availability_provider" value="{{ $property->availability_provider }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="availability_structure">Availability Structure:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="availability_structure" value="{{ $property->availability_structure }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-1 col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $property->id }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
