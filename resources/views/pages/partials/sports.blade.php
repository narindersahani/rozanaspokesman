@if(!$sportsNews->isEmpty())
	<?php
		$firstNews = $sportsNews->first();
	?>
	<section class="sports-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="main-title">
						<h3>
							Sports News
						</h3>
					</div>
					<div class="sports-news">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<div class="left-sports">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
											<div class="sports-box">
												<img src="{{ asset($firstNews->present()->thumbnailImage) }}" alt="{{ $firstNews->present()->title }}">
												<a href="{{ route('pages.single', $firstNews->present()->slug) }}">
													<h2>
														{{ $firstNews->present()->title }}
													</h2>
												</a>
												<span>
													{{ $firstNews->present()->eventDate }}
												</span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
											<div class="row">
												<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 border-line">
													<div class="sports-box">
														@if($sportsNews->count() > 1)
															<?php $secondNews = $sportsNews->offsetGet(1); ?>
															<h3>
																{{ $secondNews->present()->title }}
															</h3>
															<p>
																{{ str_limit($secondNews->present()->shortDescription, 200) }}
															</p>
															<a href="{{ route('pages.single', $secondNews->present()->slug) }}" class="read-more">
																See More
															</a>
														@else
															Comming Soon
														@endif
													</div>
												</div>
												<div class="col-lg-6 hidden-md hidden-sm hidden-xs">
													<div class="sports-box">
														<div class="ads_area">
															<img class="one" src="{{ asset('/frontend/images/250x250.jpg') }}" alt="..." />
															<img src="{{ asset('/frontend/images/250x250.jpg') }}" alt="..." />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="footer-top-section">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="left_content">
												<div class="row">
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 border-right">
														<div class="news_area">
															@if($sportsNews->count() > 2)
																<?php $thirdSportNews = $sportsNews->offsetGet(2); ?>
																<h3>
																	{{ $thirdSportNews->present()->title }}
																</h3>
																<span>{{ $thirdSportNews->present()->eventDate }}</span>
																<p>
																	{{ str_limit($thirdSportNews->present()->shortDescription, 200) }}
																</p>
																<a href="{{ route('pages.single', $thirdSportNews->present()->slug) }}" class="read-more">
																	See More
																</a>
															@else
																Comming Soon
															@endif
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
														@if($sportsNews->count() > 3)
															<?php $fourthSportNews = $sportsNews->offsetGet(3); ?>
															<div class="mid_area">
																<div class="img_area pull-left">
																	<img src="{{ asset($fourthSportNews->present()->squrethumbnailImage) }}" alt="{{ $fourthSportNews->present()->title }}">
																</div>
																<div class="right_area">
																	<h3>
																		{{ $fourthSportNews->present()->title }}
																	</h3>
																	<!-- <span>Enterprenuer</span> -->
																	<p>
																		{{ str_limit($fourthSportNews->present()->shortDescription, 200) }}
																	</p>
																</div>
															</div>
														@else
															Comming Soon
														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="right-sports">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
											@if($sportsNews->count() > 4)
												<?php $fifthSportNews = $sportsNews->offsetGet(4); ?>
												<div class="sports-box">
													<h3>
														{{ $fifthSportNews->present()->title }}
													</h3>
													<p>
														{{ str_limit($fifthSportNews->present()->shortDescription, 350) }}
													</p>
													<a href="{{ route('pages.single', $fifthSportNews->present()->slug ) }}" class="read-more">
														See More
													</a>
												</div>
											@else
												Comming Soon
											@endif
										</div>
										<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
											<div class="sports-box">
												<img src="{{ asset('/frontend/images/sports/2.jpg') }}" alt="...">		
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endif