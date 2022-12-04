@extends('app')
@section('title', 'A/O Level Achievement')

@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/achievement.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/tablestyle.css')}}">
@endsection

@section('content')
    <section class="achievement__section">
        <h2 class="heading__style">
            O/A Level Result  & Achievments
        </h2>
        <span class="a_line">
            <p style="display: none;">{{$count=0}} {{$count1=0}}
                {{$count2=0}} {{$count3=0}} {{$count4=0}}
                {{$count5=0}}
            </p>

        </span>
        <div class="achievement__div">
          <div class="left_table">
            <div class="table-responsive">
                <table class="table table-striped table-borderd table-hover">
                    <thead>
                        <th>Year</th>
                        <th>Name</th>
                        <th>Total</th></tr>

                    </thead>
                    <tbody>
                       
                        <tr> @foreach($dataoa as $da)
                            
                            @if($da->class=='O_level' && $da->year==$dataoay[0])

                            @if($count==0)

                            <td rowspan="{{$pendingMembers}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                            @endif
                            <p style="display: none;">{{$count++}}</p>
                            <td>{{$da->name}}</td>
                            <td>{{$da->total_Grades}}

                            </td>

                            @endif
                        </tr>

                        @endforeach

                        <tr>@foreach($dataoa as $da)
                            
                            @if($da->class=='O_level' && $da->year==$dataoay[1])

                            @if($count1==0)

                            <td rowspan="{{$pendingMembers1}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                           @endif
                            <p style="display: none;">{{$count1++}}</p>
                            <td>{{$da->name}}</td>
                            <td>{{$da->total_Grades}}</td>
                            @endif
                        </tr>

                        @endforeach

                        <tr>@foreach($dataoa as $da)
                            
                            @if($da->class=='O_level' && $da->year==$dataoay[2])

                            @if($count2==0)

                            <td rowspan="{{$pendingMembers2}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                            @endif
                            <p style="display: none;">{{$count2++}}</p>
                            <td>{{$da->name}}</td>
                           <!--  <td>{{$da->phy}}</td>
                            <td>{{$da->chem}}</td>
                            <td>{{$da->biomath}}</td> -->
                            <td>{{$da->total_Grades}}

                            </td>

                            @endif
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>

          <div class="right_table">
            <div class="table-responsive">
                <table class="table table-striped table-borderd table-hover">
                    <thead>
                        <th>Year</th>
                        <th>Name</th>
                        <th>Physics</th>
                        <th>Chemistry</th>
                        <th>Bio/Math</th>
                        <th>Busniess Studies</th>
                        <th>Total</th></tr>

                    </thead>
                    <tbody>

                        <tr>@foreach($dataoa as $da)
                            
                            @if($da->class=='A_level' && $da->year==$dataay[0])

                            @if($count3==0)

                            <td rowspan="{{$pendingMembers3}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>


                            @endif
                            <p style="display: none;">{{$count3++}}</p>
                            <td>{{$da->name}}</td>
                            <td>{{$da->phy}}</td>
                            <td>{{$da->chem}}</td>
                            <td>{{$da->biomath}}</td>
                            <td>{{$da->busniess}}</td>
                            <td>{{$da->total_Grades}}

                            </td>

                            @endif
                        </tr>

                        @endforeach



                        <tr> @foreach($dataoa as $da)
                            
                            @if($da->class=='A_level' && $da->year==$dataay[1])

                            @if($count4==0)
                            <td rowspan="{{$pendingMembers4}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                            @endif
                            <p style="display: none;">{{$count4++}}</p>
                            <td>{{$da->name}}</td>
                            <td>{{$da->phy}}</td>
                            <td>{{$da->chem}}</td>
                            <td>{{$da->biomath}}</td>
                            <td>{{$da->busniess}}</td>
                            <td>{{$da->total_Grades}}
                            </td>
                            @endif
                        </tr>
                        @endforeach
                        <tr>@foreach($dataoa as $da)
                            @if($da->class=='A_level' && $da->year==$dataay[2])
                            @if($count5==0)
                            <td rowspan="{{$pendingMembers5}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                            @endif
                            <p style="display: none;">{{$count5++}}</p>
                            <td>{{$da->name}}</td>
                            <td>{{$da->phy}}</td>
                            <td>{{$da->chem}}</td>
                            <td>{{$da->biomath}}</td>
                            <td>{{$da->busniess}}</td>
                            <td>{{$da->total_Grades}}
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
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

