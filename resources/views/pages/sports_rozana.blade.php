@extends('layouts.home', ['pageTitle' => trans('page_titles.frontend.sports_rozana')])

@section('content')
	<!-- ==== sports section start ==== -->
	<section class="sports_section_page">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
					<div class="main-title">
						<h3>
							Top News
						</h3>
					</div>
					<div class="left_sports_news">
						@foreach($featuredNews as $key => $lfeaturedNews)
							@if($key < 3)
								<div class="post_sidebar">
									<div class="img_area">
										<img src="{{ asset($lfeaturedNews->present()->squreThumbnailImage)}}" alt="{{ $lfeaturedNews->present()->title }}" />
									</div>
									<a href="{{ route('pages.single', $lfeaturedNews->present()->slug) }}">
										{{ str_limit($lfeaturedNews->present()->title, 40) }}
									</a>
								</div>
							@endif
						@endforeach
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="main-title sports_title">
						<h3>
							Sports News
						</h3>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border-line">
							<div class="middle_sports_area">
								<div class="latest_sports_post">
									@if($bannerNews)
										<img src="{{ asset($bannerNews->present()->orgImage)}}" alt="{{ $bannerNews->present()->title }}" />
										<div class="caption">
											<h3>
												<a href="{{ route('pages.single', $bannerNews->present()->slug) }}">
													{{ str_limit($bannerNews->present()->title, 100) }}
												</a>
											</h3>
											<span>
												{{ $bannerNews->present()->eventDate }}
											</span>
											<p>
												{!! str_limit($bannerNews->present()->description, 200) !!}
											</p>
										</div>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
					<div class="main-title">
						<h3>
							Top News
						</h3>
					</div>
					<div class="left_sports_news">
						@foreach($featuredNews as $key => $rfeaturedNews)
							@if($key >= 3)
								<div class="post_sidebar">
									<div class="img_area">
										<img src="{{ asset($rfeaturedNews->present()->squreThumbnailImage)}}" alt="{{ $rfeaturedNews->present()->title }}" />
									</div>
									<a href="{{ route('pages.single', $rfeaturedNews->present()->slug) }}">
										{{ str_limit($rfeaturedNews->present()->title, 40) }}
									</a>
								</div>
							@endif
						@endforeach
					</div>
				</div>				
			</div>
		</div>
	</section>
	<!-- ==== sports section end ==== -->

	<!-- ==== sports bottom start ==== -->
	@include('pages.partials.sports.middle-section-news')
	<!-- ==== sports bottom end ==== -->

	<!-- ==== Punjab News section start ==== -->
	@include('pages.partials.sports.footer-section-news')
	<!-- ==== punjab news section end ==== -->
@endsection