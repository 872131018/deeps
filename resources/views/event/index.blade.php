@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                    <span>Dashboard </span>
                    <a class="btn btn-primary" href="{{ url('/event/add') }}" role="button">Add</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Location</th>
                            {{--<th>Description</th>--}}
                            {{--<th>Address</th>--}}
                            {{--<th>City</th>--}}
                            {{--<th>State</th>--}}
                            {{--<th>Zip</th>--}}
                            {{--<th>Phone</th>--}}
                            {{--<th>Images</th>--}}
                            {{--<th>Latitude</th>--}}
                            {{--<th>Longitude</th>--}}
                            {{--<th>URL</th>--}}
                            <th>Start Date</th>
                            {{--<th>Start Time</th>--}}
                            <th>End Date</th>
                            {{--<th>End Time</th>--}}
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->category }}</td>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->location }}</td>
                                    {{--<td>{{ $event->description }}</td>--}}
                                    {{--<td>{{ $event->address }}</td>--}}
                                    {{--<td>{{ $event->city }}</td>--}}
                                    {{--<td>{{ $event->state }}</td>--}}
                                    {{--<td>{{ $event->zip }}</td>--}}
                                    {{--<td>{{ $event->phone }}</td>--}}
                                    {{--<td>{{ $event->images }}</td>--}}
                                    {{--<td>{{ $event->latitude }}</td>--}}
                                    {{--<td>{{ $event->longitude }}</td>--}}
                                    {{--<td>{{ $event->url }}</td>--}}
                                    <td>{{ $event->start_date }}</td>
                                    {{--<td>{{ $event->start_time }}</td>--}}
                                    <td>{{ $event->end_date }}</td>
                                    {{--<td>{{ $event->end_time }}</td>--}}
                                    <td>
                                        <a class="btn btn-info" href="{{ url('/event/edit') }}/{{ $event->id }}" role="button">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('/event/delete') }}/{{ $event->id }}" role="button">Delete</a>
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
