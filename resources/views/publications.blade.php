@extends('app')
@section('title', 'Publications')
@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/event.css')}}">
@endsection

@section('content')
     <div class="Event_info">
                <h2 class="heading__style">
                  Publications
                </h2>
    
            <div class="event__row">
                @foreach($data as $data)
                <div class="event__outer">
                    <div class="event_display">
                         <div class="event__image">
                            <img src="{{asset('upload/files/'.$data->photo)}}">
                         </div>
                        <p class="p-short">
                            <a style="padding:0;color:#000" href="upload/files/{{$data->filename}}"><h3 style="text-align: center">{{$data->Name}}</h3></a>
                        </p>
                    </div>
                </div>
                @endforeach          
            </div>        
            </div>            
 
@endsection


