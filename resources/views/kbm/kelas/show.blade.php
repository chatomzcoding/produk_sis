<x-admin-layout title="Kelas" menu="kelas">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Kelas</h1>
            <p>{{ $kelas->nama_kelas }}</p>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('kelas')}}">Daftar Kelas</a></li>
                <li class="breadcrumb-item active">Detail Kelas</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                        <a href="#" class="btn btn-outline-primary btn-sm pop-info" title="Tambah Data List Kelas Baru" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</a>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">Aksi</th>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize">
                                @forelse ($jadwalkelas as $item)
                                <tr>
                                        <td class="text-center">{{ $loop->iteration}}</td>
                                        <td class="text-center">
                                            <x-aksi :id="$item->id" link="jadwalkelas/{{ $item->id}}">
                                                <a href="{{ url('kelas/'.$item->id) }}" class="dropdown-item"><i class="fas fa-file" style="width: 25px"></i> DETAIL</a>
                                                <button type="button" data-toggle="modal" data-nama_kelas="{{ $item->nama_kelas }}"  data-id="{{ $item->id }}" data-target="#ubah" title="" class="dropdown-item" data-original-title="Edit Data"><i class="fa fa-edit text-success" style="width: 25px"> </i> EDIT
                                                </button>
                                            </x-aksi>
                                        </td>
                                        <td>{{ DbSekolah::namaPelajaranId($item->jadwalpelajaran->matapelajaran_id)->nama_pelajaran}}</td>
                                        <td class="text-center text-uppercase">{{ $item->hari}}</td>
                                        <td class="text-center">{{ $item->jam}}</td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="5" class="font-italic">-- belum ada data --</td>
                                    </tr>
                                @endforelse
                        </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                        <h4>INFORMASI JADWAL PELAJARAN KELAS {{ $kelas->nama_kelas }}</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                          @foreach ($informasi as $item)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header text-center bg-info p-2">
                                        <strong>{{ $item['hari'] }}</strong>
                                    </div>
                                    <div class="card-body text-center">
                                        @forelse ($item['jadwal'] as $row)
                                            <strong>{{ $row }}</strong> <br>
                                        @empty
                                            <i>belum ada data</i>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                          @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        
        <div class="modal fade" id="tambah">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="{{ url('jadwalkelas')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="kelas_id" value="{{ $kelas->id }}">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Jadwal Kelas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Pelajaran {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="jadwalpelajaran_id" id="jadwalpelajaran_id" class="form-control select2" required>
                                    <option value="">-- pilih mata pelajaran --</option>
                                    @foreach ($jadwalpelajaran as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->matapelajaran->nama_pelajaran.' || '.$item->pegawai->nama_pegawai) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Hari Pelajaran {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="hari" id="hari" class="form-control" required>
                                    <option value="">-- pilih hari --</option>
                                    @foreach (sis_namahari() as $item)
                                        <option value="{{ $item }}">{{ strtoupper($item) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Jam Pelajaran {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="time" name="jam_awal" id="jam_awal" value="{{ old('jam_awal') }}" class="form-control" required>
                                        </td>
                                        <td>s/d</td>
                                        <td>
                                            <input type="time" name="jam_akhir" id="jam_akhir" value="{{ old('jam_akhir') }}" class="form-control" required>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> SIMPAN</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <div class="modal fade" id="ubah">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="{{ route('jadwalkelas'.'.update','test')}}" method="post">
                    @csrf
                    @method('patch')
                <div class="modal-header">
                <h4 class="modal-title">Edit Data Kelas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-3">
                    <input type="hidden" name="id" id="id">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Kelas {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="text" name="nama_kelas" id="nama_kelas" value="{{ old('nama_kelas') }}" class="form-control" required>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> SIMPAN PERUBAHAN</button>
                </div>
                </form>
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
            $('#ubah').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var nama_kelas = button.data('nama_kelas')
                var id = button.data('id')
        
                var modal = $(this)
        
                modal.find('.modal-body #nama_kelas').val(nama_kelas);
                modal.find('.modal-body #id').val(id);
            })
        </script>
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