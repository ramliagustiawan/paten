<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href=""><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.dashboard') }}" class="nav-link">Home <i class="fas fa-home ml-1"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact <i class="fas fa-phone-alt ml-1"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
            <ul class="navbar-nav px-auto " >
        {{-- batas --}}
      {{-- <li class="nav-item dropdown m-auto">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i>5 Permohonan Layanan
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 Pelaporan
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <div class="dropdown-divider"></div>
            </div>
          </li> --}}
        </ul>
            <!-- Signout -->
            <ul class="navbar-nav px-auto " >
                <li class="nav-item dropdown ml-2">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                    <span class="hidden-xs">{{ auth()->user()->name }}</span>
                    <i class="fas fa-user-shield ml-1"></i>
                    </a>
                <div class="dropdown-menu dropdown-menu-right ">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/kota.png') }}" class="card-img-top img-circle" alt="...">
                        </div>
                        <div class="card-footer text-center">
                          <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="btn btn-danger text-center">Sign Out</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                        </div>
                </div>
                </li>
            </ul>
    </div>


  </nav>
