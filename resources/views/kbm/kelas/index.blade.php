<x-admin-layout title="Kelas" menu="kelas">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Kelas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Kelas</li>
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
                      @include('sistem.notifikasi')
                      <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead class="text-center">
                                <tr>
                                    <th width="5%">No</th>
                                    <th width="10%">Aksi</th>
                                    <th>Nama Kelas</th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize">
                                @forelse ($kelas as $item)
                                <tr>
                                        <td class="text-center">{{ $loop->iteration}}</td>
                                        <td class="text-center">
                                            <x-aksi :id="$item->id" link="kelas/{{ $item->id}}">
                                                <a href="{{ url('kelas/'.$item->id) }}" class="dropdown-item"><i class="fas fa-file" style="width: 25px"></i> DETAIL</a>
                                                <button type="button" data-toggle="modal" data-nama_kelas="{{ $item->nama_kelas }}"  data-id="{{ $item->id }}" data-target="#ubah" title="" class="dropdown-item" data-original-title="Edit Data"><i class="fa fa-edit text-success" style="width: 25px"> </i> EDIT
                                                </button>
                                            </x-aksi>
                                        </td>
                                        <td>{{ $item->nama_kelas}}</td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="3" class="font-italic">-- belum ada data --</td>
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
                <form action="{{ url('kelas')}}" method="post" enctype="multipart/form-data">
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
                            <label for="" class="col-md-4 p-2">Nama Kelas {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="text" name="nama_kelas" id="nama_kelas" value="{{ old('nama_kelas') }}" class="form-control" required>
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
                <form action="{{ route('kelas'.'.update','test')}}" method="post">
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