<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Portfolio</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
	<!-- Font -->
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="{{asset('public/assets/common-css/bootstrap.css')}}" rel="stylesheet">
	
	<link href="{{asset('public/assets/common-css/ionicons.css')}}" rel="stylesheet">
	
	<link href="{{asset('public/assets/common-css/fluidbox.min.css')}}" rel="stylesheet">
	
	<link href="{{asset('public/assets/css/styles.css')}}" rel="stylesheet">
	
	<link href="{{asset('public/assets/css/responsive.css')}}" rel="stylesheet">
	
</head>
<body>
	

	
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						@foreach($data['about'] as $row)
						<div class="profile-img">
							@if($row->profile_picture==null)
							 <img src="{{asset('public/images/a1.jpg')}}" alt="">
							@else
							 <img src="{{$row->profile_picture}}" alt="">
							@endif

						</div>

						<h2><b style='text-transform:uppercase'>{{$row->name}}</b></h2>
						<h4 class="font-yellow" style="text-transform:capitalize">{{$row->title}}</h4>
						<ul class="information margin-tb-30">
							<li><b>BORN : </b>{{$row->dob}}</li>
							<li><b>EMAIL : </b>{{$row->email}}</li>
							{{-- <li><b>MARITAL STATUS : </b>Married</li> --}}
						</ul>
						
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->
	

	
	
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>About me</b></h3>
						<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="margin-b-50">{{$row->about_me}}</p>
					@endforeach

					{{-- skill part --}}
					
					<div class="row">
					@foreach($data['skill'] as $skill)
						<div class="col-sm-6 col-md-6 col-lg-3">
							<div class="radial-prog-area margin-b-30">
								<div class="radial-progress" data-prog-percent=".{{$skill->skill_rate}}">
									<div></div>
									<h6 class="progress-title" style="text-transform: uppercase;">{{$skill->skill_name}}</h6>
								</div>
							</div><!-- radial-prog-area-->
						</div><!-- col-sm-6-->
					@endforeach
						
					</div><!-- row -->
					
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Work Experience</b></h3>
						<h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
				@foreach($data['experience'] as $exp)
					<div class="experience margin-b-50">
						<h4><b>{{$exp->title}}</b></h4>
						<h5 class="font-yellow"><b>{{$exp->company_name}}</b></h5>
						<h6 class="margin-t-10">
							({{$exp->start_date}}-@if ($exp->end_date == null) present @else {{$exp->end}}
							@endif)
						</h6>
						<p class="font-semi-white margin-tb-30" style="text-transform: uppercase;">
							{{$exp->description}}
						</p>
					</div><!-- experience -->
				@endforeach	

					
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- experience-section -->
	
	<section class="education-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						@foreach($data['education'] as $edu)
						<div class="education margin-b-50">
							<h4><b style="text-transform: capitalize;">{{$edu->degree_name}}</b></h4>
							<h5 class="font-yellow" ><b style="text-transform: capitalize;">{{$edu->institution_name}}</b></h5>
							<h6 class="font-lite-black margin-t-10">
							@if ($edu->passing_year == null) present 
							@else PASSED IN {{$edu->passing_year}}
							@endif
							</h6>
							
						</div><!-- education -->
						@endforeach

					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->
	

	
	<footer>
		<p class="copyright">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>


	</footer>
	
	
	<!-- SCIPTS -->
	
	<script src="{{('public/assets/common-js/jquery-3.2.1.min.js')}}"></script>
	
	<script src="{{('public/assets/common-js/tether.min.js')}}"></script>
	
	<script src="{{('public/assets/common-js/bootstrap.js')}}"></script>
	
	<script src="{{('public/assets/common-js/isotope.pkgd.min.js')}}"></script>
	
	<script src="{{('public/assets/common-js/jquery.waypoints.min.js')}}"></script>
	
	<script src="{{('public/assets/common-js/progressbar.min.js')}}"></script>
	
	<script src="{{('public/assets/common-js/jquery.fluidbox.min.js')}}"></script>
	
	<script src="{{('public/assets/common-js/scripts.js')}}"></script>
	
</body>
</html>