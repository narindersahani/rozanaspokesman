<?php
	$firstVideo = $latestVideos->first();
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
						<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center">
							<div class="left-add">
								<img src="{{ asset('/frontend/images/left-add.jpg') }}" alt="..." />
							</div>
						</div>
							@if($firstVideo)
								<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 col-ip-6">
									<div style="margin-bottom: 10px;">
										<h3><?php echo $firstVideo->title ?></h3>
										<p>{{str_limit($firstVideo->present()->short_description, 380)}}</p>
									</div>
									
									<div class="left-video">
										<?php echo $firstVideo->present()->preview ?>
										<!--a href="{{ route('video.single.view', ['slug' => $firstVideo->present()->slug, 'cat_slug' => $category]) }}" target="_blank">
											<img src="{{ asset($firstVideo->present()->largeImage)}}" alt="{{ $firstVideo->present()->title }}"/>
										</a-->
									</div>
								</div>
							@else
								<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 col-ip-6">
									<div class="left-video">
										Coming Soon
									</div>
								</div>
							@endif
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-ip-6 text-right">
								<div class="right-area">
									<img src="http://lorempixel.com/300/550">
								</div>
							</div>
					</div>
				</div>
				@if(count($latestVideos) > 1)
					<div class="videos-parts">
						<div class="row">
							@foreach($latestVideos as $key => $video)
								@if($key > 0)
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
