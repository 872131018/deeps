@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!
                    <form action="{{ url('/unit/edit') }}/{{ $unit->id }}" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="unit">Unit:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="unit" value="{{ $unit->unit }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="floor">Floor:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="floor" value="{{ $unit->floor }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="building">Building:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="building" value="{{ $unit->building }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="floorplan">Floorplan:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="floorplan" value="{{ $unit->floorplan }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="price">Price:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="price" value="{{ $unit->price }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="price_override">Price Override:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="price_override" value="{{ $unit->price_override }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="available_status">Available Status:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="available_status" value="{{ $unit->available_status }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="available_date">Available Date:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="available_date" value="{{ $unit->available_date }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="disabled">Disabled:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="disabled" value="{{ $unit->disabled }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="description">Description:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="description" value="{{ $unit->description }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="images">Images:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="images" value="{{ $unit->images }}">
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
