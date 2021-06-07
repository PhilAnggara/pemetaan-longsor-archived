<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('admin') }}">
        <span class="menu-title">Data Keseluruhan</span>
        <i class="mdi mdi-chart-bar menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <span class="menu-title">Daerah Rawan</span>
        {{-- <i class="mdi mdi-home menu-icon"></i> --}}
        <i class="fad fa-map-marked-alt fa-sm menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>