<section class="punjab-news-section sports_last_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="news-area">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="left_area">
								<div class="row">
									<div class="col-lg-8 col-md-6 col-sm-7 col-xs-12">
										@if($latestVideo)
											<div class="sports-box">
												<img src="{{ asset($latestVideo->present()->largeImage)}}" alt="{{ $latestVideo->present()->title }}" height="280" width="390"/>
												<a href="{{ route('video.single.view', ['slug' => $latestVideo->present()->slug, 'cat_slug' => $category]) }}" target="_blank">
													<h2>
														{{str_limit($latestVideo->present()->title, 100)}}
													</h2>
												</a>
												<span>
													{{ $latestVideo->present()->eventDate }}
												</span>
											</div>
										@else
											Coming Soon.....
										@endif
									</div>
									<div class="col-lg-4 col-md-6 col-sm-5 col-xs-12 border-left">
										<?php $footerFirstNews = $footerSectionNews->shift(); ?>
										@if($footerFirstNews)
											<div class="sports-box">
												<h3>
													<a href="{{ route('pages.single', ['slug' => $footerFirstNews->present()->slug, 'cat_slug' => $category]) }}">
														{{ $footerFirstNews->present()->title }}
													</a>
												</h3>
												<p>
													{{ str_limit($footerFirstNews->present()->shortDescription, 400) }}
												</p>
												<a href="{{ route('pages.single', ['slug' => $footerFirstNews->present()->slug, 'cat_slug' => $category]) }}" class="read-more">
													See More
												</a>
											</div>
										@else
											<div class="sports-box">
												Coming Soon....
											</div>
										@endif
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 border-left">
							<div class="left_area">
								<div class="row">
									@foreach($footerSectionNews as $key => $fNews)
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ip-6">
											<div class="one_half">
												<div class="thumbnail">
													<img src="{{ asset( $fNews->present()->thumbnailImage ) }}" alt="{{$fNews->present()->title}}">
													<div class="caption">
														<a href="{{ route('pages.single', ['slug' => $fNews->present()->slug, 'cat_slug' => $category]) }}" class="read-more">
															{{ str_limit($fNews->present()->title, 30) }}
														</a>
														<div class="date">
															{{ $fNews->present()->eventDate }}
														</div>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>