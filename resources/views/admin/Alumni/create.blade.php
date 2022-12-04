@extends('adminlte::page')

@section('content')
<h2>Add Data</h2>

<form action="{{route('AlumniPlacement.store')}}" method="POST">
@csrf
  <div class="form-group">
    <label for="year">Student Name</label>
    <input type="text" class="form-control" id="student_name" placeholder="Enter student name..." name="student_name">
    @error('student_name')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
  </div>
  <div class="form-group">
    <label for="teacher">Placement</label>
    <input type="text" class="form-control" id="placement" placeholder="Enter placement..." name="placement">
    @error('placement')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
  </div>
  <div class="form-group text-right">
  <button class="btn btn-primary pull-right" type="submit">Submit</button> 
  </div>
</form>
@endsection