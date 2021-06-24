<nav class="navbar navbar-default navbar-fixed-top">
  <div class="brand">
    <a href="{{route('dashboard')}}"><img src="{{asset('assets/img/logo-dark.png')}}" class="img-responsive logo"></a>
  </div>
  <div class="container-fluid">
    <div class="navbar-btn">
    </div>
    <form class="navbar-form navbar-left" method="GET" action="/siswa">
      <div class="input-group">
        <input type="text" name="cari" class="form-control" placeholder="Search dashboard...">
        <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
      </div>
    </form>
    
    <div id="navbar-menu">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
            <i class="lnr lnr-alarm"></i>
            <span class="badge bg-danger">1</span>
          </a>
          <ul class="dropdown-menu notifications">
            <li><a href="#" class="notification-item"><span class="dot bg-primary"></span>You have 9 unfinished tasks</a></li>
            <li><a href="#" class="more">See all notifications</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('assets/img/user.png')}}" class="img-circle" alt="Avatar">{{ Auth::user()->name }} <i class="icon-`menu lnr lnr-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
            <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
            <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
            <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>