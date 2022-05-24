@switch($user->aksespegawai->akses)
    @case('kurikulum')
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book-open"></i>
            <p>
                Kurikulum
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('/tahunajaran')}}" class="nav-link">
                &nbsp;&nbsp;<i class="fas fa-list nav-icon"></i>
                <p>Tahun Ajaran</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/kelas')}}" class="nav-link">
                &nbsp;&nbsp;<i class="fas fa-list nav-icon"></i>
                <p>Kelas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/matapelajaran')}}" class="nav-link">
                &nbsp;&nbsp;<i class="fas fa-list nav-icon"></i>
                <p>Mata Pelajaran</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/jadwalpelajaran')}}" class="nav-link">
                &nbsp;&nbsp;<i class="fas fa-list nav-icon"></i>
                <p>Jadwal Pelajaran</p>
                </a>
            </li>
            </ul>
        </li>
        @break
    @case('kesiswaan')
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
                Kesiswaan
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ url('/siswa')}}" class="nav-link">
                &nbsp;&nbsp;<i class="fas fa-bullhorn nav-icon"></i>
                <p>Data Siswa</p>
                </a>
            </li>
            </ul>
        </li>
        @break
    @default
        
@endswitch