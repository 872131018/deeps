@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Dashboard </span>
                    <a class="btn btn-primary" href="{{ url('/unit/import') }}" role="button">Import</a>
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Unit</th>
                            <th>Floor</th>
                            <th>Building</th>
                            <th>Floorplan</th>
                            <th>Price</th>
                            {{--<th>Price Override</th>
                            <th>Available Status</th>--}}
                            <th>Available Date</th>
                            <th>Disabled</th>
                            {{--<th>Description</th>
                            <th>Images</th>--}}
                            <th>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $unit)
                              <tr>
                                <td>{{ $unit->unit }}</td>
                                <td>{{ $unit->floor }}</td>
                                <td>{{ $unit->building }}</td>
                                <td>{{ $unit->floorplan }}</td>
                                <td>{{ $unit->price }}</td>
                                {{--<td>{{ $unit->price_override }}</td>
                                <td>{{ $unit->available_status }}</td>--}}
                                <td>{{ $unit->available_date }}</td>
                                <td>{{ $unit->disabled }}</td>
                                {{--<td>{{ $unit->description }}</td>
                                <td>{{ $unit->images }}</td>--}}
                                <td>
                                    <a class="btn btn-primary" href="{{ url('/unit/edit') }}/{{ $unit->id }}" role="button">Edit</a>
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
