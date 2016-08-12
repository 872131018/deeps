@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <a class="btn btn-primary" href="{{ url('/location/add') }}" role="button">Add</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Phone</th>
                            {{--<th>Fax</th>--}}
                            {{--<th>URL</th>--}}
                            {{--<th>Latitude</th>--}}
                            {{--<th>Longitude</th>--}}
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                                <tr>
                                    <td>{{ $location->category }}</td>
                                    <td>{{ $location->name }}</td>
                                    <td>{{ $location->address }}</td>
                                    <td>{{ $location->city }}</td>
                                    <td>{{ $location->phone }}</td>
                                    {{--<td>{{ $location->fax }}</td>--}}
                                    {{--<td>{{ $location->url }}</td>--}}
                                    {{--<td>{{ $location->latitude }}</td>--}}
                                    {{--<td>{{ $location->longitude }}</td>--}}
                                    <td>
                                        <a class="btn btn-info" href="{{ url('/location/edit') }}/{{ $location->id }}" role="button">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('/location/delete') }}/{{ $location->id }}" role="button">Delete</a>
                                    </td>
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
