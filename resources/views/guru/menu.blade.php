  <li class="nav-item">
    <a href="{{ url('/homeguru/jadwal/'.$user->aksespegawai->pegawai_id)}}" class="nav-link">
      <i class="nav-icon fas fa-user"></i>
      <p class="text">Jadwal Mengajar</p>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-user-tie"></i>
      <p>
        Mata Pelajaran
        <i class="fas fa-angle-left right"></i>
        {{-- <span class="badge badge-info right">6</span> --}}
      </p>
    </a>
    <ul class="nav nav-treeview">
      @forelse ($user->aksespegawai->pegawai->jadwalpelajaran as $item)
        <li class="nav-item">
          <a href="{{ url('/homeguru/pelajaran/'.$item->id)}}" class="nav-link">
            &nbsp;&nbsp;<i class="fas fa-bullhorn nav-icon"></i>
            <p>{{ $item->matapelajaran->nama_pelajaran }}</p>
          </a>
        </li>
      @empty
        <li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;<i class="fas fa-close nav-icon"></i> <p>Tidak ada</p></a></li>          
      @endforelse
    </ul>
</li>