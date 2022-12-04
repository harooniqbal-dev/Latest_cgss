@extends('adminlte::page')
@section('title', 'Dashboard')
@section('activeTraining', 'active')
@section('content')
<h2>Add Training</h2>

<form action="{{route('external_training.store')}}" method="POST">
@csrf
  <div class="form-group">
    <label for="year">Year</label>
    <input type="text" class="form-control" id="year" placeholder="Enter year..." name="year">
  </div>
  <div class="form-group">
    <label for="teacher">Teacher</label>
    <input type="text" class="form-control" id="teacher" placeholder="Enter teacher name..." name="teacher">
  </div>
  <div class="form-group">
    <label for="subject">Subject</label>
    <input type="text" class="form-control" id="subject" placeholder="Enter subject..." name="subject">
  </div>
  <div class="form-group">
    <label for="level">Level</label>
    <input type="text" class="form-control" id="level" placeholder="Enter level..." name="level">
  </div>
  <div class="form-group text-right">
  <button class="btn btn-primary pull-right" type="submit">Submit</button> 
  </div>
</form>
@endsection