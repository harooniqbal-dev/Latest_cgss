@extends('adminlte::page')

@section('content')
<div class="px-4">
<form action="{{route('storepassword')}}" method="POST">
@csrf
    <div class="form-group">
      <label for="email">Old Password:</label>
      <input type="password" class="form-control" id="oldpswd" placeholder="Old password" name="oldpswd">
      @error('oldpswd')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
    </div>
    <div class="form-group">
      <label for="pwd">New Password:</label>
      <input type="password" class="form-control" id="newpswd" placeholder="New password" name="password">
      @error('password')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
    </div>
    <div class="form-group">
      <label for="pwd">confirm Password:</label>
      <input type="password" class="form-control" id="confirmpswd" placeholder="confirm password" name="password_confirmation">
      @error('password_confirmation')
    <span style="color:#f36371;">{{ $message }}</span>
@enderror
    </div>
    <div class="form-group text-right">
  <button class="btn btn-primary pull-right px-4" type="submit">Submit</button> 
  </div>
  </form>
</div>
@endsection