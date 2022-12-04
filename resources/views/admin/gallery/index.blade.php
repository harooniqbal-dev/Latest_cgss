@extends('adminlte::page')

@section('content')
<h2>Gallery Images</h2>
<div class="text-right"> 
<a href="{{route('addimage')}}" class="btn btn-primary align-right my-2 mx-2">Add</a>
        </div> 
<div class="main">
<!-- Portfolio publication Grid -->
<div class="row publication">

@foreach ($data as $data)
<div class="column">
    <div class="content">
    <a href="upload/gallery/{{$data->photo}}" data-lightbox="mygallery" data-title="{{$data->Event_name}}"> <img style="width: 200px; height: 200px;"src="upload/gallery/{{$data->photo}}" alt="Mountains"></a>
    <div class="text-center" style="padding-top:20px;">
    <h3>

@php
$posts= App\Title::find($data->title_id);
echo $posts->Title;
@endphp</h3>
<form action="{{route('delete_image',$data->id)}}" method="POST">
    @csrf
    @method('DELETE')

    <button class="btn btn-link" type="submit">Delete</button>
</form>
    </div>
      
  </div>
  </div>
@endforeach
<!-- END GRID -->
</div>
<!-- END MAIN -->
</div>
@endsection



