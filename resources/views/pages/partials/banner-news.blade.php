<div class="left-area">
	<div id="spoke-post" class="owl-carousel slide-post">
        @foreach($bannerNews as $banner)
    		<div class="item">
                <img src="{{ asset($banner->present()->orgImage) }}" alt="{{ $banner->present()->title }}" />
                <div class="caption">
                	<div class="main-title">
                		<h3>
                			Today’s News
                		</h3>
                	</div>
                	<h2>
                		{{ $banner->present()->title }}
                	</h2>
                	<a href="{{ route('pages.single', $banner->present()->slug) }}" class="read-more">See More</a>
                </div>
                <!-- <div class="plus-icon">
                	<a href="#">
                		<i class="fa fa-plus"></i>
                	</a>
                </div> -->
            </div>
        @endforeach
	</div>
	<div id="slide-text" class="owl-carousel slide-text">
        @foreach($bannerNews as $banner)
    		<div class="item">
    			<div class="logo-holder border0">
    				<div class="img_box pull-left">
    					<img src="{{ asset($banner->present()->thumbnailImage) }}" alt="{{ $banner->present()->title }}" />
    				</div>
    				<a href="">
    					{{ str_limit($banner->present()->title, 30) }}
    				</a>
    			</div>
    		</div>
        @endforeach
	</div>
</div>
