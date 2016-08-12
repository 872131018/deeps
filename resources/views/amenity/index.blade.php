@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Dashboard </span>
                    <a class="btn btn-primary" href="{{ url('/amenity/add') }}" role="button">Add</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Description</th>
                            {{--<th>Images</th>--}}
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($amenities as $amenity)
                              <tr>
                                <td>{{ $amenity->category }}</td>
                                <td>{{ $amenity->name }}</td>
                                <td>{{ $amenity->description }}</td>
                                {{--<td>{{ $amenity->images }}</td>--}}
                                <td>
                                    <a class="btn btn-info" href="{{ url('/amenity/edit') }}/{{ $amenity->id }}" role="button">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{ url('/amenity/delete') }}/{{ $amenity->id }}" role="button">Delete</a>
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
