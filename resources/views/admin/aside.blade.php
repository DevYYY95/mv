<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/upload/avatar2.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Main Navigation</li>
            <li class="#">
                <a href="{{ route('dashboard.index') }}">
                    <i class="fa fa-product-hunt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-product-hunt"></i>
                    <span>Movies</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('movie.index') }}">All Movies</a></li>
                    <li>
                        <a href="{{ route('movie.create') }}">
                            <i class="fa fa-cart-plus"></i>
                            Add New Movie
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i>
                    <span>Casts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('cast.index') }}">All Casts</a></li>
                    <li>
                        <a href="{{ route('cast.create') }}">
                            <i class="fa fa-cart-plus"></i>
                            Add New Cast
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i>
                    <span>Cinemas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('cinema.index') }}">All Cinemas</a></li>
                    <li>
                        <a href="{{ route('cinema.create') }}">
                            <i class="fa fa-cart-plus"></i>
                            Add New Cinema
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tags"></i>
                    <span>Clients</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('client.index') }}">All Clients</a></li>
                    <li>
                        <a href="{{ route('client.create') }}">
                            <i class="fa fa-cart-plus"></i>
                            Add New Client
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->

</aside>
