<!-- ==== header section start ==== -->
<section class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-top-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 border-right border-none">
                            <div class="one-third logo-area">
                                <a href="{{ URL::to('/')}}">
                                    <img src="{{ asset('/frontend/images/logo.png') }}" alt="..."/>
                                </a>
                            </div>
                            <div id="dl-menu" class="dl-menuwrapper">
                                <button class="dl-trigger">Open Menu</button>
                                <ul class="dl-menu">
                                    <li>
                                        <a href="{{ URL::to('/')}}">Home</a>
                                    </li>
                                    @foreach($headerMenus as $key => $menu)
                                        <li>
                                            <?php 
                                                $url = route('homepage.category', ['category' =>  $menu->present()->slug]);
                                                if($menu->present()->slug ==  'opinion') {
                                                    $url = URL::to('/opinion-rozana');
                                                } else if($menu->present()->slug ==  'sports') {
                                                    $url = URL::to('/sports-rozana');
                                                }
                                            ?>
                                            <a href="{{ $url }}">
                                                {{ $menu->present()->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 hidden-xs">
                            <div class="ads_area-768">
                                <img src="{{ asset('/frontend/images/add.jpg') }}" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 border-left border-none hidden-xs">
                            <div class="one-third right-box">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                        <div class="lang">
                                            <div class="epaper">
                                                <a href="#">
                                                    <img src="{{ asset('/frontend/images/epaper.png') }}" alt="..." />
                                                </a>
                                            </div>
                                            <div class="date">
                                                Monday
                                                <span>2, Febuary 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 border-left">
                                        <div class="right-area">
                                            <form action="">
                                                <div class="form-group">
                                                    <input type="text" name="search" class="form-control" id="search" placeholder="Search">
                                                </div>
                                            </form>
                                            <div class="social-icons">
                                                <ul class="list-inline">
                                                    <li class="facebook">
                                                        <a href="#">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a href="#">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="google-plus">
                                                        <a href="#">
                                                            <i class="fa fa-google-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li class="youtube">
                                                        <a href="#">
                                                            <i class="fa fa-youtube"></i>
                                                        </a>
                                                    </li>
                                                </ul>
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
    </div>
</section>

<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="menu-area">
                    <ul class="list-inline">
                        <li class="active">
                            <a href="{{ URL::to('/')}}">Home</a>
                        </li>
                        @foreach($headerMenus as $key => $menu)
                            <li>
                                <?php 
                                    $url = route('homepage.category', ['category' =>  $menu->present()->slug]);
                                    if($menu->present()->slug ==  'opinion') {
                                        $url = URL::to('/opinion-rozana');
                                    } else if($menu->present()->slug ==  'sports') {
                                        $url = URL::to('/sports-rozana');
                                    }
                                ?>
                                <a href="{{ $url }}">
                                    {{ $menu->present()->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="category_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cat_listing">
                    <ul class="list-inline">
                        @foreach($belowHeaderMenus as $key => $menu)
                            <li>
                                <?php 
                                    $url = route('homepage.category', ['category' =>  $menu->present()->slug]);
                                    if($menu->present()->slug ==  'opinion') {
                                        $url = URL::to('/opinion-rozana');
                                    } else if($menu->present()->slug ==  'sports') {
                                        $url = URL::to('/sports-rozana');
                                    }
                                ?>
                                <a href="{{ $url }}">
                                    {{ $menu->present()->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="epaper visible-xs">
                        <a href="#">
                            <img src="{{ asset('/frontend/images/epaper.png') }}" alt="..." />
                        </a>
                    </div>
                    <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            @foreach($belowHeaderMenus as $key => $menu)
                                <li>
                                    <?php 
                                        $url = route('homepage.category', ['category' =>  $menu->present()->slug]);
                                        if($menu->present()->slug ==  'opinion') {
                                            $url = URL::to('/opinion-rozana');
                                        } else if($menu->present()->slug ==  'sports') {
                                            $url = URL::to('/sports-rozana');
                                        }
                                    ?>
                                    <a href="{{ $url }}">
                                        {{ $menu->present()->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== header section end ====