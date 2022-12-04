@extends('layouts.front')
@section('title')
 CGSS School
 @endsection
 @section('content')

        
    <section class="slider">
		<div
		  class="slider__elemnt active"
		  style="background-image: url({{asset('Images/slider/Head.JPG')}})"
		>
		  <div class="slider__content">
			<h2>Welcome to CGSS</h2>
			<p class="icons">
			  CGSS is one of the Pakistani’s Leading school with a national &
			  internatioal reputation & its motto is striving for Ahsan – e-
			  Taqweem
			</p>
		  </div>
		</div>
		<div
		  class="slider__elemnt"
		  style="background-image: url({{asset('Images/slider/Ja.JPG')}})"
		>
		  <div class="slider__content">
			<h2>Welcome to CGSS</h2>
			<p class="icons">
			  CGSS is one of the Pakistani’s Leading school with a national &
			  internatioal reputation & its motto is striving for Ahsan – e-
			  Taqweem
			</p>
		  </div>
		</div>
		<div
		  class="slider__elemnt"
		  style="background-image: url({{asset('Images/slider/Jr.jpg')}})"
		>
		  <div class="slider__content">
			<h2>Welcome to CGSS</h2>
			<p class="icons">
			  CGSS is one of the Pakistani’s Leading school with a national &
			  internatioal reputation & its motto is striving for Ahsan – e-
			  Taqweem
			</p>
		  </div>
		</div>
	  </section>
  
	  <!-- chairman section -->
  
	  <section class="chairman_section">
		<h2 class="heading__style">CHAIRMAN MESSAGE</h2>
		<div class="chairman__div">
		  <div class="chairman_message">
			<p>
			  Connoisseur grammar school system (CGSS) is about to complete its
			  journey of three decades. The institution is blessed with a very
			  dedicated and a professional team which has proved its metal over a
			  period of time. CGSS is an institute with a special blend of
			  educational excellence and character development. It is our keen
			  focus to develop a balanced emotionally stable knowledgeable
			  self-confident expressive and useful individuals for the mankind.
			  Connoisseurians willingly take interest in Co-curricular and
			  extracurricular activities. Charity work is also significant role of
			  our students which inculcate humanity love and care. We are proud to
			  have our slogan "Once a connoisseurian always a connoisseurian"
			  Quranic language Recitation of Quran with proper tjweed and
			  makharij, hifz of Quran and seerat-un-Nabi (SAWW) is another plume
			  of success worth mentioning
			</p>
		  </div>
		  <div class="chairman__image">
			<img src="{{asset('Images/Chairman.jpg')}}" alt="Chairman__image" />
		  </div>
		</div>
	  </section>
  
	  <!-- mission and vision section -->
  
	  <section class="chairman_section">
		<h2 class="heading__style">MISSION & VISION</h2>
		<div class="chairman__div">
		  <div class="chairman_message">
			<h3 class="heading__three">MISSION</h3>
			<p>
			  To Achieve spiritual excellence through Academic Excellence for
			  Becoming Best Educational Institute Nationally and Internationally
			</p>
			<h3 class="heading__three">VISION</h3>
			<p>
			  To strive for becoming FRIENDS of ALLAH by creating culture of TRUTH
			  (HUMANIZATION) for actualization of NOOR thereby attaining
			  Ahsan-i-Taqweem (ENLIGHTENMENT OF SOUL).
			</p>
		  </div>
		  <div class="chairman__image">
			<img src="{{asset('Images/Vision2.PNG')}}" alt="Chairman__image" />
		  </div>
		</div>
	  </section>
  
	  <div id="map"></div>
	@endsection

	<div class="modal__div" id="modal__of_data">
		<div class="modal">
		  <div class="modal__header">
			<h3>Notifications</h3>
			<span id="hide__modal">x</span>
		  </div>
		  <div class="modal__body">
			{{-- {{$data->Description}} --}}
			<h3>First Position in FBISE 2017 SSC-II Result</h3>
			<p> <strong>SHEZEEN TARIQ</strong> scored 1st  position in FBISE 2017</p>
			<p> <strong>KHADIJA KANWAL</strong> scored 5th position & </p>
			<p> <strong>FATIMA AMJAD</strong> sgot 9th  position in FBISE 2017</p>
			<h3>Position in FBISE 2020 SSC-II Result</h3>
			<p> <strong>Khadija Kifal</strong> Scored Fifth Position in FBISE 2020.</p>
			<h3> CAIE A Level Result 2020</h3>
			<p> <strong>Fakhara Ahmad</strong> got straight A*s</p>
			<h3> CAIE O Level Result 2020</h3>
			<p> <strong>Ghulam Mustafa Rasheed</strong> and <strong>Fatima Asif</strong> got Straight A*s</p>
		  </div>
		</div>
	  </div>
{{-- 			
		<input type="text" style="display: none;" id="activi" value="{{$data->Active}}" name="">
			 <div class="modal fade" style="top: 129px;" id="show_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#167ac6;      ">
							<h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<textarea id="about" rows="2"  name="about" cols="20" style="display: none;">{{$data->Description}}</textarea>
							<div id="container" ></div>
						</div>
					</div>
				</div>
			</div> --}}

