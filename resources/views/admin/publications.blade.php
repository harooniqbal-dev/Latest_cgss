@extends('app')
@section('title', 'publications')
@section('content')
<!-- MAIN (Center website) -->


<!-- MAIN (Center website) -->
<div class="main" style="padding: 20px;">
<div class="External__body">
                     <h2 class="External__title">Publications</h2>
                     </div> 
<!-- Portfolio publication Grid -->
<div class="row publication">
@foreach ($data as $data)
<div class="column">
    <div class="content">
      <img src="{{asset('upload/files/'.$data->photo)}}" alt="Mountains">
      <a style="text-decoration:none;color:black" href="upload/files/.{{$data->filename}}"><h3 class="text-center">{{$data->Name}}</h3></a>
    </div>
  </div>
@endforeach  
<!-- END GRID -->
</div>
<!-- END MAIN -->
</div>

@endsection