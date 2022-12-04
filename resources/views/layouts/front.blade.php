<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
		<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/home.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/navbar.css')}}">
	
</head>
<body>
 
    @include('navbar')
    @yield('content')
    @include('footer')
    <script src="{{asset('newjsfile/navbar.js')}}"></script>
    <script src="{{asset('newjsfile/home.js')}}"></script>
    <script
    src="https://kit.fontawesome.com/0b73ceb758.js"
    crossorigin="anonymous"
  ></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGrI5mdHSxIrhwNPWub4sFbPqT5iwSwTw&callback=initMap&libraries=&v=weekly"
    async
  ></script>

  <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      const uluru = { lat: 32.2887615, lng: 72.2724645 };
      // The map, centered at Uluru
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: uluru,
      });
     
      let image1 =
        "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
    //   let imag2 = "img/icons/achiev.png";
      var beachMarker = new google.maps.Marker({
        position: { lat: 32.0467518, lng: 72.6945634 },
        map: map,
        icon: image1,
        title: "CGSS",
      });
      var beachMarker2 = new google.maps.Marker({
        position: { lat: 32.0597813, lng: 72.6750199 },
        map: map,
        icon: image1,
        title: "CGSS",
      });
      var beachMarker3 = new google.maps.Marker({
        position: { lat: 32.078503, lng: 72.6752103 },
        map: map,
        icon: image1,
        title: "CGSS",
      });
      var beachMarker4 = new google.maps.Marker({
        position: { lat: 32.2887615, lng: 72.2724645 },
        map: map,
        icon: image1,
        title: "CGSS",
      });
    }
  </script>
</body>
</html>
