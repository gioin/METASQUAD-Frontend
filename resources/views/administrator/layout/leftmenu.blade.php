<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('administrator/dist/img/avatar3.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Administrator</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ request()->segment(2) == null ? "active" : "" }}"><a href="{{route('index')}}"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
            <li class="{{ request()->segment(2) == "tournaments" ? "active" : "" }}"><a href="{{route('tournaments.index')}}"><i class="fa fa-newspaper-o"></i> <span>Tournaments</span></a></li>
            <li class="{{ request()->segment(2) == "tickets" ? "active" : "" }}"><a href="{{route('tickets.index')}}"><i class="fa fa-address-card"></i> <span>Tickets</span></a></li>
            <li class="{{ request()->segment(2) == "results" ? "active" : "" }}"><a href="{{route('results.index')}}"><i class="fa fa-newspaper-o"></i> <span>Results</span></a></li>
            <li class="{{ request()->segment(2) == "coupons" ? "active" : "" }}"><a href="{{route('coupons.index')}}"><i class="fa fa-newspaper-o"></i> <span>Coupons</span></a></li>
            <li class="{{ request()->segment(2) == "games" ? "active" : "" }}"><a href="{{route('games.index')}}"><i class="fa fa-newspaper-o"></i> <span>Games</span></a></li>
            <li class="{{ request()->segment(2) == "users" ? "active" : "" }}"><a href="{{route('users.index')}}"><i class="fa fa-newspaper-o"></i> <span>Users</span></a></li>
            <li class="{{ request()->segment(2) == "rules" ? "active" : "" }}"><a href="{{route('rules.index')}}"><i class="fa fa-newspaper-o"></i> <span>Rules</span></a></li>
            <li class="{{ request()->segment(2) == "about" ? "active" : "" }}"><a href="{{route('about.index')}}"><i class="fa fa-newspaper-o"></i> <span>About us</span></a></li>
            <li class="{{ request()->segment(2) == "contact" ? "active" : "" }}"><a href="{{route('contact.index')}}"><i class="fa fa-address-card"></i> <span>Contact</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
