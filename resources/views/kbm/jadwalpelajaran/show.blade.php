<x-admin-layout title="Jadwal Pelajaran" menu="jadwalpelajaran">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Jadwal Pelajaran - {{ $matapelajaran->nama_pelajaran }}</h1>
            <p class="text-capitalize">Pengajar {{ $jadwalpelajaran->pegawai->nama_pegawai }}</p>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('jadwalpelajaran')}}">Daftar Jadwal Pelajaran</a></li>
                <li class="breadcrumb-item active">Jadwal Pelajaran</li>
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
                        <a href="{{ url('jadwalpelajaran') }}" class="btn btn-outline-secondary btn-sm pop-info"><i class="fas fa-angle-left"></i> Kembali</a>
                        <span class="float-right p-1 font-italic">Jam Digunakan <strong>{{ $lamajam }}</strong> dari <strong>{{ $jadwalpelajaran->lama_jam }}</strong></span>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
                @foreach ($jadwal as $hari => $value)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong class="text-uppercase">{{ $hari }}</strong>
                            </div>
                            <div class="card-body">
                                @if (count($value) > 0)
                                    <table class="table table-borderless">
                                        @foreach ($value as $item)
                                            <tr>
                                                <th>Kelas {{ $item->kelas->nama_kelas }}</th>
                                                <td>{{ $item->jam }} - {{ sis_jamakhir($item->jam,$item->lama) }}</td>
                                                <td>{{ $item->lama }} jam</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                @endif
                                <section class="text-center">
                                    <button  type="button" data-toggle="modal" data-hari="{{ $hari }}" data-target="#tambah" title="" class="btn btn-primary btn-sm" data-original-title="Edit Data"><i class="fa fa-plus"></i> TAMBAH JADWAL</button>
                                </section>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row">
              <div class="col-md-12">
                <div class="card">
                    @if (count($pegawai) > 1)
                        <div class="card-header">
                            <a href="#" class="btn btn-outline-primary btn-sm pop-info" title="Tambah Data List Kelas Baru" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                    @endif
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
                                                    <a href="{{ url('jadwalpelajaran/'.$item->id) }}" class="dropdown-item"><i class="fa fa-file text-primary" style="width: 25px"> </i> DETAIL</a>
                                                    <button type="button" data-toggle="modal" data-matapelajaran_id="{{ $item->matapelajaran_id }}" data-pegawai_id="{{ $item->pegawai_id }}" data-lama_jam="{{ $item->lama_jam }}"  data-id="{{ $item->id }}" data-target="#ubah" title="" class="dropdown-item" data-original-title="Edit Data"><i class="fa fa-edit text-success" style="width: 25px"> </i> EDIT
                                                    </button>
                                                </x-aksi>
                                            </td>
                                            <td>
                                                @isset($item->matapelajaran)
                                                    {{ $item->matapelajaran->nama_pelajaran}}</td>
                                                @endisset
                                            <td>
                                                @isset($item->pegawai)
                                                    {{ $item->pegawai->nama_pegawai}}
                                                @endisset
                                            </td>
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
            </div> --}}
        </div>
        
        <div class="modal fade" id="tambah">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="{{ url('jadwalkelas')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="jadwalpelajaran_id" value="{{ $jadwalpelajaran->id }}">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Jadwal Pelajaran {{ $matapelajaran->nama_pelajaran }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Hari {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="text" name="hari" id="hari" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Kelas {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="kelas_id" id="kelas_id" class="form-control select2bs4" required>
                                    @foreach ($kelas as $item)
                                        <option value="{{ $item->id }}">{{ strtoupper($item->nama_kelas) }}</option>                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Jam {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="time" name="jam" id="jam" value="{{ old('jam') }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Lama Jam (1 jam = 45 menit) {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="number" name="lama" id="lama" value="{{ old('lama') }}" class="form-control" required>
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
                                <select name="matapelajaran_id" id="matapelajaran_id" class="form-control select2bs4" required>
                                    <option value="">-- pilih mata pelajaran --</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Tenaga Pengajar {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="pegawai_id" id="pegawai_id" class="form-control select2bs4" required>
                                    <option value="">-- pilih tenaga pengajar --</option>
                                 
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
    </x-slot>
    <x-slot name="kodejs">
        <script>
            $('#tambah').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var hari = button.data('hari')
                var id = button.data('id')
        
                var modal = $(this)
        
                modal.find('.modal-body #hari').val(hari);
                modal.find('.modal-body #id').val(id);
            })
        </script>
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