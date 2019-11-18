<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('assets/images/kota.png') }}" alt="SIP" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIP PATEN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-header">ADMINISTRATOR</li>
          <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>

              <p>Pengguna</p>
            </a>
          </li>

          <li class="nav-header">PENGATURAN</li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fab fa-buffer nav-icon"></i>
                  <p>
                    Jenis Layanan
                    <i class="right fas fa-angle-left"></i>

                  </p>
                </a>

                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="{{ route('admin.ijin.index') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Perijinan</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ route('admin.nonijin.index') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Non Perijinan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.syarat.index') }}" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Detail Layanan</p>
                    </a>
                  </li>

                </ul>

              </li>

              {{--  BATAS  --}}

              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="fas fa-cogs nav-icon"></i>
                    <p>
                      Lain Lain
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">

                    <li class="nav-item">
                      <a href="{{ route('admin.pejabat.index') }}" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Pejabat</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Personil</p>
                      </a>
                    </li>

                  </ul>
                </li>

                {{--  batas  --}}

          </li>

          {{--  PROSES LAYANAN  --}}

          <li class="nav-header">PROSES LAYANAN</li>

          <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>
                    Permohonan Layanan
                    <i class="right fas fa-angle-left"></i>
                    {{-- <i class="fas fa-briefcase"></i> --}}
                  </p>
                </a>

                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="{{ route('admin.iumk.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>IUMK</p>
                        {{-- <span class="badge badge-light ml-5">9</span> --}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Dispensasi Nikah</p>
                        {{-- <span class="badge badge-light ml-5">9</span> --}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.suket.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Surat Keterangan</p>
                        {{-- <span class="badge badge-light ml-5">9</span> --}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>SKTM</p>
                        {{-- <span class="badge badge-light ml-5">9</span> --}}
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Domisili Usaha</p>
                        {{-- <span class="badge badge-light ml-5">9</span> --}}
                    </a>
                  </li>

                  <li class="nav-item">
                        <a href="{{ route('admin.daftar.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-file"></i>
                          <p>Permohonan Layanan</p>
                        </a>
                      </li>
                </ul>
              </li>

          <li class="nav-item">
              <a href="{{ route('admin.proses.index') }}" class="nav-link">
                <i class="nav-icon fas fa-laptop-code"></i>
                <p>Proses Layanan</p>
              </a>
            </li>

            {{-- register --}}
            <li class="nav-header">REGISTER</li>
            <li class="nav-item">
              <a href="{{ route('admin.tindak.index') }}" class="nav-link">
                <i class="nav-icon fas fa-arrow-alt-circle-down"></i>
                <p>Surat Masuk</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.tindak.index') }}" class="nav-link">
                <i class="nav-icon fas fa-arrow-alt-circle-up"></i>
                <p>Surat Keluar</p>
              </a>
            </li>


            {{--  PELAPORAN  --}}

            <li class="nav-header">PELAPORAN</li>
            <li class="nav-item">
              <a href="{{ route('admin.tindak.index') }}" class="nav-link">
                <i class="nav-icon fas fa-rocket"></i>
                <p>Tindak Lanjut</p>
              </a>
            </li>


            {{-- rekapan --}}
            <li class="nav-header">REKAPITULASI</li>
            <li class="nav-item">
              <a href="{{ route('admin.tindak.index') }}" class="nav-link">
                <i class="nav-icon fas fa-calculator"></i>
                <p>Rekap Layanan</p>
              </a>
            </li>


            {{--  logout  --}}

          <li class="nav-header">Keluar</li>
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Log Out</p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
