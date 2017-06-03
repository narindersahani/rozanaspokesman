<!-- ==== header area start ==== -->
<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini">
            {{ Html::image('images/mini-logo.png', 'Logo', ['class' => 'img-responsive center-block']) }}
        </span>
        <span class="logo-lg">
            {{ Html::image('images/logo.png', 'Logo', ['class' => 'img-responsive center-block']) }}
        </span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- ==== collapse menu left sidebar ==== -->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- ==== right side menu bar ==== -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                    </a>
                    <ul class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                        <li>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                Setting
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.logout') }}">
                                <i class="fa fa-sign-out"></i>
                                Sign out
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="custom-nav-search">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="reset" class="btn btn-default">
                            <span class="glyphicon glyphicon-remove">
                                <span class="sr-only">Close</span>
                            </span>
                        </button>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search">
                                <span class="sr-only">Search</span>
                            </span>
                        </button>
                    </span>
                </div>
            </form>
        </div> 
    </nav>
</header>
<!-- ==== header area end ==== -->