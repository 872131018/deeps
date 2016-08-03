@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <form action="{{ url('/images') }}" method="POST" id="dropzone" class="dropzone" role="form"></form>
        <div class="panel-body">
          Files:
          <div class="grid">
            @foreach ($images as $image)
              <div class="grid-item">
                <img src="{{ url($image) }}">
                <div class="circle" data-delegate="image_delete" data-name="{{ $image }}">Delete</div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
