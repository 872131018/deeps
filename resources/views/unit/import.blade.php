@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <form action="{{ url('/unit/import') }}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="category">CSV:</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control" name="import">
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
