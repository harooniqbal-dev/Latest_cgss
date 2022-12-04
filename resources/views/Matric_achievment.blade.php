@extends('app')
@section('title', 'Matric Achievement')

@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/m_achievement.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/tablestyle.css')}}">
@endsection
@section('content')
<section class="achievement__section">
    <h2 class="heading__style">
        Matriculation Result Achievments
    </h2>
    <div class="achievement__div">
        <div class="left_table">
            <h3 style="text-align: center"> {{$datamy2[2]}}</h3>
            <div class="table-responsive">
                <table class="table table-striped table-borderd table-hover">
                    <thead>
                        <tr>
                            <th>
                                Sr.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Marks
                            </th>
                        </tr>
                    </thead>
                    @foreach($datam as $matrics)
                    @if($matrics->year == $datamy2[2])
                    <tr>

                        <td>{{$matrics->id}}</td>
                        <td>{{$matrics->name}}</td>
                        <td>{{$matrics->marks}}</td>

                        
                    </tr>
                    @endif
                    @endforeach
                </table>
                 
            </div>
        </div>
        <div class="middle_table">
            <h3 style="text-align: center"> {{$datamy2[1]}}</h3>
            <div class="table-responsive">
                <table class="table table-striped table-borderd table-hover">
                    <thead>
                        <tr>
                            <th>
                                Sr.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Marks
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        @foreach($datam as $matrics)
                    @if($matrics->year == $datamy2[1])
                    <tr>

                        <td>{{$matrics->id}}</td>
                        <td>{{$matrics->name}}</td>
                        <td>{{$matrics->marks}}</td>

                        
                    </tr>
                    @endif
                    @endforeach
                    </tr>
                    
                </table>
                 
            </div>
        </div>
        <div class="right_table">
            <h3 style="text-align: center"> {{$datamy2[0]}}</h3>
            <div class="table-responsive">
                <table class="table table-striped table-borderd table-hover">
                    <thead>
                        <tr>
                            <th>
                                Sr.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Marks
                            </th>
                        </tr>
                    </thead>
                    <tr>
                        @foreach($datam as $matrics)
                    @if($matrics->year == $datamy2[0])
                    <tr>

                        <td>{{$matrics->id}}</td>
                        <td>{{$matrics->name}}</td>
                        <td>{{$matrics->marks}}</td>

                        
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


