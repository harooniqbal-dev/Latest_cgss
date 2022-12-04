@extends('app')
@section('title', 'Alumni')
@section('cssfile')
    <link rel="stylesheet" type="text/css" href="{{asset('newcssfile/education.css')}}">
    @endsection
@section('content')
<div class="course_info">

			<h2 class="heading__style">
				Courses We Offer
			</h2>

            <h3 class="m_title_line">
				Matriculation System affiliated with Federal Board
			</h3>
	
		<div class="course__row">		
				<div class="matric_detail set">
				
						<h4 class="detail_title_line">
							Compulsory Subjects
						</h4>
						<ul class="courses_content"  style="list-style-type: square;">
							<li>
								English
							</li>
							<li>
								Urdu
							</li>
							<li>
								Islamiat
							</li>
							<li>
								Pakistan Studies 
							</li>
							<li>
								Math
							</li>
							<li>
								Physics
							</li>
							<li>
								Chemistry
							</li>	
						</ul>
						<h4 class="detail_title_line">
							Elective Subjects
						</h4>
						<ul  style="list-style-type: square;">
							<li>
								Biology
							</li>
							<li>
							Computer Science
							</li>
						</ul>
		
				</div>
		
			</div>
		
					<h3 class="m_title_line">
						Cambridge System affiliated with British Council
					</h3>
		
				<div class="course__row">
				
				
				<div class="matric_detail set">
					
						<h4 class="detail_title_line">
							O Level Subjects
						</h4>
						<ul class="courses_content" style="list-style-type: square;">
							<li>
								English
							</li>
							<li>
								Urdu
							</li>
							<li>
								Islamiat
							</li>
							<li>
								Pakistan Studies (History and Geography)
							</li>
							<li>
								Math
							</li>
							<li>
								Physics
							</li>
							<li>
								Chemistry
							</li>
							<li>
								Biology
							</li>
							<li>
								Computer Science
							</li>
						</ul>
						<h4 class="detail_title_line">
							A Level Subjects
						</h4>
						<ul  style="list-style-type: square;">
							<li>
								Chemistry
							</li>
							<li>
								Biology
							</li>
							<li>
								Physics
							</li>
							<li>
								Math
							</li>
							<li>
								Business studies
							</li>
						</ul>
				
				</div>
	

				</div>
				
					<h3 class="m_title_line">
						Hifz Section
					</h3>
		
				<div class="course__row">
					<div class="col-lg-12 col-md-12 col-sm-12 ocol-xs-12">
						<div class="Hifz_detai set">
							<ul class="text-left" style="list-style-type: square;">
							<li>
								Hifz –e Quran with Tajweed Classes
							</li>
							<li>
								Completion of Quran with in 3 years
							</li>
							<li>
								English , Urdu, Math ( only in Grade 4 and 5)
							</li>
							<li>
								Quranic Language ( 9 Years Program)
							</li>
						</ul>
							
						</div>
						
						
					</div>
					
				</div>

	</div>
	</div>
	@endsection

