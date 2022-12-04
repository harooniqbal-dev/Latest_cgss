@extends('adminlte::page')

@section('content')
<h2>Edit Publication</h2>

<form action="{{route('publications.update',$data->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
    <label for="year">Name</label>
    <input type="text" class="form-control" id="bookname" placeholder="Enter Name..." name="bookname" value="{{ $data->Name }}">
  </div>
  <div class="form-group">
    <label for="teacher">Image</label>
    <input type="file" class="form-control" id="bookimage"  name="bookimage">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="file" class="form-control" id="pdffile" name="pdffile">
  </div>
  <div class="form-group text-right">
  <button class="btn btn-primary pull-right" type="submit">Submit</button> 
  </div>
</form>
@endsection