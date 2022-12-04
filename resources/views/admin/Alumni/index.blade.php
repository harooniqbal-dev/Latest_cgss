@extends('adminlte::page')
@section('title', 'Dashboard')
@section('activeTraining', 'active')
@section('content')
<h2>Student Placement in national and international level</h2>
<div class="text-right"> 
<a href="{{route('AlumniPlacement.create')}}" class="btn btn-primary align-right my-2 mx-2">Add</a>
        </div> 
@if ($data->isEmpty())
<div class="alert alert-info">
        <strong>Sorry!</strong> No Record is Found.
    </div>  
@else
<div class="table-responsive">
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>id </th>
              <th>Student_Name</th>
              <th>Placement</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $data)

            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{$data->id}}</td>
              <td>{{$data->student_name}}</td>
              <td>{{$data->placement}}</td>
              <td>{{$data->created_at}}</td>
              <td>{{$data->updated_at}}</td>
              <td><a class="mx-2" href="{{route('AlumniPlacement.show',$data->id)}}">Delete</a>
              <a href="{{route('AlumniPlacement.edit',$data->id)}}">Edit</a>
              </td>
            </tr>
@endforeach
            </tbody>

        </table></div>
@endif
      
@endsection

