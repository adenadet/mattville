<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-pink">
    <!-- Brand Logo -->
    <a href="/applicants" class="brand-link">
        <img src="{{asset('dist/img/snh_logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Genescor App</span>
    </a>
    <div class="sidebar bg-pink">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="/img/profile/{{Auth::user()->image}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <router-link to="/agency/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </router-link >
                </li>
                <li class="nav-item">
                    <router-link to="/agency/members" class="nav-link">
                        <i class="nav-icon fas fas fa-users"></i>
                        <p>Members</p>
                    </router-link >
                </li>
                <li class="nav-item">
                    <router-link to="/applicants/stories" class="nav-link">
                        <i class="nav-icon fas fas fa-message"></i>
                        <p>Stories</p>
                    </router-link >
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link"><i class="nav-icon fas fa-power-off"></i><p>Log Out </p></a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </ul>
        </nav>
    </div>
</aside>