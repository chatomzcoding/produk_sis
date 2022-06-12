<x-admin-layout title="Data Siswa" menu="siswa">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Siswa</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            {{-- <div class="row">
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
                      <span class="info-box-text">Total Siswa Aktif</span>
                      <span class="info-box-number">
                            {{ $main['statistik']['siswa']['aktif']}}
                      </span>
                    </div>
                  </div>
                </div>
            </div> --}}
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                        <a href="{{ url('siswa/create') }}" class="btn btn-outline-primary btn-sm pop-info" title="Tambah Data Siswa Baru"><i class="fas fa-plus"></i> Tambah</a>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">Aksi</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Akses</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize">
                                @forelse ($siswa as $item)
                                <tr>
                                        <td class="text-center">{{ $loop->iteration}}</td>
                                        <td class="text-center">
                                            <form id="data-{{ $item->id }}" action="{{url($main['link'].'/'.$item->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                </form>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-sm btn-flat">Aksi</button>
                                                    <button type="button" class="btn btn-info btn-sm btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                      <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a href="{{ url('siswa/'.$item->id) }}" class="dropdown-item"><i class="fas fa-file" style="width: 25px"></i> DETAIL</a>
                                                      <div class="dropdown-divider"></div>
                                                      <button onclick="deleteRow( {{ $item->id }} )" class="dropdown-item"><i class="fas fa-trash-alt text-danger" style="width: 25px"></i> HAPUS</button>
                                                    </div>
                                                </div>
                                        </td>
                                        <td>{{ $item->nisn}}</td>
                                        <td>{{ $item->nama_siswa}}</td>
                                        <td>{{ $item->jk}}</td>
                                        <td>{{ $item->alamat}}</td>
                                        <td>
                                            @if (isset($item->aksessiswa))
                                                <span class="badge bg-success">Akses {{ $item->aksessiswa->status_akses }}</span>
                                            @else
                                                <a href="{{ url('aksessiswa/create?id='.$item->id) }}" class="btn btn-danger btn-sm">Beri Akses</a>
                                            @endif
                                        </td>
                                        <td class="text-center">{!! UIstatus($item->status) !!}</td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="8" class="font-italic">-- belum ada data --</td>
                                    </tr>
                                @endforelse
                        </table>
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