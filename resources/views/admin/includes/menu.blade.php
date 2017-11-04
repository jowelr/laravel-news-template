<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href=" {{ url('/category/add') }}">Add Category</a>
                    </li>
                    <li>
                        <a href="{{ url('/category/manage') }}">Manage category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> News Info<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href=" {{ url('/news/add') }}">Add News</a>
                    </li>
                    <li>
                        <a href="{{ url('/news/manage') }}">Manage News</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="{{ url('/comment/manage') }}"> <i class="fa fa-bar-chart-o fa-fw"></i> Manage Comments</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Author Info<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href=" {{ url('/author/add') }}">Add Author</a>
                    </li>
                    <li>
                        <a href="{{ url('/author/manage') }}">Manage Author</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{ url('/manage-contact-us') }}"> <i class="fa fa-bar-chart-o fa-fw"></i> Manage Contact</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Sitting<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href=" {{ url('/add-social') }}">Social</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>



        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>