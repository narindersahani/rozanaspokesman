<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
	<div class="right-area">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 border-line">
				<div class="post-listing">
					<div class="main-title">
						<h3>
							Politics
						</h3>
					</div>
					<ul>
						@foreach($politicsNews as $pol_news)
							<li>
								<div class="img_area pull-left">
									<img src="{{ asset($pol_news->present()->thumbnailImage)}}" alt="{{ $pol_news->present()->title }}" />
								</div>
								<a href="{{ route('pages.single', $pol_news->present()->slug) }}">
									{{ str_limit($pol_news->present()->title, 50) }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
				<div class="ads_area">
					<img src="{{ asset('/frontend/images/250x250.jpg')}}" alt="..." />
				</div>
				<div class="opinion_area">
					<div class="main-title">
						<h3>
							Opinion
						</h3>
					</div>
					<div class="paragraph">
						<p>
							<span><img src="{{ asset('/frontend/images/left-quote.png')}}" alt=""></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo veritatis, delectus minus harum numquam, ipsam eligendi perspiciatis quod rem autem, blanditiis nihil vero enim
						</p>
						<p class="name">
							Rashmi Jain
							<span>Student</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
