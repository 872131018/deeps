@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <form action="{{ url('/amenity/add') }}" method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="category">Category:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="category" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Name:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="description">Description:</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="description" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-delegate="gallery_create">Create Gallery</button>
                            <label class="control-label col-sm-3" for="images">Images:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="images" value="">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10" id="gallery"></div>
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
