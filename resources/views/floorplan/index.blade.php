@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Dashboard </span>
                    <a class="btn btn-primary" href="{{ url('/floorplan/import') }}" role="button">Import</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Floorplan</th>
                            <th>Bedrooms</th>
                            <th>Bathrooms</th>
                            <th>Den</th>
                            <th>Loft</th>
                            <th>Penthouse</th>
                            <th>Townhome</th>
                            {{--<th>Area Min</th>
                            <th>Area Max</th>
                            <th>Description</th>
                            <th>Images</th>--}}
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($floorplans as $floorplan)
                              <tr>
                                <td>{{ $floorplan->floorplan }}</td>
                                <td>{{ $floorplan->bedrooms }}</td>
                                <td>{{ $floorplan->bathrooms }}</td>
                                <td>{{ $floorplan->den }}</td>
                                <td>{{ $floorplan->loft }}</td>
                                <td>{{ $floorplan->penthouse }}</td>
                                <td>{{ $floorplan->townhome }}</td>
                                {{--<td>{{ $floorplan->area_min }}</td>
                                <td>{{ $floorplan->area_max }}</td>
                                <td>{{ $unit->description }}</td>
                                <td>{{ $unit->images }}</td>--}}
                                <td>
                                    <a class="btn btn-primary" href="{{ url('/floorplan/edit') }}/{{ $floorplan->id }}" role="button">Edit</a>
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
