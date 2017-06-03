@extends('layouts.home', ['pageTitle' => trans('page_titles.frontend.'.$category.'_rozana')])

@section('content')
	<!-- ==== Sports section start ==== -->
	<section class="sports-section punjab_rozana">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="sports-news">
						<div class="row">
							<div class="col-lg-2 col-md-2 hidden-sm hidden-xs border-right">
								@include('pages.partials.punjab.politics')
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="main-title">
									<h3>
										{{ucfirst($category)}} News
									</h3>
								</div>
								<div class="left-sports">
									@include('pages.partials.punjab.sports-news')
								</div>
							</div>
							<div class="col-lg-2 col-md-2 hidden-sm hidden-xs border-left">
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
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo veritatis, delectus minus harum numquam, ipsam eligendi perspiciatis quod rem autem, blanditiis nihil vero enim
										</p>
										<p class="name">
											Rashmi Jain
											<span>Student</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==== Sports section end ==== -->

	@if(!$middleSectionNews->isEmpty())
		<?php
			$firstItem = $middleSectionNews->shift();
			$secondItem = $middleSectionNews->shift();
		?>
		<!-- ==== footer top section start ==== -->
		<section class="footer-top-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="left_content">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 border-right">
									<div class="news_area">
										<h3>
											{{ $firstItem->present()->title }}
										</h3>
										<span>{{ $firstItem->present()->eventDate }}</span>
										<p>
											{{ str_limit($firstItem->present()->shortDescription, 200) }}
										</p>
										<a href="{{ route('pages.single', $firstItem->present()->slug) }}" class="read-more">
											See More
										</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="mid_area">
										<div class="img_area pull-left">
											<img src="{{ asset( $secondItem->present()->squreThumbnailImage ) }}" alt="{{$secondItem->present()->title}}">
										</div>
										<div class="right_area">
											<h3>
												{{ $secondItem->present()->title }}
											</h3>
											<p>
												{{ str_limit($secondItem->present()->shortDescription, 100) }}
											</p>
										</div>
									</div>
								</div>
								<div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
									<div class="add_box">
										<img src="{{ asset('/frontend/images/add.jpg') }}" alt="...">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ==== footer top section end ==== -->

		<!-- ==== Punjab News section start ==== -->
		<section class="punjab-news-section rozana_news">
			<div class="container">
				<div class="row">
					@include('pages.partials.punjab.middle-section-news')
				</div>
			</div>
		</section>
	@endif
		<!-- ==== punjab news section end ==== -->	

	<!-- ==== Punjab News section start ==== -->
	@if(!$footerSectionNews->isEmpty())
		<section class="punjab-news-section rozana_news">
			<div class="container">
				<div class="row">
					@include('pages.partials.punjab.footer-section-news')
				</div>
			</div>
		</section>
	@endif
	<!-- ==== punjab news section end ==== -->
@endsection