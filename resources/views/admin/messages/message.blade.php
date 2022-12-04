@extends('adminlte::page')

@section('content')
<h2>Messages</h2>
<div class="text-right"> 
<a href="{{route('external_training.create')}}" class="btn btn-primary align-right my-2 mx-2">Add Role</a>
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
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Seen</th>
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
              <td>{{$data->contactor_name}}</td>
              <td>{{$data->contactor_email}}</td>
              <td>{{$data->subject}}</td>
              <td>{{$data->message}}</td>
              <td>{{$data->view}}</td>
              <td>{{$data->created_at}}</td>
              <td>{{$data->updated_at}}</td>
              <td><form method="post" class="delete_form" action="{{route('message.destroy',$data->id)}}">
              @method('DELETE')
              @csrf
              <button class="btn btn-link" type="submit">Delete</button>
              </form>
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
