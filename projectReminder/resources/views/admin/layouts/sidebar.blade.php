<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <!-- <img src="{{ asset('assets/img/sb.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> -->
        <span class="brand-text font-weight-bold ml-3">Studdy Buddy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 mb-3 d-flex">
            <div class="image mt-2">
                <img src="{{ asset('assets/img/fox.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                <p>{{ Auth::user()->role }}</p>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                
                <li class="nav-item">
                    <a href="{{ url('admin/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
<!--                 
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Table Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/book') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Book</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/employee') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

                <li class="nav-item">
                    <a href="{{ url('admin/kalender') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>
                            Kalender
                        </p>
                    </a>
                </li>

                <!-- <li class="nav-item">
                    <a href="{{ url('admin/member') }}" class="nav-link">
                        <i class="nav-icon fas fa-sticky-note"></i>
                        <p>
                            Note
                        </p>
                    </a>
                </li> -->
                
                <li class="nav-item">
                    <a href="{{ url('admin/task') }}" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Task
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link" data-toggle="dropdown" href="route('logout')"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            <i class="nav-icon far fa-user"></i>
                            <p>Logout</p>
                        </a>
                    </form>
                </li>
               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
