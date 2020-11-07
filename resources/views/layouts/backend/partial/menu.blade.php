<div class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar navbar-light">
      <div class="container-xl">
        <ul class="navbar-nav">
          @if(Request::is('admin*'))
            <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                </span>
                <span class="nav-link-title">
                  Dashboard
                </span>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/user*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.user.index') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="users"></i>
                </span>
                <span class="nav-link-title">
                  Users
                </span>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/doctor*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.doctor.index') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="user-plus"></i>
                </span>
                <span class="nav-link-title">
                  Doctors
                </span>
              </a>
            </li>
            <li class="nav-item {{ Request::is('admin/hospital*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.hospital.index') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="globe"></i>
                </span>
                <span class="nav-link-title">
                 Hospitals
                </span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="calendar"></i>
                </span>
                <span class="nav-link-title">
                  Appointments
                </span>
              </a>
              <ul class="dropdown-menu">
                <li >
                  <a class="dropdown-item" href="{{ route('admin.ipd.index') }}" >
                    <i class="icon mr-2" data-feather="activity"></i> IPD Logs
                  </a>
                </li>
                <li >
                  <a class="dropdown-item" href="{{ route('admin.opd.index') }}" >
                   <i class="icon mr-2" data-feather="activity"></i> OPD Logs
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ Request::is('admin/thisMonth*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.thisMonth.index') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="help-circle"></i>
                </span>
                <span class="nav-link-title">
                 This Month
                </span>
              </a>
            </li>
          @elseif(Request::is('doctor*'))
            <li class="nav-item {{ Request::is('doctor/profile*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('doctor.profile.index') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="user"></i>
                </span>
                <span class="nav-link-title">
                  My Profile
                </span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="calendar"></i>
                </span>
                <span class="nav-link-title">
                  Appointments
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="{{ route('doctor.ipd.index') }}" >
                    <i class="icon mr-2" data-feather="calendar"></i> IPD Logs
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('doctor.opd.index') }}" >
                    <i class="icon mr-2" data-feather="calendar"></i> OPD Logs
                  </a>
                </li>
              </ul>
            </li>
          @elseif(Request::is('hospital*'))
            <li class="nav-item {{ Request::is('hospital/profile*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('hospital.profile.index') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="user"></i>
                </span>
                <span class="nav-link-title">
                  My Profile
                </span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="calendar"></i>
                </span>
                <span class="nav-link-title">
                  Appointments
                </span>
              </a>
              <ul class="dropdown-menu">
                <li >
                  <a class="dropdown-item" href="{{ route('hospital.ipd.index') }}" >
                    <i class="icon mr-2" data-feather="activity"></i> IPD Logs
                  </a>
                </li>
                <li >
                  <a class="dropdown-item" href="{{ route('hospital.opd.index') }}" >
                   <i class="icon mr-2" data-feather="activity"></i> OPD Logs
                  </a>
                </li>
              </ul>
            </li>
          @elseif(Request::is('user*'))
            <li class="nav-item {{ Request::is('user/profile*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('user.profile.index') }}">
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="user"></i>
                </span>
                <span class="nav-link-title">
                  My Profile
                </span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false" >
                <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="icon" data-feather="calendar"></i>
                </span>
                <span class="nav-link-title">
                  Appointments
                </span>
              </a>
              <ul class="dropdown-menu">
                <li >
                  <a class="dropdown-item" href="{{ route('user.ipd.index') }}" >
                    <i class="icon mr-2" data-feather="activity"></i> IPD Logs
                  </a>
                </li>
                <li >
                  <a class="dropdown-item" href="{{ route('user.opd.index') }}" >
                   <i class="icon mr-2" data-feather="activity"></i> OPD Logs
                  </a>
                </li>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</div>