<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="news-area">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
				<div class="right_area">
					<?php $footerFirstNews = $footerSectionNews->shift(); ?>
					<div class="thumbnail">
						<img src="{{ asset( $footerFirstNews->present()->thumbnailImage ) }}" alt="{{$footerFirstNews->present()->title}}">
						<div class="caption">
							<a href="{{ route('pages.single', $footerFirstNews->present()->slug) }}">
								{{ $footerFirstNews->present()->title }}
							</a>
							<div class="date">
								{{ $footerFirstNews->present()->eventDate }}
							</div>
							<p>
								{{ str_limit($footerFirstNews->present()->shortDescription, 400) }}
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-7 col-xs-12 border-line">
				<div class="middle_area">
					<ul>
						@foreach($footerSectionNews as $key => $fNews)
							<li>
								<a href="{{ route('pages.single', $fNews->present()->slug) }}">
									{{ $fNews->present()->title }}
								</a>
								<p>
									{{ str_limit($fNews->present()->shortDescription, 120) }}
								</p>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				@if($latestVideo)
					<div class="video_area_box">
						<a href="{{ route('video.single.view', ['slug' => $latestVideo->present()->slug, 'cat_slug' => $category]) }}" target="_blank">
							<img src="{{ asset($latestVideo->present()->largeImage)}}" alt="{{ $latestVideo->present()->title }}" height="280" width="390"/>
						</a>
						<a href="{{ route('video.single.view', ['slug' => $latestVideo->present()->slug, 'cat_slug' => $category]) }}" target="_blank">
							<h2>
								{{str_limit($latestVideo->present()->title, 100)}}
							</h2>
						</a>
						<div class="share_post">
							<span class="pull-left">{{ $latestVideo->present()->eventDate }}</span>
							<ul class="list-inline pull-right">
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
					@else
						Video Coming soon...
					@endif
				</div>
			</div>
		</div>
	</div>
</div>