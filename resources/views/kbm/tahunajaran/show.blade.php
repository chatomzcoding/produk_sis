<x-admin-layout title="Tahun Ajaran" menu="tahunajaran">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Tahun Ajaran {{ $tahunajaran->nama_tahun_ajaran }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ url('tahunajaran')}}">Daftah Tahun Ajaran</a></li>
                <li class="breadcrumb-item active">Detail</li>
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
                        <x-ui.tombolkembali url="tahunajaran"></x-ui.tombolkembali>
                        <a href="#" class="btn btn-outline-primary btn-sm pop-info" title="Tambah Data List Tahun Ajaran Baru" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</a>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          @forelse ($kelas as $item)
                            <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body">
                                        <h2>Kelas {{ $item->nama_kelas }}</h2>
                                        <a href="{{ url('tahunajaran/'.$tahunajaran->id.'?sesi=daftarsiswa&kelas_id='.$item->id) }}" class="card-link">Daftar Siswa ({{ DbSekolah::jumlahSiswaKelasPerTahunAjaran($tahunajaran->id,$item->id) }})</a>
                                        {{-- <a href="#" class="card-link">Another link</a> --}}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <section class="col">
                                    Data Kelas belum ada
                                </section>
                            @endforelse
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <div class="modal fade" id="tambah">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="{{ url('tahunajaran')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Tahun Ajaran Baru</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Tahun Ajaran {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="text" name="nama_tahun_ajaran" id="nama_tahun_ajaran" value="{{ old('nama_tahun_ajaran') }}" class="form-control" required>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Kategori {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="kategori_id" id="kategori_id" class="form-control" required>
                                    <option value="">-- pilih Kategori --</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
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
                <form action="{{ route('tahunajaran'.'.update','test')}}" method="post">
                    @csrf
                    @method('patch')
                <div class="modal-header">
                <h4 class="modal-title">Edit Data Tahun Ajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-3">
                    <input type="hidden" name="id" id="id">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Tahun Ajaran {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="text" name="nama_tahun_ajaran" id="nama" value="{{ old('nama_tahun_ajaran') }}" class="form-control" required>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Kategori {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <select name="kategori_id" id="kategori_id" class="form-control" required>
                                    <option value="">-- pilih Kategori --</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
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
                var nama = button.data('nama')
                var id = button.data('id')
        
                var modal = $(this)
        
                modal.find('.modal-body #nama').val(nama);
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