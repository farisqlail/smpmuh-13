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
                <a class="collapse-item" href="login.html">List Artikel</a>
                <a class="collapse-item" href="login.html">Tambah Artikel</a>
                <hr>
                <a class="collapse-item" href="login.html">Manange Artikel</a>
              </div>
            </div>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Akreditasi</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Staf</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="tables.html">
              <i class="fas fa-fw fa-book-open"></i>
              <span>Beasiswa</span></a>
          </li>

        <li class="nav-item">
            <a class="nav-link" href="tables.html">
              <i class="fas fa-fw fa-book-open"></i>
              <span>Ekstra</span></a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Galeri</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Visi Misi</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Setting</span></a>
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