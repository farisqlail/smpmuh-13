    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
          <div class="sidebar-brand-icon">
          <img src="{{ asset('assets/img/logo.png') }}" width="35px" alt="">
          </div>
          <div class="sidebar-brand-text mx-3">Administrator</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#berita" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-poll"></i>
              <span>Berita</span>
            </a>
            <div id="berita" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/berita-admin') }}">List Berita</a>
              <a class="collapse-item" href="{{ route('frontend.berita-admin.create') }}">Tambah Berita</a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#profile" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-id-badge"></i>
              <span>Profile</span>
            </a>
            <div id="profile" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('/staff-admin') }}">Staff</a>
                <a class="collapse-item" href="{{ url('/galeri-admin') }}">Galeri</a>
              </div>
            </div>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Pendaftaran</span></a>
        </li>
        
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->
    
@stack('sidebar-scripts')