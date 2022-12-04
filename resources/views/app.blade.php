<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CGSS-@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/home.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/navbar.css')}}">
		@yield('cssfile')
</head>
<body>
 
    @include('navbar')
	<div class="otherpage__header" style="background: rgba(0, 0, 0, 0) url({{asset('Images/4.jpg')}}) no-repeat scroll center center / cover ;">
		<div>
		<h2>@yield('title')</h2>
		<p style="text-align: center">Home  <i class="fas fa-chevron-right"></i>  @yield('title')</p>
		</div>
	</div>
    @yield('content')
    @include('footer')
    <script src="{{asset('newjsfile/navbar.js')}}"></script>
    <script src="{{asset('newjsfile/home.js')}}"></script>
    <script
    src="https://kit.fontawesome.com/0b73ceb758.js"
    crossorigin="anonymous"
  ></script>
  {{-- @yield('javascriptContent') --}}


</body>
</html>

	
