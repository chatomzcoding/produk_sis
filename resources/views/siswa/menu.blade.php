<li class="nav-item">
  <a href="{{ url('/homesiswa/biodata/'.$user->aksessiswa->siswa_id)}}" class="nav-link">
    <i class="nav-icon fas fa-user"></i>
    <p class="text">Biodata</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ url('/homesiswa/jadwal/'.$user->aksessiswa->siswa_id)}}" class="nav-link">
    <i class="nav-icon fas fa-calendar-alt"></i>
    <p class="text">Jadwal Pelajaran</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ url('/homesiswa/ujian/'.$user->aksessiswa->siswa_id)}}" class="nav-link">
    <i class="nav-icon fas fa-file-signature"></i>
    <p class="text">Ujian</p>
  </a>
</li>