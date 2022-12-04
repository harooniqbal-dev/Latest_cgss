@extends('adminlte::page')
@section('title', 'Dashboard')
@section('activeGallery', 'active')
@section('content')
<div class="modal fade" id="titilemodelid" tabindex="-1" role="dialog" aria-labelledby="Titlemodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Titlemodal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('add_title')}}" method="POST">
      @csrf
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="Title" aria-describedby="emailHelp" name="title">
  </div>
  <button type="submit" class="btn btn-primary float-right">Submit</button>
</form>
      </div>
    </div>
  </div>
</div>
<div class="container px-5">
<form action="{{route('storeimages')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-row">
    <div class="form-group col-md-11">
      <label for="inputEmail4">Title</label>
      <select id="inputState" class="form-control" name="event">
      <option>choose...</option>
      ]@foreach ($gtitle as $data)
      <option value="{{$data->id}}">{{$data->Title}}</option>
@endforeach
      </select>
    </div>
    <div class="form-group col-md-1 pt-1" style="padding-top:10px;">
      <input class="btn btn-primary mt-4 mr-4" type="button" value="Add Title" data-toggle="modal" data-target="#titilemodelid">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Images</label> 
    <input type="file"  class="form-control" name="image" multiple>
    @error('image')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
  </div>
  <button type="submit" class="btn btn-primary float-right px-4 font-weight-bold">Submit</button>
</form>
</div>

@endsection