<div class="right_sidebar">
	<div class="post-listing">
		<div class="main-title">
			<h3>
				Top News
			</h3>
		</div>
		<ul>
			@foreach($topNews as $top)
				<li>
					<div class="img_area pull-left">
						<img src="{{ asset($top->present()->thumbnailImage)}}" alt="{{ $top->present()->title }}" />
					</div>
					<a href="{{ route('pages.single', $top->present()->slug) }}">
						{{ $top->present()->title }}
					</a>
				</li>
			@endforeach
			<div class="add-box">
				<img src="{{ asset('/frontend/images/250x250.jpg') }}" alt="...">
			</div>
		</ul>
	</div>
</div>
