@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a class="btn btn-primary" href="{{ url('/property/edit') }}" role="button">Edit Property</a>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Name</td>
                            <td>{{ $property->name }}</td>
                          </tr>
                          <tr>
                            <td>Address</td>
                            <td>{{ $property->address }}</td>
                          </tr>
                          <tr>
                            <td>City</td>
                            <td>{{ $property->city }}</td>
                          </tr>
                          <tr>
                            <td>State</td>
                            <td>{{ $property->state }}</td>
                          </tr>
                          <tr>
                            <td>Zip</td>
                            <td>{{ $property->zip }}</td>
                          </tr>
                          <tr>
                            <td>Phone Number</td>
                            <td>{{ $property->phone }}</td>
                          </tr>
                          <tr>
                            <td>Slug</td>
                            <td>{{ $property->slug }}</td>
                          </tr>
                          <tr>
                            <td>Latitude</td>
                            <td>{{ $property->latitude }}</td>
                          </tr>
                          <tr>
                            <td>Longitude</td>
                            <td>{{ $property->longitude }}</td>
                          </tr>
                          <tr>
                            <td>URL</td>
                            <td>{{ $property->url }}</td>
                          </tr>
                          <tr>
                            <td>Availability Username</td>
                            <td>{{ $property->availability_username }}</td>
                          </tr>
                          <tr>
                            <td>Availability Password</td>
                            <td>{{ $property->availability_username }}</td>
                          </tr>
                          <tr>
                            <td>Availability Identifier</td>
                            <td>{{ $property->availability_identifier }}</td>
                          </tr>
                          <tr>
                            <td>Availability Provider</td>
                            <td>{{ $property->availability_provider }}</td>
                          </tr>
                          <tr>
                            <td>Availability Structure</td>
                            <td>{{ $property->availability_structure }}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
