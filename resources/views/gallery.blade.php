@extends('app')
@section('cssfile')
<link rel="stylesheet" type="text/css" href="stylefile/lightbox.min.css">   
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/gallery.css')}}">
@endsection

@section('title', 'Gallery')
@section('content')
<div class="cgss__gallery_image">
    <h2 class="heading__style">CGSS Gallery</h2>
    <div class="fliter__list">
        <ul class="filters text-center" style='padding:0px;margin:0px;'>
            <li class="active" data-filter="*"><a href="#!">All</a></li>
            <li data-filter=".youtube"><a href="#!">Videos</a></li>
              @foreach ($data_title as $data)
           <li data-filter=".class{{$data->id}}"><a href="#!">{{$data->Title}}</a></li>
        @endforeach
      </ul>  
    </div>
<div class="projects">
    <div class="image__row">      
        @foreach ($data_array as $gallery_data)
        @foreach ($gallery_data as $data)
        <div class="image__item item class{{$data->title_id}}">                
                <div>
                    <a href="{{asset('upload/gallery/'.$data->photo)}}" data-lightbox="mygallery" data-title="@php
                    $posts= App\Title::find($data->title_id);
                    echo $posts->Title;
                    @endphp"> <img src="upload/gallery/{{$data->photo}}" alt="Mountains" style="height:200px;width:100%"></a>    
                </div>
        </div>
        @endforeach
        @endforeach
    </div>
   <div class="item youtube">
     <?php 
//Get videos from channel by YouTube Data API
     $API_key    = 'AIzaSyBGrI5mdHSxIrhwNPWub4sFbPqT5iwSwTw';
     $channelID  = 'UC8F-_9Ldh4yXmlk1_-AwYKQ';
     $maxResults = 20;
     ini_set("allow_url_fopen", 1);

     $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
     foreach($videoList->items as $item){
    //Embed video
        
        if(isset($item->id->videoId)){
            echo '<div class="youtube__item">
            <iframe "width="500" height="200" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
            </div>';
        }
    }
    ?>
  </div>
  
     </div>
           </div>
            

@endsection
@section('javascriptContent')

    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/isotope.min.js" type="text/javascript"></script>
    
<script>
      $(document).ready(function(){

'use strict';


var $projects = $('.projects');

$projects.isotope({
    itemSelector: '.item',
    layoutMode: 'fitRows'
});

$('ul.filters > li').on('click', function(e){

    e.preventDefault();

    var filter = $(this).attr('data-filter');

    $('ul.filters > li').removeClass('active');
    $(this).addClass('active');

    $projects.isotope({filter: filter});

});
$('.card').mouseenter(function(){
    $(this).find('.card-hover').css({'top':'0'});

}).mouseleave(function(){
    $(this).find('.card-hover').css({'top':'100%'});

});
});
</script>

@endsection