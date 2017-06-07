<section class="related-video-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="main-title">
					<h3>
						Lifestyle News
					</h3>
				</div>
				<div class="news-area">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="left_area">
								<div class="row">
									@foreach($lifestyleNews as $pnews)
										<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col-ip-6">
											<div class="one_half">
												<div class="thumbnail">
													<img src="{{ asset( $pnews->present()->thumbnailImage ) }}" alt="...">
													<div class="caption">
														<a href="{{ route('pages.single', $pnews->present()->slug) }}">
															{{ str_limit($pnews->present()->title, 65) }}
														</a>
														<div class="date">
															{{ $pnews->present()->eventDate }}
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

