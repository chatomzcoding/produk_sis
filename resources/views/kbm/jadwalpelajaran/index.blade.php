<x-admin-layout title="Jadwal Pelajaran" menu="jadwalpelajaran">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Jadwal Pelajaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Jadwal Pelajaran</li>
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
                        {{-- <div class="float-right">
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
                        </div> --}}
                  </div>
                  <div class="card-body">
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">Aksi</th>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Guru Pengajar</th>
                                    <th>Waktu Mengajar</th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize">
                                @forelse ($jadwalpelajaran as $item)
                                <tr>
                                        <td class="text-center">{{ $loop->iteration}}</td>
                                        <td class="text-center">
                                            <x-aksi :id="$item->id" link="jadwalpelajaran/{{ $item->id }}">
                                                <button type="button" data-toggle="modal" data-matapelajaran_id="{{ $item->matapelajaran_id }}" data-pegawai_id="{{ $item->pegawai_id }}" data-lama_jam="{{ $item->lama_jam }}"  data-id="{{ $item->id }}" data-target="#ubah" title="" class="dropdown-item" data-original-title="Edit Data"><i class="fa fa-edit text-success" style="width: 25px"> </i> EDIT
                                                </button>
                                            </x-aksi>
                                        </td>
                                        <td>{{ $item->matapelajaran->nama_pelajaran}}</td>
                                        <td>{{ $item->pegawai->nama_pegawai}}</td>
                                        <td>{{ $item->lama_jam}} Jam</td>
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
        </div>
        
        <div class="modal fade" id="tambah">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="{{ url('jadwalpelajaran')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Kelas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Pelajaran {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="matapelajaran_id" id="matapelajaran_id" class="form-control select2" required>
                                    <option value="">-- pilih mata pelajaran --</option>
                                    @foreach ($matapelajaran as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->nama_pelajaran) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Tenaga Pengajar {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="pegawai_id" id="pegawai_id" class="form-control select2" required>
                                    <option value="">-- pilih tenaga pengajar --</option>
                                    @foreach ($pegawai as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->nama_pegawai) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Lama Waktu (jam) {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="number" name="lama_jam" id="lama_jam" value="{{ old('lama_jam') }}" step="any" class="form-control" required>
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
                <form action="{{ route('jadwalpelajaran'.'.update','test')}}" method="post">
                    @csrf
                    @method('patch')
                <div class="modal-header">
                <h4 class="modal-title">Edit Data Jadwal Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-3">
                    <input type="hidden" name="id" id="id">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Pelajaran {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="matapelajaran_id" id="matapelajaran_id" class="form-control select2" required>
                                    <option value="">-- pilih mata pelajaran --</option>
                                    @foreach ($matapelajaran as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->nama_pelajaran) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Tenaga Pengajar {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="pegawai_id" id="pegawai_id" class="form-control select2" required>
                                    <option value="">-- pilih tenaga pengajar --</option>
                                    @foreach ($pegawai as $item)
                                        <option value="{{ $item->id }}">{{ ucwords($item->nama_pegawai) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Lama Waktu (jam) {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="number" name="lama_jam" id="lama_jam" value="{{ old('lama_jam') }}" step="any" class="form-control" required>
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
                var matapelajaran_id = button.data('matapelajaran_id')
                var pegawai_id = button.data('pegawai_id')
                var lama_jam = button.data('lama_jam')
                var id = button.data('id')
        
                var modal = $(this)
        
                modal.find('.modal-body #matapelajaran_id').val(matapelajaran_id);
                modal.find('.modal-body #pegawai_id').val(pegawai_id);
                modal.find('.modal-body #lama_jam').val(lama_jam);
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