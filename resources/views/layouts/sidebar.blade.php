<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      @if (auth()->user()->role == 'Admin')
      <li class="nav-item nav-category">Master Data</li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-account"></i>
          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('pengguna.index')}}" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Dosen</span>
          <i class="menu-arrow"></i>
        </a>

      </li>

      @endif
      
      <li class="nav-item nav-category">Antrian</li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('antrian.index')}}" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-animation"></i>
          <span class="menu-title">Table Antrian</span>
          <i class="menu-arrow"></i>
        </a>

      </li>
    </ul>
  </nav>