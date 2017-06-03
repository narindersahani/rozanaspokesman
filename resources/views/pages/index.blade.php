@extends('layouts.home')

@section('content')
	<!-- ==== post slider ==== -->
	<section class="post-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="post_area">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								@include('pages.partials.banner-news')
							</div>
							@include('pages.partials.politics-news')
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==== post slider end ==== -->

	<!-- ==== Punjab News section start ==== -->
	@include('pages.partials.punjab-news')
	<!-- ==== punjab news section end ==== -->

	<!-- ==== Related videos section start ==== -->
	@include('pages.partials.recent-videos')
	<!-- ==== Related videos section end ==== -->

	<!-- ==== Sports section start ==== -->
	@include('pages.partials.sports')
	<!-- ==== Sports section end ==== -->
@endsection