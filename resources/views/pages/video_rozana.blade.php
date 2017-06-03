@extends('layouts.home')

@section('content')
	<!-- ==== sports section start ==== -->
	<section class="video_section_page">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
					<div class="left_video_news">
						<div class="opinion_area">
							<div class="img_area">
								<img src="{{ asset('/frontend/images/opinion/opnion8.jpg') }}" alt="...">
							</div>
							<div class="main-title">
								<h3>
									Opinion
								</h3>
							</div>
							<div class="paragraph">
								<p>
									“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								</p>
								<p class="name">
									Rashmi Jain
									<span>Student</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 border-line">
					<div class="main-title video_title">
						<h3>
							Rozana Videos
						</h3>
					</div>
					<div class="middle_video_area">
						<div class="latest_video_post">
							<h3>
								61 Cavalry bags Army Polo Championship 2017
							</h3>
							<span>
								February 24, 2017
							</span>
							<iframe src="https://www.youtube.com/embed/WDJqXZdaGtc?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="main-title video_right_title">
						<h3>
							Top News
						</h3>
					</div>
					<div class="right_video_news">
						<div class="post_sidebar">
							<div class="img_area">
								<img src="{{ asset('/frontend/images/news/9.jpg') }}" alt="...">
							</div>
							<a href="#">
								<b>Rio Olympics Closing Ceremony:</b> World
								Chess Championship 2016 Latest Indian 
							</a>
						</div>
						<div class="post_sidebar">
							<div class="img_area">
								<img src="{{ asset('/frontend/images/news/10.jpg') }}" alt="...">
							</div>
							<a href="#">
								<b>Gambhir</b>, Jayant Yadav in for injured ayant Yadav in for injured
							</a>
						</div>
						<!-- <div class="post_sidebar">
							<div class="img_area">
								<img src="{{ asset('/frontend/images/news/11.jpg') }}" alt="...">
							</div>
							<a href="#">
								<b>Invitation from SCA to PM Modi:</b>
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==== sports section end ==== -->

	<!-- ==== Related Video Section start ==== -->
	<section class="related_video_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
					<div class="videos-parts">
						<div class="row">
							<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
								<div class="videos-box">
									<iframe src="https://www.youtube.com/embed/jdVmBG5LptQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
									<a href="#">
										Kerala molestation: Accused taken to various ...
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
								<div class="videos-box">
									<iframe src="https://www.youtube.com/embed/oU_1rQSvLgw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
									<a href="#">
										Akshay Kumar says will never try hand at direction
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
								<div class="videos-box">
									<iframe src="https://www.youtube.com/embed/Ma9Dy-B9sMM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
									<a href="#">
										Not attending Oscars, confirms Deepika padukone...
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
								<div class="videos-box">
									<iframe src="https://www.youtube.com/embed/XVwuqaJRFgw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
									<a href="#">
										'Kawarias' vandalise vehicles after road accident
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
								<div class="videos-box">
									<iframe src="https://www.youtube.com/embed/jdVmBG5LptQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
									<a href="#">
										Kerala molestation: Accused taken to various ...
									</a>
								</div>
							</div>
							<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
								<div class="videos-box">
									<iframe src="https://www.youtube.com/embed/oU_1rQSvLgw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
									<a href="#">
										Akshay Kumar says will never try hand at direction
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
					<div class="ads_box">
						<img src="{{ asset('/frontend/images/250x250.jpg') }}" alt="...">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==== Related Video Section end ==== -->
@endsection