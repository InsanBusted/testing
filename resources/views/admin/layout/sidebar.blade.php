<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          @auth
            @if (Auth::check())
            <div class="info">
                <a href="#" class="d-block">{{ strtoupper(Auth::user()->name) ?? "" }}</a>
                <p class="text-primary">Role: {{ Auth::user()->role }}</p>
            </div>
            @endif
            @endauth
            @guest
                <a href="" class="d-block">Guest</a>
            @endguest
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                  aria-label="Search">
              <div class="input-group-append">
                  <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw"></i>
                  </button>
              </div>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                  
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{ url('dashboard') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Dashboard</p>
                          </a>
                      </li>
                      @if (Auth::user()->role=='admin')
                      <li class="nav-item">
                          <a href="{{ route('position.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Jabatan</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('employees.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Karyawan</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('genres.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Genre</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('books.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Books</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('users.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Users</p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('members.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Members</p>
                            </a>
                        </li>
                  </ul>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>