<x-admin-layout title="Dashboard Wali Kelas" menu="walikelas">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Walikelas {{ $kelas->nama_kelas }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Dashboard Wali Kelas</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-tie"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Siswa</span>
                      <span class="info-box-number">
                            {{ $main['statistik']['siswa']['total']}}
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-male"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Laki laki</span>
                      <span class="info-box-number">
                            {{ $main['statistik']['siswa']['l']}}
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-female"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Perempuan</span>
                      <span class="info-box-number">
                            {{ $main['statistik']['siswa']['p']}}
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-user-check"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Lainnya</span>
                      <span class="info-box-number">
                            {{ $main['statistik']['siswa']['lain']}}
                      </span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Absensi Siswa</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Data Siswa</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Nilai Siswa</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                          </div>
                        </div>
                        <div class="col-9">
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <section>
                                    
                                </section>
                            </div>
                            {{-- data siswa --}}
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <section>
                                    <h3>DAFTAR SISWA KELAS {{ $kelas->nama_kelas }}</h3>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NISN</th>
                                                    <th>NIPD</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kbm as $item)
                                                    @php
                                                        $siswa = $item->siswa;
                                                    @endphp
                                                    <tr>
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td class="text-capitalize">{{ $siswa->nama_siswa }}</td>
                                                        <td>{{ $siswa->nisn }}</td>
                                                        <td>{{ $siswa->nipd }}</td>
                                                        <td>{{ $siswa->alamat }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <section>
                                    <h3>DAFTAR NILAI SISWA {{ $kelas->nama_kelas }}</h3>
                                    <div class="accordion" id="accordionExample">
                                        @foreach ($data as $item)
                                            <div class="card">
                                            <div class="card-header" id="headingOne{{ $item['no'] }}">
                                                <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{ $item['no'] }}" aria-expanded="true" aria-controls="collapseOne{{ $item['no'] }}">
                                                    {{ $item['no'].'. '.ucwords($item['siswa']->nama_siswa) }}
                                                </button>
                                                </h2>
                                            </div>
                                        
                                            <div id="collapseOne{{ $item['no'] }}" class="collapse @if ($item['no'] == 1)
                                            show
                                            @endif" aria-labelledby="headingOne{{ $item['no'] }}" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead class="text-center">
                                                                <tr>
                                                                    <th rowspan="3">Mata Pelajaran</th>
                                                                    <th colspan="6">Nilai</th>
                                                                </tr>
                                                                <tr>
                                                                    <th colspan="2">Harian</th>
                                                                    <th colspan="2">Ulangan</th>
                                                                    <th rowspan="2">UTS</th>
                                                                    <th rowspan="2">UAS</th>
                                                                </tr>
                                                                <tr>
                                                                    <th>Riwayat</th>
                                                                    <th>Rata-rata</th>
                                                                    <th>Riwayat</th>
                                                                    <th>Rata-rata</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($item['mapel'] as $mapel => $sesi)
                                                                    <tr>
                                                                        <td>{{ $mapel }}</td>
                                                                        @foreach ($sesi as $namasesi => $s)
                                                                            @if ($namasesi == 'harian')
                                                                                <td>
                                                                                    @for ($i = 0; $i < count($s); $i++)
                                                                                        {{ $s[$i] }} |
                                                                                    @endfor
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    {{ sis_ratarata($s) }}
                                                                                </td>
                                                                            @else
                                                                                <td></td>
                                                                                <td></td>
                                                                            @endif
                                                                            @if ($namasesi == 'ulangan')
                                                                                <td>
                                                                                    @for ($i = 0; $i < count($s); $i++)
                                                                                        {{ $s[$i] }} |
                                                                                    @endfor
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    {{ sis_ratarata($s) }}
                                                                                </td>
                                                                            @else
                                                                                <td></td>
                                                                                <td></td>
                                                                            @endif
                                                                            @if ($namasesi == 'uts')
                                                                                <td class="text-center">
                                                                                    @for ($i = 0; $i < count($s); $i++)
                                                                                        {{ $s[$i] }} |
                                                                                    @endfor
                                                                                </td>
                                                                            @else
                                                                                <td></td>
                                                                            @endif
                                                                            @if ($namasesi == 'uas')
                                                                                <td class="text-center">
                                                                                    @for ($i = 0; $i < count($s); $i++)
                                                                                        {{ $s[$i] }} |
                                                                                    @endfor
                                                                                </td>
                                                                            @else
                                                                                <td></td>
                                                                            @endif
                                                                        @endforeach
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        @endforeach
                                      </div>
                                </section>    
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="kodejs">
        <script>
            $(function () {
            $("#example1").DataTable({
                "responsive": false, "lengthChange": false, "autoWidth": false,
                // "buttons": ["copy","excel"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            });
        </script>
    </x-slot>
</x-admin-layout>