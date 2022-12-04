@extends('app')
@section('title', 'International Achievement')

@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/m_achievement.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/tablestyle.css')}}">
@endsection
@section('content')
<section class="achievement__section">
    <h2 class="heading__style">
        CGSS National and Intenational Achievments
    </h2>
    <div class="achievement__div">
        <div class="left_table">
            <h3 style="text-align: center">Gold Medals</h3>
         <div class="table-responsive">
             <table class="table table-striped table-borderd table-hover">
                 <thead>
                     <tr>
                         <th>
                             Year
                         </th>
                         <th>
                             Institution /Contest
                         </th>
                         <th>
                             Medal / Shield
                         </th>
                     </tr>
                 </thead>
               
                     @foreach($data as $item)
                     @if($item ->medal_type == 'gold medal')
                     <tr>
                         <td>{{$item->year}}</td>
                         <td>{{$item->institute}}</td>
                         <td>{{ $item ->medal}}</td>
                     </tr>
                     @endif
                     @endforeach
                 
                 
             </table>
              
         </div>
        </div>
        <div class="middle_table">
            <h3 style="text-align: center">Silver Medals</h3>
         <div class="table-responsive">
             <table class="table table-striped table-borderd table-hover">
                 <thead>
                     <tr>
                         <th>
                             Year
                         </th>
                         <th>
                             Institution /Contest
                         </th>
                         <th>
                             Medal / Shield
                         </th>
                     </tr>
                 </thead>
                 @foreach($data as $item)
                     @if($item ->medal_type == 'silver medal')
                     <tr>
                         <td>{{$item->year}}</td>
                         <td>{{$item->institute}}</td>
                         <td>{{ $item ->medal}}</td>
                     </tr>
                     @endif
                     @endforeach
                 
                 
             </table>
              
         </div>
        </div>
        <div class="right_table">
            <h3 style="text-align: center">Bronze Medals</h3>
         <div class="table-responsive">
             <table class="table table-striped table-borderd table-hover">
                 <thead>
                     <tr>
                         <th>
                             Year
                         </th>
                         <th>
                             Institution /Contest
                         </th>
                         <th>
                             Medal / Shield
                         </th>
                     </tr>
                 </thead>
                 <tr>
                    @foreach($data as $item)
                     @if($item ->medal_type == 'bronze medal')
                     <tr>
                         <td>{{$item->year}}</td>
                         <td>{{$item->institute}}</td>
                         <td>{{ $item ->medal}}</td>
                     </tr>
                     @endif
                     @endforeach
                 </tr>  
             </table>  
         </div>
        </div>
     </div>
    <div class="achiev_pic">  
        <div class="left_image">
             <img src="{{asset('Images/achiev1.PNG')}}" alt="achievement">
        </div>
        <div class="right_image">
            <img src="{{asset('Images/achiev2.PNG')}}" alt="achievement"> 
        </div>    
    </div>
</section>

@endsection

