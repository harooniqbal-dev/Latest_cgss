@extends('app')
@section('title', 'About')
@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/about.css')}}">
@endsection
@section('content')
<section class="MV__statement">
    <h2 class="heading__style">
      About Us
    </h2>
            <div class="mission__div">
                <div class="mission_content">
                    <div class="M__statement">
                        <h2 class="title">Mission</h2>
                        <p>To Achieve spiritual excellence through Academic Excellence
                            for Becoming Best Educational Institute Nationally and Internationally</p>
                    </div>
                    <div class="V__statement">
                        <h2 class="title">Vision</h2>
                        <p>To strive for becoming FRIENDS of ALLAH by creating culture of
                            TRUTH ( HUMANIZATION) for actualization of NOOR thereby
                            attaining Ahsan-i-Taqweem ( ENLIGHTENMENT OF SOUL). </p>
                    </div>
                </div> 
                    <div class="MV__image" >
                        <img src="{{asset('Images/mission.PNG')}}" class="img-fluid">
                    </div>    
            </div>
            
  {{-- ===  Start History section  === --}}

      <div class="mission__div">
              <div class="mission_content">
                  <h2 class="title">History</h2>
                  <p>It was in 1996 that the institution started its divine journey towards perfection. In a very short span of time, it got recognition from the educational circles and society.
                  </p>
                  <ul class="history__list">
                      <li>Formally affiliated with Federal Board of Intermediate and Secondary Education Islamabad on 2002 under the registration code 2869.</li>
                      <li>The first batch of matriculation appeared in the Federal Board of Intermediate Examination in the year 2003.</li>
                      <li>It was declared as examination center and given the recognition by British Council on 2008 under the registration code PK902.</li>
                      <li>The first formal batch of O’ level appeared in year 2008. </li>
                      <li>The Hifz-e- Quarn Program is a distinctive specialty of CGSS. It was Started in August  2006.</li>
                  </ul>
    
              </div>
          <div class="MV__image latest_image">
              <img src="{{asset('Images/slider/Main.jpg')}}" class="img-fluid">
          </div>
      </div>

{{-- ===   end History section   === --}}

  {{-- ===  Start CAMPUSES section === --}}

    <h2 class="heading__style" style="margin-top: 10px">Our Campuses</h2>
        <div class="Cgss__compuses">
        <div class="card__compuses">
            <img src="{{asset('Images/Slider/Main.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h4 class="card-title">MAIN BRANCH( SARGODHA)</h4> 
            </div>
        </div>
        <div class="card__compuses">
            <img src="{{asset('Images/Slider/Head.JPG')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">HEAD OFFICE ( BOYS BRANCH,
             SARGODHA)
            </h4> 
            </div>
        </div>
        <div class="card__compuses">
            <img src="{{asset('Images/Slider/Jr.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Jr. MATRIC BRANCH ( SARGODHA)</h4>  
            </div>
        </div>
        <div class="card__compuses">
            <img src="{{asset('Images/Slider/Ja.JPG')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">JAUHARABAD BRANCH</h4>
            </div>
        </div>
    </div>

</section>
@endsection
