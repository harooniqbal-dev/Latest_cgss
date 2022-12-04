@extends('adminlte::page')

@section('content')
<h2>Add Publication</h2>

<form action="{{route('publications.store')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="year">Name</label>
    <input type="text" class="form-control" id="bookname" placeholder="Enter Name..." name="bookname" value="{{ old('bookname') }}">
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