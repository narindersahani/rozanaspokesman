<?php
	$firstVideo = $latestVideos->first();
	$secondVideo = $latestVideos[1] ?? null;
?>
<section class="related-video-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="main-title">
					<h3>
						Related Videos
					</h3>
				</div>
				<div class="video-section">
					<div class="row">
						<div class="col-lg-2 col-md-2 hidden-sm hidden-xs ad_box_width">
							<div class="left-add">
								<img src="{{ asset('/frontend/images/left-add.jpg') }}" alt="..." />
							</div>
						</div>
						<div class="custom_width">
							@if($firstVideo)
								<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 col-ip-6">
									<div class="left-video">
										<a href="{{ route('video.single.view', ['slug' => $firstVideo->present()->slug, 'cat_slug' => $category]) }}" target="_blank">
											<img src="{{ asset($firstVideo->present()->largeImage)}}" alt="{{ $firstVideo->present()->title }}" height="600" width="700"/>
										</a>
									</div>
								</div>
							@else
								<div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 col-ip-6">
									<div class="left-video">
										Coming Soon
									</div>
								</div>
							@endif

							@if($secondVideo)
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-ip-6">
									<div class="right-area">
										<a href="{{ route('video.single.view', ['slug' => $secondVideo->present()->slug, 'cat_slug' => $category]) }}" target="_blank">
											<img src="{{ asset($secondVideo->present()->largeImage)}}" alt="{{ $secondVideo->present()->title }}" height="600" width="350"/>
										</a>
									</div>
								</div>
							@else
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-ip-6">
									<div class="right-area">
										Coming Soon
									</div>
								</div>
							@endif
						</div>
					</div>
				</div>
				@if(count($latestVideos) > 2)
					<div class="videos-parts">
						<div class="row">
							@foreach($latestVideos as $key => $video)
								@if($key > 1)
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-ip-6">
										<div class="videos-box">
											<a href="{{ route('video.single.view', ['slug' => $video->present()->slug, 'cat_slug' => $category]) }}">
												<img src="{{ asset($video->present()->largeImage)}}" alt="{{ $video->present()->title }}" height="150" width="300"/>
											</a>
											<a href="{{ route('video.single.view', ['slug' => $video->present()->slug, 'cat_slug' => $category]) }}">
												{{str_limit($video->present()->title, 50)}}
											</a>
										</div>
									</div>
								@endif
							@endforeach
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
</section>