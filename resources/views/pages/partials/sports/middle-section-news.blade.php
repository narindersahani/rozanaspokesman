<?php 
	$mfirst = $msecond = null;
	$mfirst  = $middleSectionNews->shift();

	if(!$middleSectionNews->isEmpty()) {
		$msecond  = $middleSectionNews->shift();
	}

?>
<section class="sports_bottom_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="sports_bottom_area">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 border-right">
							<div class="sports-box">
								@if($mfirst)
									<h3>
										{{ $mfirst->present()->title }}
									</h3>
									<p>
										{{ str_limit($mfirst->present()->shortDescription, 200) }}
									</p>
									<a href="{{ route('pages.single', $mfirst->present()->slug) }}" class="read-more">
										See More
									</a>
								@else
									Coming Soon....
								@endif
							</div>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
							<div class="bottom_middle">
								<div class="row">
									<div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
										<div class="add_block">
											<img src="{{ asset('/frontend/images/250x250.jpg') }}" alt="...">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 border-left">
										@if($msecond)
											<div class="thumbnail">
												<img src="{{ asset($msecond->present()->thumbnailImage)}}" alt="{{ $msecond->present()->title }}" />
												<a href="{{ route('pages.single', $msecond->present()->slug) }}">
													{{ str_limit($msecond->present()->title, 70) }}
												</a>
												<span>
													{{ $msecond->present()->eventDate }}
												</span>
											</div>
										@else
											Coming Soon....
										@endif
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="add_block horzontal_add">
											<img src="{{ asset('/frontend/images/add.jpg') }}" alt="...">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-4 col-sm-12 col-xs-12 border-left">
							@foreach($middleSectionNews as $key => $news)
								<div class="news_area">
									<h3>
										<a href="{{ route('pages.single', $news->present()->slug) }}">
											{{ str_limit($news->present()->title, 70) }}
										</a>
									</h3>
									<span>{{ $news->present()->eventDate }}</span>
									<p>
										{{ str_limit($news->present()->shortDescription, 200) }}
									</p>
									<a href="{{ route('pages.single', $news->present()->slug) }}" class="read-more">
										See More
									</a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>