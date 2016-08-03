@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <form action="{{ url('/locations/edit') }}/{{ $location->id }}" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="category">Location:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="category" value="{{ $location->category }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" value="{{ $location->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="address">Address:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="address" value="{{ $location->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="city">City:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="city" value="{{ $location->city }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="state">State:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="state" value="{{ $location->state }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="zip">Zip:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="zip" value="{{ $location->zip }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="phone">Phone:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="phone" value="{{ $location->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="fax">Fax:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="fax" value="{{ $location->fax }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="url">Url:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="url" value="{{ $location->url }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="latitude">Latitude:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="latitude" value="{{ $location->latitude }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="longitude">Longitude:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="longitude" value="{{ $location->longitude }}">
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
