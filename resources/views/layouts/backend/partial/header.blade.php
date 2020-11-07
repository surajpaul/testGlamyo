<header class="navbar navbar-expand-md navbar-light">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="{{url('/')}}" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
    <img src="{{asset('assets/backend/img/static/logo.png')}}" class="navbar-brand-image">
    </a>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
                <span class="avatar" style="background-image: url('{{asset('assets/backend/img/static/admin-avatar.png')}}')"></span>
                <div class="d-none d-xl-block pl-2">
                  {{ Auth::user()->name }}
                  <div class="mt-1 small text-muted">{{ Auth::user()->email }}</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">
                <i class="icon mr-2" data-feather="user"></i>
                  My Profile
                </a>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon mr-2" data-feather="log-out"></i>
                   Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                  </form>
              </div>
            </div>
        </div>
    </div>
</header>