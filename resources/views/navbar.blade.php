<section class="top_bar">
	<div class="left_side">
	  <span
		><i style="margin-right: 0.5rem" class="fa fa-phone"></i
		>048-3769683</span
	  >
	  <span
		><i style="margin-right: 0.5rem" class="fa fa-envelope"></i
		>cgss.sargodha@gmail.com</span
	  >
	</div>
	<div class="right_side">
	  <a href="https://www.facebook.com/cgsspk/"><i class="fa fa-facebook-f"></i></a>
	  <a href="https://www.youtube.com/channel/UC8F-_9Ldh4yXmlk1_-AwYKQ/videos"><i class="fab fa-youtube"></i></a>
	  <span><a href="{{url('about')}}" style="color: #fff">About us</a></span>
	  <span><a href="{{url('contact')}}" style="color: #fff">Contact us</a></span>
	  <span><a href="{{asset('include/Seerat-ul-Nabi.pdf')}}" style="color: #fff">Seerat-un-Nabi</a></span>
	</div>
  </section>

  <!-- start navbar -->

  <section class="navbar__section">
	<a href="/" class="logo"><img src="{{asset('Images/logo.PNG')}}" alt="logo_image" /></a>
	<div class="navbar" id="main__navbar">
	  <ul>
		<li>
		  <a href="{{url('alumni')}}">
			<i><img src="{{asset('Images/icons/alumni.png')}}" /></i>
			Alumni 
		  </a>
		</li>
		<li>
		  <a
			id="navbardrop"
			data-toggle="dropdown"
		  >
			<i><img src="{{asset('Images/icons/achiev.png')}}" /></i>
			Achievement <i style="margin-top: 4px;margin-left:3px" class="fas fa-arrow-down"></i>
		  </a>

		  <ul id="dropdown__menu">
			<li>
			  <a href="{{url('Matric_achievment')}}"><img src="{{asset('Images/icons/matric.png')}}" /> Matric</a>
			</li>
			<li>
			  <a href="{{url('International_achievment')}}"
				><img src="{{asset('Images/icons/achiev.png')}}" />
				International</a
			  >
			</li>
			<li>
			  <a href="{{url('AOlevel_achievment')}}"><img src="{{asset('Images/icons/ao.png')}}" /> A/O Level</a>
			</li>
		  </ul>
		</li>
		<li>
		  <a href="{{url('admission')}}">
			<i><img src="{{asset('Images/icons/admissions3.png')}}" /></i>
			Admissions</a
		  >
		</li>
		<li>
		  <a href="{{url('event')}}">
			<i><img src="{{asset('Images/icons/events-icons.png')}}" /></i>
			Events</a
		  >
		</li>
		<li>
		  <a href="{{url('trainning')}}">
			<i><img src="{{asset('Images/icons/training.png')}}" /></i>
			Trainning Session</a
		  >
		</li>

		<li>
		  <a href="{{url('Publication')}}">
			<i><img src="{{asset('Images/icons/books.png')}}" /></i>
			Publication</a
		  >
		</li>
		<li>
		  <a href="{{url('education')}}">
			<i><img src="{{asset('Images/icons/academics.png')}}" /></i>
			Education</a
		  >
		</li>
		<li>
		  <a href="{{url('CGSS_gallery')}}">
			<i><img src="{{asset('Images/icons/gallery.png')}}" /></i>
			Gallery</a
		  >
		</li>
	  </ul>
	</div>
	<button class="menu__icons" id="show__menu">
	  <i class="fas fa-bars"></i>
	</button>
  </section>
	

	