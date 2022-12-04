@extends('app')
@section('title', 'Event Detail')

@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/eventdetail.css')}}">
@endsection

@section('content')
    <div class="event__info">
			<h2 class="heading__style">
				Event Detail	
			</h2>
            <div class="event__detail">
                <div class="event__image">
                    <img class="img-responsive"src="{{ asset('upload/events/'.$data2->event_image)}}" 
                    >
                </div>
            <div class="event__description">
    
                <div class="event_div">
                        <div>
                            <h2 class="event_title_more" style="text-align:left ; ">{{$data2->event_name}}</h2>
                        </div>
                        <div>
                            <h4>{{$data2->event_date}}</h4>
                        </div>
                </div>
                <p class="event_more_des" style="margin-bottom: 50px; text-align: justify;">{{$data2->event_description}}</p>
            </div>
        </div>
	</div>

@endsection




{{-- @extends('app')
@section('title', 'EVENT DETAIL')
@section('content')

<div class="container">
    <div class="container event_more">


        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-sm-6">
                <img class="img-responsive"src="{{ asset('upload/events/'.$data2->event_image)}}" 
                >
            </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-sm-6">

            <div class="event_div">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-sm-6">
                        <h2 class="event_title_more" style="text-align:left ; ">{{$data2->event_name}}</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-sm-6">
                        <h4  style="text-align:right; font-family: 'Roboto Slab', Serif;
             padding-top: 43px;
             padding-bottom: 20px;
             margin-bottom: 51px;">{{$data2->event_date}}</h4>
                    </div>
                </div>
            </div>
            <p class="event_more_des" style="margin-bottom: 50px; text-align: justify;">{{$data2->event_description}}</p>
        </div>
    </div>


    </div>
    </div>
    
@endsection --}}





