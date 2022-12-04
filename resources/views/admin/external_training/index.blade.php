@extends('adminlte::page')
@section('title', 'Dashboard')
@section('activeTraining', 'active')
@section('content')
<h2>External Training</h2>
<div class="text-right"> 
<a href="{{route('external_training.create')}}" class="btn btn-primary align-right my-2 mx-2">Add</a>
        </div> 
        <div class="">
     
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($error->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        
      </div>
      @endif
    </div>
    @if(Session('success'))
    <div class="alert alert-success">
      <p>{{Session('success')}}</p>
      
    </div>
    @endif    

@if ($data->isEmpty())
<div class="alert alert-info">
        <strong>Sorry!</strong> No Record is Found.
    </div>  
@else
<div class="table-responsive">
<table id="data2" class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>id </th>
              <th>Year</th>
              <th>Teacher</th>
              <th>Subject</th>
              <th>Level</th>
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
              <td>{{$data->year}}</td>
              <td>{{$data->Teacher}}</td>
              <td>{{$data->Subject}}</td>
              <td>{{$data->Level}}</td>
              <td>{{$data->created_at}}</td>
              <td>{{$data->updated_at}}</td>
              <td><a class="mx-2" href="{{route('external_training.show',$data->id)}}">Delete</a>
              <a href="{{route('external_training.edit',$data->id)}}">Edit</a>
            
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

@section('js')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function(){

                var table = $('#data2').DataTable({
                  "aLengthMenu": [[5,10, 25, 50, 100, -1], [5,10, 25, 50, 100, "All"]],
                    "iDisplayLength": 5,
                });
function getid(id) {
  console.log(id);
  
}
});
</script>
@endsection
