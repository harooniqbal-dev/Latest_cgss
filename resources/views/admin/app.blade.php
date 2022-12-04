<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('stylefile/style.css')}}">
    <link rel="stylesheet" href="{{asset('stylefile/lightbox.min.css')}}">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>CGSS - @yield('title')</title>
  </head>
  <body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{env('APP_NAME')}}</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" onclick="event.preventDefault(); 
      document.getElementById('logout-form').submit();" href="#">Sign out</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf</form>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          
          <li class="nav-item">
            <a class="nav-link @yield('activedasboard')" href="{{route('admin')}}">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link @yield('activemessage')" href="{{route('message')}}">
              <span data-feather="shopping-cart"></span>
              Messages
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('activeTraining')" href="{{route('external_training.index')}}">
              <span data-feather="users"></span>
              External Trainings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('activepublication')" href="{{route('publications.index')}}">
              <span data-feather="bar-chart-2"></span>
              Publications
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @yield('activepublication')" href="{{route('gallery')}}">
              <span data-feather="bar-chart-2"></span>
              Gallery
            </a>
          </li>
        </ul>       
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary" >
            Wellcome:
            <span data-feather="calendar"></span>
            {{ Auth::user()->name }}
          </button>
        </div>
      </div>
      @if(Session::has('message'))
    @component('components.alert')
    {{ Session::get('message') }}
@endcomponent
@endif
      @yield('content')
      </div>
    </main>
  </div>
</div>
   
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{asset('javascript/lightbox-plus-jquery.min.js')}}"></script>
    @yield('javascript')

  </body>
</html>