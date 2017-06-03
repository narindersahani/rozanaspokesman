<div class="right_sidebar">
	<div class="post-listing">
		<div class="main-title">
			<h3>
				Politics
			</h3>
		</div>
		<ul>
			@foreach($politicsNews as $politics)
				<li>
					<a href="{{ route('pages.single', $politics->present()->slug) }}">
						{{ $politics->present()->title}}
					</a>
				</li>
			@endforeach
		</ul>
	</div>
</div>