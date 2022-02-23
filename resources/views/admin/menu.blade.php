<li class="nav-item">
  <a href="{{ url('/demo')}}" class="nav-link">
    <i class="nav-icon fas fa-user-tie"></i>
    <p class="text">Data Demo</p>
  </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-user-tie"></i>
      <p>
        Data Master
        <i class="fas fa-angle-left right"></i>
        {{-- <span class="badge badge-info right">6</span> --}}
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ url('/info-website')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-bullhorn nav-icon"></i>
          <p>Data Pokok</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/adminuser')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-user nav-icon"></i>
          <p>User</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/artikel')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-user nav-icon"></i>
          <p>Artikel</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/galeri')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-chart-bar nav-icon"></i>
          <p>Galeri</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ url('/sarana')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-chart-bar nav-icon"></i>
          <p>Sarana</p>
        </a>
      </li>
    </ul>
</li>