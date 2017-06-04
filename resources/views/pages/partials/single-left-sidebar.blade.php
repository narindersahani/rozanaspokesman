<div class="left-sidebar">
	<div class="thumbnail">
		<div class="img_area">
			<img src="{{ asset($leftNews->present()->smallImage) }}" alt="..." />
		</div>
		<div class="caption">
			<h3>
				{{ $leftNews->present()->title}}
			</h3>
			<span>
				{{ $leftNews->present()->eventDate }}
			</span>
			<p>
				{{ str_limit($leftNews->present()->shortDescription, 150) }}
				<a href="<?php route('pages.single', $leftNews->present()->slug); ?>" class="read-more">See More</a>
			</p>
		</div>
	</div>
	<div class="thumbnail">
		<div class="img_area">
			<img src="{{ asset('/frontend/images/sidebar2.jpg') }}" alt="..." />
		</div>
		<div class="main-title">
			<h3>
				Opinion
			</h3>
		</div>
		<div class="paragraph">
			<p>
				<span><img src="{{ asset('/frontend/images/left-quote.png') }}" alt=""></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo veritatis, delectus minus harum numquam, ipsam eligendi perspiciatis quod rem autem, blanditiis nihil vero enim
			</p>
			<p class="name">
				Rashmi Jain
				<span>Student</span>
			</p>
		</div>
	</div>
	<div class="left_add">
		<img src="{{ asset('/frontend/images/left-add.jpg') }}" alt="..." />
	</div>
</div>