{{-- <!DOCTYPE html>
<html>
<head>
	<title>
		Event Detail
	</title>
	<link rel="stylesheet" type="text/css" href="{{asset('../css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
</head>
<body>
	<div class="upper-bar hidden-xs">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 header_address">
                               <h5>
                                    <i class="fa fa-phone"></i>
                                0483769683 </h5>
                                <h5>
                                    <i class="fa fa-envelope"></i>
                                cgss.sargodha@gmail.com</h5>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 social_icon ml-auto">
                                <span class="ico">
                                    <a href="https://web.facebook.com/cgsspk" ><i class="fa fa-facebook-f" style="color: white;font-size: 25px;">   </i></a>
                                    <a href="https://www.youtube.com/channel/UC8F-_9Ldh4yXmlk1_-AwYKQ/videos"><i class="fa fa-youtube-play"  style="color: white;font-size: 25px;   "></i>
                                    </a>
                                    </a>
                                    |
                                    <a href="../about">About us</a> |
                                    <a href="../contact">Contact us</a>|
                                    <a class=" " href="../include/Seerat-ul-Nabi.pdf">Seerat-un-Nabi</a>
                            </span>
                                
                            </div>
                        
                    </div>
                    
                </div>
            </div>

                <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                    <div class="container-fluid">
                        <a href="../CGSS"class="navbar-brand"><img src="{{asset('Images/7.PNG')}}"></a>
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <ul class="nav navbar-nav navbar-center ml-auto " >
                                <li class="nav-item"><a class="nav-link active" href="../alumni">
                                    <i><img class="nav_img" src="../Images/alumni.png"></i>
                                Alumni</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="" id="navbardrop" data-toggle="dropdown">
                                        <i><img class="nav_img"src="../Images/achiev.png"></i>
                                        Achievment
                                    </a>
                                    <div class="dropdown-menu" style="font-size: 10px;">
                                        <a class="dropdown-item" href="../Matric_achievment" style="text-align: left;">
                                            <i><img class="nav_img" src="../Images/matric.png"></i>
                                        Matric</a>
                                        <a class="dropdown-item" href="../International_achievment" style="text-align: left;">
                                            <i><img class="nav_img" src="../Images/achiev.png"></i>
                                        International </a>
                                        <a class="dropdown-item" href="./AOlevel_achievment" style="text-align: left;">
                                            <i><img class="nav_img" src="../Images/ao.png"></i>
                                        A/O Level</a>

                                        
                                    </div>
                                </li>
                                
                                
                                <li class="nav-item"><a class="nav-link" href="../admission">
                                    <i><img class="nav_img" src="../Images/admissions3.png"></i>
                                Admissions</a></li>
                                    
                                <li class="nav-item"><a class="nav-link " href="../event">
                                    <i><img class="nav_img" src="../Images/events-icons.png"></i>
                                Events</a></li>
                                <li class="nav-item"><a class="nav-link " href="../trainning">
                                    <i><img class="nav_img" src="../Images/training.png"></i>
                                Trainning Session</a></li>

                                <li class="nav-item"><a class="nav-link " href="../Publication">
                                    <i><img  class="nav_img" src="../Images/books.png"></i>
                                Publication</a></li>
                                <li class="nav-item"><a class="nav-link" href="../education">
                                    <i><img class="nav_img" src="../Images/academics.png"></i>
                                Education</a></li>
                                <li class="nav-item"><a class="nav-link" href="../gallery">
                                    <i><img class="nav_img" src="../Images/gallery.png"></i>
                                Gallery</a></li>
                                
                            </ul>

                        </div>
                    </div>
                    </nav>
		<div class="ht__bradcaump__area text-center" data--black__overlay="4" style="background: rgba(0, 0, 0, 0) url(../Images/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Event Detail</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="fas fa-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Events </span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
        	<div class="container event_more">
        		<div class="row">
        			<div class="col-lg-6 col-sm-6 col-md-6 col-sm-6">
        				<img class="img-responsive"src="{{ asset('upload/events/'.$data2->event_image)}}" 
        				>
        			</div>
        		<div class="col-lg-6 col-sm-6 col-md-6 col-sm-6">

        			<div class="event_div">
        				<div class="row">
        					<div class="col-lg-6 col-sm-6 col-md-6 col-sm-6">
        						<h2 class="event_title_more" style="text-align:left ; ">{{$data2->event_name}}</h2>
        					</div>
        					<div class="col-lg-6 col-sm-6 col-md-6 col-sm-6">
        						<h4  style="text-align:right; font-family: 'Roboto Slab', Serif;
	                 padding-top: 43px;
                     padding-bottom: 20px;
                     margin-bottom: 51px;">{{$data2->event_date}}</h4>
        					</div>
        				</div>
        			</div>
        			<p class="event_more_des" style="margin-bottom: 50px; text-align: justify;">{{$data2->event_description}}</p>
        		</div>
        	</div>
        	</div>
        	</div>
        



        <section >
                    <div class="footer">
                        <div class="container">
                            <div class="row ft_cntrl">
                                <div class="footer_info_1">
                                        <img src="{{asset('../Images/logo_t.png')}}">
                                    <h5><i style="margin-right:1em;"class="fa fa-phone"></i>0483769683  </h5>
                                    <h5><i style="margin-right:1em;"class="fa fa-envelope"></i>cgss.sargodha@gmail.com</h5>
                                    </div>
                                    

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left footer_about">
                                    <ul class="footer_about_title">
                                        <li><a href="about">
                                            <i style="margin-right:1em;"class="fa fa-user"></i>
                                        About Us</a></li>
                                        <li><a href="contact">
                                            <i style="margin-right:0.4em;"class="fa fa-address-book"></i>
                                        Contact Us</a></li>
                                        <li><a href="about">
                                            <i style="margin-right:1em;"class="fa fa-bullseye"></i>
                                        Mission</a>
                                    </li>
                                    <li><a href="about"><i style="margin-right:1em;"class="fa fa-eye"></i>Vision</a></li>
                                </ul>
                            </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left footer_alumni">
                                    <ul class="footer_alumni_title">
                                        <li>
                                            <a  href="alumni">
                                                <i style="margin-right:1em;"class="fa fa-graduation-cap fa-fw" aria-hidden="true"></i>Alumni</a>
                                        </li>
                                        <li><a href="admission">
                                            <i style="margin-right:0.4em;"class="fa fa-file">
                                                
                                            </i>
                                        Admission</a></li>
                                        <li><a href="event" >
                                            <i style="margin-right:1em;" class="fa fa-calendar"></i>   

                                        Events</a></li>
                                        <!-- <li><a href="">Vision</a></li -->
                                    </ul>
                                </div>
                               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-left footer_socio">
                                    <h5 class="footer_socio_title">
                                        Follow Us
                                    </h5>
                                    <p class="footer_socio_content">
                                        Please follow us on our social media to keep updated
                                    </p>
                                    <a href="https://www.facebook.com/cgsspk/" ><i class="fa fa-facebook-f" style="color: white;font-size: 25px;">  </i></a>
                                    <a href="https://www.youtube.com/channel/UC8F-_9Ldh4yXmlk1_-AwYKQ/videos"><i class="fa fa-youtube-play"  style="color: white;font-size: 25px;   "></i>
                                    </a>

                                    
                                </div>
                                
                                    
                                    
                                    
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center copyright">
                                    <p>
                                        All Rights are Reserved by CGSS 
                                    
                                </div>
                                
                            </div>
                            
                                
                            </div>


                            
                    </div>
                    
                    
                </section>
            <script src="../js/jquery.min.js" type="text/javascript" ></script>
			<script src="../js/bootstrap.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="../js/owl.carousel.min.js"type="text/javascript"></script>
       

</body>
</html> --}}