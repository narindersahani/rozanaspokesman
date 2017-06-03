<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="news-area">
		<div class="row">
			<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
				<div class="left_area">
					<div class="row">
						<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 col-ip-6 border-right">
							@foreach($middleSectionNews as $key => $mNews)
								@if($key < 2)
									<div class="one_half">
										<div class="thumbnail">
											<img src="{{ asset( $mNews->present()->thumbnailImage ) }}" alt="{{$mNews->present()->title}}">
											<div class="caption">
												<a href="{{ route('pages.single', $mNews->present()->slug) }}">
													{{$mNews->present()->title}}
												</a>
												<div class="date">
													{{ $mNews->present()->eventDate }}
												</div>
											</div>
										</div>
									</div>
								@endif
							@endforeach
						</div>
						<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 col-ip-6">
							<div class="content">
								@if($middleSectionNews->count() >= 3)
									<?php $thirdPnews = $middleSectionNews[2]; ?>
									<a href="{{ route('pages.single', $thirdPnews->present()->slug) }}" >
										<h2>
											{{ $thirdPnews->present()->title }}
										</h2>
									</a>
									<p>
										{{ str_limit($thirdPnews->present()->shortDescription, 400) }}
									</p>
									<a href="{{ route('pages.single', $thirdPnews->present()->slug) }}" class="read-more">
										See More
									</a>
								@else
									Coming Soon......
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 border-left">
				<div class="left_area">
					<div class="row">
						<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 col-ip-6 border-right">
							<div class="one_half">
								@if($middleSectionNews->count() >= 4)
									<?php $forthPnews = $middleSectionNews[3]; ?>
									<div class="thumbnail">
										<img src="{{ asset( $forthPnews->present()->thumbnailImage ) }}" alt="{{$forthPnews->present()->title}}">
										<div class="caption">
											<a href="{{ route('pages.single', $forthPnews->present()->slug) }}" class="read-more">
												{{ $forthPnews->present()->title }}
											</a>
											<div class="date">
												{{ $forthPnews->present()->eventDate }}
											</div>
										</div>
									</div>
								@else
									Coming Soon...
								@endif
							</div>
							<div class="one_half">
								@if($middleSectionNews->count() >= 5)
									<?php $fifthPnews = $middleSectionNews[4]; ?>
									<div class="thumbnail">
										<img src="{{ asset( $fifthPnews->present()->thumbnailImage ) }}" alt="{{$fifthPnews->present()->title}}">
										<div class="caption">
											<a href="{{ route('pages.single', $fifthPnews->present()->slug) }}">
												{{ $fifthPnews->present()->title }}
											</a>
											<div class="date">
												{{ $fifthPnews->present()->eventDate }}
											</div>
										</div>
									</div>
								@else
									Coming Soon...
								@endif
							</div>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 col-ip-6">
							@if($middleSectionNews->count() >= 6)
								<?php $sixthPnews = $middleSectionNews[5]; ?>
								<div class="content">
									<a href="{{ route('pages.single', $sixthPnews->present()->slug) }}">
										<h2>
											{{ $sixthPnews->present()->title }}
										</h2>
									</a>
									<p>
										{{ str_limit($sixthPnews->present()->shortDescription, 400) }}
									</p>
									<a href="{{ route('pages.single', $sixthPnews->present()->slug) }}" class="read-more">
										See More
									</a>
								</div>
							@else
								Coming Soon......
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 visible-lg border-left">
				<div class="right_area">
					@if($middleSectionNews->count() >= 7)
						<?php $seventhPnews = $middleSectionNews[6]; ?>
						<div class="thumbnail">
							<img src="{{ asset( $seventhPnews->present()->thumbnailImage ) }}" alt="{{$seventhPnews->present()->title}}">
							<div class="caption">
								<a href="{{ route('pages.single', $seventhPnews->present()->slug) }}">
									{{ $seventhPnews->present()->title }}
								</a>
								<div class="date">
									{{ $seventhPnews->present()->eventDate }}
								</div>
								<p>
									{{ str_limit($seventhPnews->present()->shortDescription, 200) }}
								</p>
							</div>
						</div>
					@else
						Coming Soon......
					@endif
				</div>
			</div>
		</div>
	</div>
</div>