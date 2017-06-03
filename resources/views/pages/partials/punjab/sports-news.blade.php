<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
		@if(!$featuredNews->isEmpty())
			<?php $firstfeaturedNews = $featuredNews->first(); ?>
			<div class="sports-box">
				<img src="{{ asset( $firstfeaturedNews->present()->thumbnailImage ) }}" alt="...">
				<a href="{{ route('pages.single', $firstfeaturedNews->present()->slug) }}">
					<h2>
						{{ $firstfeaturedNews->present()->title }}
					</h2>
				</a>
				<p>
					{{ str_limit($firstfeaturedNews->present()->shortDescription, 220) }}
				</p>
				<span>
					{{ $firstfeaturedNews->present()->eventDate }}
				</span>
			</div>
		@endif
	</div>
	<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
		<div class="row">
			@foreach($featuredNews as $key => $sports)
				@if($key != 0)
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 border-line">
						<div class="sports-box">
							<h3>
								{{ $sports->present()->title }}
							</h3>
							<p>
								{{ str_limit($sports->present()->shortDescription, 240) }}
							</p>
							<a href="{{ route('pages.single', $sports->present()->slug) }}" class="read-more">
								See More
							</a>
						</div>
					</div>
				@endif
			@endforeach
		</div>
	</div>
</div>