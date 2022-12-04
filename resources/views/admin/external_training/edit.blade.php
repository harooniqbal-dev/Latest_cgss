@extends('adminlte::page')
@section('title', 'Dashboard')
@section('activeTraining', 'active')
@section('content')
<h2>Edit Training</h2>

<form action="{{route('external_training.update',$data->id)}}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="year">Year</label>
    <input type="text" class="form-control" id="year" value="{{$data->year}}" name="year">
  </div>
  <div class="form-group">
    <label for="teacher">Teacher</label>
    <input type="text" class="form-control" id="teacher" value="{{$data->Teacher}}" name="teacher">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" value="{{$data->Subject}}" name="subject">
  </div>
  <div class="form-group">
    <label for="level">Level</label>
    <input type="text" class="form-control" id="level" value="{{$data->Level}}" name="level">
  </div>
  <div class="form-group text-right">
  <button class="btn btn-primary pull-right" type="submit">Update</button> 
  </div>
</form>
@endsection