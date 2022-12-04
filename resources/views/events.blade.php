@extends('app')
@section('title', 'Events')
@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/event.css')}}">
@endsection

@section('content')
     <div class="Event_info">
                <h2 class="heading__style">
                    Events
                </h2>
    
            <div class="event__row">
                @foreach($data as $event)
                <div class="event__outer">
                    <div class="event_display">
                         <div class="event__image">
                            <img src="{{ asset('upload/events/'.$event->event_image)}}">
                            <div class="evt_fig_title">{{$event->event_name}}</div>
                         </div>
                        <p class="p-short">
                            {{$event->event_short}}
                            <a href="/eventdetail/{{$event->id}}" class="read__more" >Read More</a>
                        </p>
                    </div>
                </div>
                @endforeach          
            </div>        
            </div>            
 
@endsection
