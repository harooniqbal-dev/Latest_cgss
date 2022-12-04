@extends('admin::page')

@section('content')
<div class="container">
<div class="row ">
    <div class="text-center col-md-3" style="background-color:lavender;margin:5px;height:150px;">
        <div class="mr-2"><div class="container row" style="padding-top:50px;">
        <div class="col-sm-2 col-md-2 col-lg-2"><i class="fa fa-envelope" style="font-size:36px"></i></div>
        <div class="col-sm-10 col-md-10 col-lg-10"><a style="color:black;" href="{{route('newmessage')}}"><h5>New Messages({{$total_message}})</h5></a></div>
        </div></div>
    </div>
    <div class="text-center col-md-3" style="background-color:lavender;margin:5px;height:150px;">
        <div class="ml-2"><div class="container row" style="padding-top:50px;">
        <div class="col-sm-2 col-md-2 col-lg-2"><i class="fa fa-book" style="font-size:36px"></i></div>
        <div class="col-sm-10 col-md-10 col-lg-10"><h5>Total publications({{$total_publication}})</h5></div>
        </div></div>
    </div>
    <div class="text-center col-md-3" style="background-color:lavender;margin:5px;height:150px;">
        <div class="ml-2"><div class="container row" style="padding-top:50px;">
        <div class="col-sm-2 col-md-2 col-lg-2"><i class='fas fa-chalkboard-teacher' style='font-size:36px'></i></div>
        <div class="col-sm-10 col-md-10 col-lg-10"><h5 style="padding-left:10px;">Total Training({{$total_Training}})</h5></div>
        </div></div>
    </div>
</div>



<table class="table table-striped table-sm my-4">
          <thead>
            <tr>
              <th>id </th>
              <th>Name</th>
              <th>email</th>
              <th>Status</th>
              <th>Created at</th>
            </tr>
          </thead>
          <tbody>
         

            <tr>
              <td>{{ Auth::user()->id }}</td>
              <td>{{ Auth::user()->name }}</td>
              <td>{{ Auth::user()->email }}</td>
              <td>Login</td>
              <td>{{ Auth::user()->created_at}}</td>            
              </td>
            </tr>

            </tbody>

        </table>
</div>
@endsection