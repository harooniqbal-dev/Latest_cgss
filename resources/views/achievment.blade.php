

{{-- <!DOCTYPE html>
<html>
<head>
	<title>CGSS Achievmetents</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="css/slider.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/default.css">
         <style type="text/css">
            .container{
    text-align: center;
}
        </style>
</head>
<body>
    @include('navbar')
	<div class="ht__bradcaump__area text-center" data--black__overlay="4" style="background: rgba(0, 0, 0, 0) url(Images/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">CGSS Achievments</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="fas fa-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Achievments </span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Achievment_info">
            <div class="container">
                <div class="achievment_title text-left">
                    <h2 class="a_title_line">
                        CGSS National and Intenational Achievments
                    
                    </h2>
                    <span class="a_line">
                        
                    </span>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                Gold Medal
                                
                            </h2>
                            
                        </div>
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                Silver Medal
                                
                            </h2>
                            
                        </div>
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
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                Bronze Medal
                                
                            </h2>
                            
                        </div>
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
                <div class="matric_info">
                    <div class="matric_title text-left">
                        <h2 class="a_title_line">
                            Matriculation Result Achievments

                        </h2>
                        <span class="a_line">

                        </span>
                    </div>
                    
                </div>
               
                
                
                

                
                

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                {{$datamy2[2]}}
                                
                            </h2>
                            
                        </div>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                 {{$datamy2[1]}}
                                
                            </h2>
                            
                        </div>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                 {{$datamy2[0]}}
                                
                            </h2>
                            
                        </div>
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


        	
        </div>
        <div class="oa_info">
            <div class="container">
                <div class="oa_title text-left">
                        <h2 class="a_title_line">
                            O/A Level Result  & Achievments

                        </h2>
                        <span class="a_line">
                            <p style="display: none;">{{$count=0}} {{$count1=0}}
                                {{$count2=0}}
                            </p>

                        </span>
                    </div>
                    
               
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                O Level
                                
                            </h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderd table-hover">
                                <thead>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Physics</th>
                                    <th>Chemistry</th>
                                    <th>Bio/Math</th>
                                    <th>Total</th></tr>
                                    
                                </thead>
                                <tbody>
                                   
                                    <tr> @foreach($dataoa as $da)
                                        @if($count==3)
                                        @break;
                                        @endif
                                        @if($da->class=='O_level' && $da->year==$dataoay[0])

                                        @if($count==0)
                                            
                                                <td rowspan="{{$pendingMembers}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                                            

                                        @endif
                                        <p style="display: none;">{{$count++}}</p>
                                        <td>{{$da->name}}</td>
                                        <td>{{$da->phy}}</td>
                                        <td>{{$da->chem}}</td>
                                        <td>{{$da->biomath}}</td>
                                        <td>{{$da->total_Grades}}

                                            </td>

                                        @endif
                                    </tr>
                                    
                                    @endforeach


                                    
                                    <tr>@foreach($dataoa as $da)
                                        @if($count1==3)
                                        @break;
                                        @endif
                                        @if($da->class=='O_level' && $da->year==$dataoay[1])

                                        @if($count1==0)
                                            
                                                <td rowspan="{{$pendingMembers1}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                                            

                                        @endif
                                        <p style="display: none;">{{$count1++}}</p>
                                        <td>{{$da->name}}</td>
                                        <td>{{$da->phy}}</td>
                                        <td>{{$da->chem}}</td>
                                        <td>{{$da->biomath}}</td>
                                        <td>{{$da->total_Grades}}

                                            </td>

                                        @endif
                                    </tr>
                                    
                                    @endforeach
                                    
                                    <tr>@foreach($dataoa as $da)
                                        @if($count2==3)
                                        @break;
                                        @endif
                                        @if($da->class=='O_level' && $da->year==$dataoay[2])

                                        @if($count2==0)
                                            
                                                <td rowspan="{{$pendingMembers2}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                                            

                                        @endif
                                        <p style="display: none;">{{$count2++}}</p>
                                        <td>{{$da->name}}</td>
                                        <td>{{$da->phy}}</td>
                                        <td>{{$da->chem}}</td>
                                        <td>{{$da->biomath}}</td>
                                        <td>{{$da->total_Grades}}

                                            </td>

                                        @endif
                                    </tr>
                                    
                                    @endforeach
                                   

                                </tbody>

                                
                                 
                                    
                                
                                    

                                
                            
                            </table>
                            


                        </div>
                        
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="table_heading text-centre">
                            <h2 class="t_heading_title">
                                A Level 
                                
                            </h2>
                            <p style="display: none;">{{$count3=0}} {{$count4=0}}
                                {{$count5=0}}
                            </p>
                            
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-borderd table-hover">
                            <thead>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Physics</th>
                                    <th>Chemistry</th>
                                    <th>Bio/Math</th>
                                    <th>Total</th></tr>
                                    
                                </thead>
                                <tbody>
                                    
                                    <tr>@foreach($dataoa as $da)
                                        @if($count3==3)
                                        @break;
                                        @endif
                                        @if($da->class=='A_level' && $da->year==$dataay[0])

                                        @if($count3==0)
                                            
                                                <td rowspan="{{$pendingMembers3}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                                            

                                        @endif
                                        <p style="display: none;">{{$count3++}}</p>
                                        <td>{{$da->name}}</td>
                                        <td>{{$da->phy}}</td>
                                        <td>{{$da->chem}}</td>
                                        <td>{{$da->biomath}}</td>
                                        <td>{{$da->total_Grades}}

                                            </td>

                                        @endif
                                    </tr>
                                    
                                    @endforeach


                                   
                                    <tr> @foreach($dataoa as $da)
                                        @if($count4==3)
                                        @break;
                                        @endif
                                        @if($da->class=='A_level' && $da->year==$dataay[1])

                                        @if($count4==0)
                                            
                                                <td rowspan="{{$pendingMembers4}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                                            

                                        @endif
                                        <p style="display: none;">{{$count4++}}</p>
                                        <td>{{$da->name}}</td>
                                        <td>{{$da->phy}}</td>
                                        <td>{{$da->chem}}</td>
                                        <td>{{$da->biomath}}</td>
                                        <td>{{$da->total_Grades}}

                                            </td>

                                        @endif
                                    </tr>
                                    
                                    @endforeach
                                    
                                    <tr>@foreach($dataoa as $da)
                                        @if($count5==3)
                                        @break;
                                        @endif
                                        @if($da->class=='A_level' && $da->year==$dataay[2])

                                        @if($count5==0)
                                            
                                                <td rowspan="{{$pendingMembers5}}" style="vertical-align : middle;text-align:center;">{{$da->year}}</td>
                                            

                                        @endif
                                        <p style="display: none;">{{$count5++}}</p>
                                        <td>{{$da->name}}</td>
                                        <td>{{$da->phy}}</td>
                                        <td>{{$da->chem}}</td>
                                        <td>{{$da->biomath}}</td>
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
        </div>
        <div class="achiev_pic">
            <div   class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 img-responsive">
                         <img src="Images/achiev1.PNG">
                        
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6 img-responsive">
                        <img src="Images/achiev2.PNG">
                        
                    </div>
                    
                </div>
                
            </div>



            
        </div>
    </div>
                    
        @include('footer')
         <script src="js/jquery.min.js" type="text/javascript" ></script>
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="js/owl.carousel.min.js"type="text/javascript"></script>

</body>

</html> --}}