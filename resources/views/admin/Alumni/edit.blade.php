@extends('admin/app')
@section('title', 'Dashboard')
@section('activeTraining', 'active')
@section('content')
<h2>Edit Data for Placement</h2>

<form action="{{route('AlumniPlacement.update',$data->id)}}" method="POST">
@csrf
@method('PUT')
<div class="form-group">
  <label for="year">Student Name</label>
  <input type="text" class="form-control" id="student_name" name="student_name" value="{{$data->student_name}}">
  @error('student_name')
  <span style="color:#f36371;">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
  <label for="teacher">Placement</label>
  <input type="text" class="form-control" id="placement" name="placement" value="{{$data->placement}}">
  @error('placement')
  <span style="color:#f36371;">{{ $message }}</span>
@enderror
</div>
  <div class="form-group text-right">
  <button class="btn btn-primary pull-right" type="submit">Update</button> 
  </div>
</form>
@endsection