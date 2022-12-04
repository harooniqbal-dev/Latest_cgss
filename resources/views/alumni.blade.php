@extends('app')
@section('title', 'Alumni')

@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/alumni.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/tablestyle.css')}}">
@endsection

@section('content')
               <div class="alumni">
                    <h2 class="heading__style">
                        Alumni
                    </h2>

                    @foreach($alumni as $alumni)
                    <div class="alumni__data">
                           <div class="alumni__image">
                            <img  class="img-fluid" src="{{asset('upload/alumni/'.$alumni->image)}}">
                           </div>
                            <div class="alumi__content">
                                <p>
                                    {{$alumni->descrip}}
                                </p>
                            </div>
                      </div>
                    @endforeach

                    <div style="margin-top: 40px">
                        <table class="table table-striped table-borderd table-hover">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Placement </th>
                                </tr>
                            </thead>
                            <tbody>@foreach($dataplace as $placement)
                                <tr>
                                    <td style="text-align: center">{{$placement->student_name}}</td>
                                    <td style="text-align: center">{{$placement->placement}}</td>
                                </tr>@endforeach
                            </tbody>
                        </table>
                    </div>
               </div>  
               
@endsection

