<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('Atlantis-Lite/assets/img/zzz.webp')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->nama }}
                            <span class="user-level">Admin</span>
                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="{{route('home')}}" class="collapsed">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Feature</h4>
                </li>
                <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                    <a href="{{route('users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('attendances*') ? 'active' : '' }}">
                    <a href="{{route('attendances.index')}}">
                        <i class="fas fa-clipboard-list"></i>
                        <p>Attandence</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('companies/1*') ? 'active' : '' }}">
                    <a href="{{ route('companies.show', 1) }}">
                        <i class="fas fa-building"></i>
                        <p>Company</p>
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
</div>
