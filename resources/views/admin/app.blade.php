@extends('admin.master')
@section('sidebar')
 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-4"> 
      <div class="sidebar-sticky pt-3">
        
        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Dashboard</span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::segment(2) == 'dashboard' ? 'font-weight-bold' :  'text-muted' }}" href="dashboard">
              <span data-feather="bar-chart-2" class="{{Request::segment(2) == 'dashboard' ? 'text-dark' :  'text-muted' }}"></span>
              Dashboard
            </a>
          </li>
        </ul>

        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Users</span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link {{Request::segment(2) == 'manage-admin' ? 'font-weight-bold' :  'text-muted' }}" href="manage-admin">
              <span class="{{Request::segment(2) == 'manage-admin' ? 'text-dark' :  'text-muted' }}" data-feather="user-check"></span>
              Admin
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{Request::segment(2) == 'manage-lecturer' ? 'font-weight-bold' :  'text-muted' }}" href="manage-lecturer">
              <span class="{{Request::segment(2) == 'manage-lecturer' ? 'text-dark' :  'text-muted' }}" data-feather="users"></span>
              Lecturer
            </a>
          </li>
        </ul>

        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Session</span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link {{Request::segment(2) == 'manage-session' ? 'font-weight-bold' :  'text-muted' }}" href="manage-session">
              <span class="{{Request::segment(2) == 'manage-session' ? 'text-dark' :  'text-muted' }}" data-feather="upload-cloud"></span>
              Deadline Upload 
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{Request::segment(2) == 'manage-term' ? 'font-weight-bold' :  'text-muted' }}" href="manage-term">
              <span class="{{Request::segment(2) == 'manage-term' ? 'text-dark' :  'text-muted' }}" data-feather="calendar"></span>
              Term
            </a>
          </li>
        </ul>
        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Campus Rules</span>
        </h5>
        <ul class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link {{Request::segment(2) == 'manage-major' ? 'font-weight-bold' :  'text-muted' }}" href="manage-major">
                <span class="{{Request::segment(2) == 'manage-major' ? 'text-dark' :  'text-muted' }}" data-feather="award"></span>
                Major
            </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{Request::segment(2) == 'manage-region' ? 'font-weight-bold' :  'text-muted' }}" href="manage-region">
              <span class="{{Request::segment(2) == 'manage-region' ? 'text-dark' :  'text-muted' }}" data-feather="globe"></span>
              Region
            </a>
          </li>
        </ul>
        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>PKM</span>
        </h5>
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link {{Request::segment(2) == 'manage-pkm' ? 'font-weight-bold' :  'text-muted' }}" href="manage-pkm">
              <span class="{{Request::segment(2) == 'manage-pkm' ? 'text-dark' :  'text-muted' }}" data-feather="file-text"></span>
              PKM Type
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{Request::segment(2) == 'pkm-list' ? 'font-weight-bold' :  'text-muted' }}" href="pkm-list">
              <span class="{{Request::segment(2) == 'pkm-list' ? 'text-dark' :  'text-muted' }}" data-feather="list"></span>
              PKM List
            </a>
          </li>
        </ul>
        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Other</span>
        </h5>
        <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::segment(2) == 'log' ? 'font-weight-bold' :  'text-muted' }}" href="log">
              <span class="{{Request::segment(2) == 'log' ? 'text-dark' :  'text-muted' }}" data-feather="tool"></span>
              Log
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#">
              <span data-feather="power"></span>
              Log Out
          </a>
          </li>
        </ul>
      </div>
    </nav>

@endsection
@section('content')
  @yield('main')
@endsection
@section('modal')
  @yield('modal')
@endsection
