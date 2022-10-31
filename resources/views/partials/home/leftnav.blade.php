<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="{{asset('img/logo/genescor-black.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Genescor App</span>
    </a>
    <div class="sidebar">
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
                @if(Auth::user()->hasRole('Super Admin'))<li class="nav-item">
                    <router-link to="/app/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </router-link >
                </li>@endif
                @if(Auth::user()->hasRole('Consultant'))<li class="nav-item">
                    <router-link to="/app/profile" class="nav-link">
                        <i class="nav-icon fas fas fa-user"></i>
                        <p>Profile</p>
                    </router-link >
                </li>@endif
                <li class="nav-item">
                    <router-link to="/app/appointments" class="nav-link">
                        <i class="nav-icon fas fas fa-calendar-day"></i>
                        <p>Appointments</p>
                    </router-link >
                </li>
                <li class="nav-item">
                    <router-link to="/app/blogs" class="nav-link">
                        <i class="nav-icon fas fas fa-comment-alt"></i>
                        <p>Stories</p>
                    </router-link >
                </li>
                <li class="nav-item">
                    <router-link to="/app/wallets" class="nav-link">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>Wallets</p>
                    </router-link >
                </li>
                <li class="nav-item">
                    <router-link to="/app/tickets" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Tickets</p>
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