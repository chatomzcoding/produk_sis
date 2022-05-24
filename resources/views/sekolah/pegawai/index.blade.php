<x-admin-layout title="Data Pegawai" menu="siswa">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Pegawai</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Pegawai</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                {{-- start col --}}
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-tie"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Total Pegawai</span>
                      <span class="info-box-number">
                            {{ $statistik['total']}}
                      </span>
                    </div>
                  </div>
                </div>
                {{-- end col --}}
                {{-- start col --}}
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-male"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Tenaga Pengajar</span>
                      <span class="info-box-number">
                            {{ $statistik['pengajar']}}
                      </span>
                    </div>
                  </div>
                </div>
                {{-- end col --}}
                {{-- start col --}}
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-female"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Tenaga Honorer</span>
                      <span class="info-box-number">
                            {{ $statistik['honorer']}}
                      </span>
                    </div>
                  </div>
                </div>
                {{-- end col --}}
                {{-- start col --}}
                <div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-user-check"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Tenaga Pendukung</span>
                      <span class="info-box-number">
                            {{ $statistik['pendukung']}}
                      </span>
                    </div>
                  </div>
                </div>
                {{-- end col --}}
            </div>
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                  <div class="card-header">
                    {{-- <h3 class="card-title">Daftar Unit</h3> --}}
                        <a href="{{ url('pegawai/create') }}" class="btn btn-outline-primary btn-sm pop-info" title="Tambah Data Siswa Baru"><i class="fas fa-plus"></i> Tambah</a>
                        <div class="float-right">
                            <!-- Default dropleft button -->
                            <div class="btn-group dropleft">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a href="{{ url('cetakdata?s=satuanbarang') }}" target="_blank" class="dropdown-item pop-info" title="Cetak Data Satuan Barang"><i class="fas fa-print" style="width: 25px"></i> CETAK</a>
                                    <div class="dropdown-divider"></div>
                                    <button data-toggle="modal" data-target="#info" title="Informasi" class="dropdown-item" type="button"><i class="fas fa-info text-center" style="width: 25px"></i> INFO</button>
                                </div>
                            </div>
                        </div>
                  </div>
                  <div class="card-body">
                      @include('sistem.notifikasi')
                      <section class="mb-3">
                            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-filter"></i> Filter
                            </a>
                          <div class="collapse" id="collapseExample">
                              <div class="card card-body mt-2">
                                {{-- <form action="{{ url($main['link']) }}" method="get">
                                  <div class="row">
                                     <div class="form-group col-md-2">
                                         <label for="" class="mb-0">Jenis Kelamin</label>
                                          <select name="jk" id="" class="form-control" onchange="this.form.submit();">
                                              <option value="semua">-- SEMUA --</option>
                                              <option value="laki-laki">Laki - Laki</option>
                                              <option value="perempuan">Perempuan</option>
                                          </select>
                                      </div>
                                  </div>
                              </form> --}}
                            </div>
                          </div>
                      </section>
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">Aksi</th>
                                    <th>NIP/NUPTK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Akses</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize">
                                @forelse ($pegawai as $item)
                                <tr>
                                        <td class="text-center">{{ $loop->iteration}}</td>
                                        <td class="text-center">
                                            <form id="data-{{ $item->id }}" action="{{url('pegawai/'.$item->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                </form>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-sm btn-flat">Aksi</button>
                                                    <button type="button" class="btn btn-info btn-sm btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                      <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                      <div class="dropdown-divider"></div>
                                                      <button onclick="deleteRow( {{ $item->id }} )" class="dropdown-item"><i class="fas fa-trash-alt text-danger" style="width: 25px"></i> HAPUS</button>
                                                    </div>
                                                </div>
                                        </td>
                                        <td>{{ $item->nip}}</td>
                                        <td>{{ $item->nama_pegawai}}</td>
                                        <td>{{ $item->jk}}</td>
                                        <td>{{ $item->alamat}}</td>
                                        <td class="text-center">@if (isset($item->userakses))
                                          <span class="badge bg-success">ada</span>
                                        @else
                                            <a href="{{ url('aksespegawai/create?id='.$item->id) }}" class="btn btn-danger btn-sm">Beri Akses</a>
                                        @endif</td>
                                        <td class="text-center">{!! UIstatus($item->status) !!}</td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="7" class="font-italic">-- belum ada data --</td>
                                    </tr>
                                @endforelse
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <div class="modal fade" id="info">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">INFORMASI</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-3">
                    <section class="p-3">
                       ini contoh info
                    </section>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                </div>
            </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="kodejs">
        <script>
            $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
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