@extends('app')
@section('title', 'Admission')

@section('cssfile')
<link rel="stylesheet" type="text/css" href="{{asset('newcssfile/admission.css')}}">
@endsection

@section('content')
    <div class="admission_info">
			<h2 class="heading__style">
				Admission Process / Info	
			</h2>
		<div class="addmission__row">
				<div class="information_desk">
					<div class="innerdiv">
					<div class="image__div" >
						<img src="{{asset('Images/inf.JPG')}}" class="img-responsive">
						<div class="adm_fig_title">Information Desk</div>
					</div>
						<p>
							<ul style="padding: 15px">
								<li>The Front Office Incharge ( Parents Relationship Officer) will assist the Parents for their queries.</li>
								<li>Regular admissions start a month before new session.</li>
								<li>Randomly admissions take place round the year.</li>
								<li>The class in which a child is admitted is adjusted in accordance with the child’s age.</li>
								<li>Each academic session consists of two terms.</li>
							</ul>
						</p>
					</div>
				</div>

				<div class="information_desk">
					<div class="innerdiv">
					<div class="image__div" >
						<img src="{{asset('Images/Interview.JPG')}}" class="img-responsive">
						<div class="adm_fig_title">Interview</div>
					</div>
					<p class="content">
						When information Desk forward the Parents & child for further process, an interview will be scheduled. In interview basically the previous knowledge, academic background record is inquired.
					</p>
				  </div>	
				</div>

				<div class="information_desk">
					<div class="innerdiv">
					<div class="image__div" >
						<img src="{{asset('Images/Placement.JPG')}}" class="img-responsive">
						<div class="adm_fig_title">Placement Test</div>
					</div>
					<p class="content">
						Once the interview is over, a tentative time will be given to the Parents for the child’s placement test. This test is conducted under the supervision of Front Office Incharge. Parents then will be informed of the results irrespective of whether the child has passed the test or not. If child has cleared the test, the Account Officer will record the child’s details & a fee voucher will be generated.
					</p>
				 </div>
				</div>
		</div>
	</div>

@endsection
