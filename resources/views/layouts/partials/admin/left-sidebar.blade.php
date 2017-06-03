<!-- ==== left side menu bar -->
<aside id="myAffix" class="main-sidebar">
    <section class="sidebar">
        <div class="custom-panel">
            <div class="user-panel">
                <div class="pull-left image">
                    {{ Html::image('images/user.png', 'User Image', ['class' => 'img-circle']) }}
                </div>
                <div class="pull-left info">
                    <p>Admin</p>
                    <a href="#">
                        <i class="fa fa-circle text-orrange"></i> 
                        Online
                    </a>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="active">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="menu-icons overview"></i> 
                    <span>Overview</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="menu-icons attendance"></i> 
                    <span>Posts</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.posts.index') }}">All Posts</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.posts.create') }}">Add Post</a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="menu-icons attendance"></i> 
                    <span>Video</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.videos.index') }}">All Videos</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.videos.create') }}">Add Video</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="menu-icons categories"></i> 
                    <span>Category</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('admin.categories.index') }}">All Categories</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.create') }}">Add Category</a>
                    </li>
                </ul>
            </li>                 
            <li class="treeview">
                <a href="#">
                    <i class="menu-icons assignment"></i> 
                    <span>Ads Manager</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">All Ads</a>
                    </li>
                    <li>
                        <a href="#">Add New</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="menu-icons assignment"></i> 
                    <span>Opinions</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">All Opinions</a>
                    </li>
                    <li>
                        <a href="#">Add New</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="menu-icons assignment"></i> 
                    <span>Setting</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">All Setting</a>
                    </li>
                    <li>
                        <a href="#">Add New</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="menu-icons teacher"></i> 
                    <span>Social Media</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">All Social Media</a>
                    </li>
                    <li>
                        <a href="#">Add New</a>
                    </li>
                </ul>
            </li>
            <!-- <li>
                <a href="#">
                    <i class="menu-icons result"></i> 
                    <span>Result</span>
                </a>
            </li> -->
        </ul>
    </section>
</aside>