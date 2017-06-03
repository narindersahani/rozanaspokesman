@extends('layouts.home', ['pageTitle' => 'Single Page'])

@section('content')
	<!-- ==== single page start ==== -->
	<section class="single-page-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="content-display">
						<div class="row">
							<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
								@include('pages.partials.single-left-sidebar')
							</div>
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 border-line">
								<div class="content-section">
									<div class="title">
										<a href="#">
											<h2>
												{{ $pageInfo->present()->title}}
											</h2>
										</a>
										<p>
											Owns three 1-kanal houses, as many showrooms in Chandigarh
										</p>
										<div class="social-icons">
											<p>
												Share this News
											</p>
											<ul class="list-inline">
												<li class="facebook">
													<a href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>
												<li class="twitter">
													<a href="#">
														<i class="fa fa-twitter"></i>
													</a>
												</li>
												<li class="google-plus">
													<a href="#">
														<i class="fa fa-google-plus"></i>
													</a>
												</li>
												<li class="youtube">
													<a href="#">
														<i class="fa fa-youtube"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
									{!! $pageInfo->present()->preview !!}
									<div class="date">
										{{ $pageInfo->present()->eventDate }} (IST)
									</div>
									<p>
										{!! $pageInfo->present()->description !!}
									</p>
									<div class="next-prev">
										<ul class="list-inline">
											<?php
												$route = isset($isVideo) ? 'pages.single' : "pages.single";
											?>
											@if($prev)
												<?php $route = isset($isVideo) ? route('video.single.view', $prev->present()->slug) : route('pages.single', $prev->present()->slug); ?>
												<li class="prev">
													<a href="{{ $route }}">
														{{ str_limit($prev->present()->title, 40) }}
													</a>
												</li>
											@endif
											@if($next)
												<?php $route = isset($isVideo) ? route('video.single.view', $next->present()->slug) : route('pages.single', $next->present()->slug); ?>
												<li class="next">
													<a href="{{ $route }}">
														{{ str_limit($prev->present()->title, 40) }}
													</a>
												</li>
											@endif
										</ul>
									</div>
								</div>
								<div class="bottom_content">
									<div class="row">
										<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
											<div class="left_area">
												<div class="add">
													<img src="{{ asset('/frontend/images/add.jpg') }}" alt="..." />
												</div>
												<div class="feature_img">
													<img src="{{ asset('/frontend/images/amrinder.jpg') }}" alt="..." />
												</div>
											</div>
										</div>
										<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
											<div class="right_area">
												<a href="#">
													<h2>
														PSEB boards: 30-km travel to exam ...
													</h2>
												</a>
												<span>February 24, 2017</span>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporv incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
												</p>
												<div class="mid_area">
													<div class="img_area pull-left">
														<img src="{{ asset('/frontend/images/nss2.jpg') }}" alt="...">
													</div>
													<div class="right_area">
														<h3>
															"Mercedes Latest era of domination shows no sign of crumbling"
														</h3>
														<span>columnist</span>
														<p>
															Navjot Singh Sidhu
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
								@include('pages.partials.single-right-sidebar')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	<!-- ==== single page end ==== -->
@endsection