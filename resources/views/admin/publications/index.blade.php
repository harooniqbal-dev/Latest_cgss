@extends('adminlte::page')
@section('title', 'Dashboard')
@section('activepublication', 'active')
@section('content')
<h2>Publications</h2>
<div class="text-right"> 
<a href="{{route('publications.create')}}" class="btn btn-primary align-right my-2 mx-2">Add</a>
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
              <th>Name</th>
              <th>Image</th>
              <th>pdffilename</th>
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
              <td>{{$data->Name}}</td>
              <td><img src="{{asset('upload/files/'.$data->photo)}}" width="60px" height="50px"></td>
              <td>{{$data->filename}}</td>
              <td>{{$data->created_at}}</td>
              <td>{{$data->updated_at}}</td>
              <td><a class="mx-2" href="{{route('publications.show',$data->id)}}">Delete</a>
              <a href="{{route('publications.edit',$data->id)}}">Edit</a>
            
              <!-- <form action="{{route('external_training.destroy',$data->id)}}">
              @method('DELETE')
              <button class="btn btn-link">Delete</button>
              </form> -->
              </td>
            </tr>
@endforeach
            </tbody>

        </table></div>
@endif
      
@endsection

@section('javascript')
<script>
function getid(id) {
  console.log(id);
  
}
</script>
@endsection
