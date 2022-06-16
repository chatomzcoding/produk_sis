<li class="nav-item">
  <a href="{{ url('/pegawai')}}" class="nav-link">
    <i class="nav-icon fas fa-user-tie"></i>
    <p class="text">Data Pegawai</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ url('/admin/absensi')}}" class="nav-link">
    <i class="nav-icon fas fa-user-tie"></i>
    <p class="text">Data Absensi</p>
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
        <a href="{{ url('/user')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-user nav-icon"></i>
          <p>Pegawai Akses</p>
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
      {{-- <li class="nav-item">
        <a href="{{ url('/sarana')}}" class="nav-link">
          &nbsp;&nbsp;<i class="fas fa-chart-bar nav-icon"></i>
          <p>Sarana</p>
        </a>
      </li> --}}
    </ul>
</li>