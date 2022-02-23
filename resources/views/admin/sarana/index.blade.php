@extends('layouts.admin')

@section('title')
    Data Sarana
@endsection

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Data Sarana</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
            <li class="breadcrumb-item active">Daftar Sarana</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection
   
@section('content')
    
    <div class="container-fluid">
        <div class="row">
            {{-- start col --}}
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-tie"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Siswa</span>
                  <span class="info-box-number">
                        {{-- {{ $main['statistik']['total-siswa']}} --}}
                  </span>
                </div>
              </div>
            </div>
            {{-- end col --}}
            {{-- start col --}}
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-tie"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Laki laki</span>
                  <span class="info-box-number">
                        {{-- {{ $main['statistik']['total-l']}} --}}
                  </span>
                </div>
              </div>
            </div>
            {{-- end col --}}
            {{-- start col --}}
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-tie"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Perempuan</span>
                  <span class="info-box-number">
                        {{-- {{ $main['statistik']['total-p']}} --}}
                  </span>
                </div>
              </div>
            </div>
            {{-- end col --}}
            {{-- start col --}}
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-user-tie"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Siswa Aktif</span>
                  <span class="info-box-number">
                        {{-- {{ $main['statistik']['total-aktif']}} --}}
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
                    <a href="#" class="btn btn-outline-primary btn-sm pop-info" title="Tambah Data List Baru" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</a>
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
                  {{-- <section class="mb-3">
                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fas fa-filter"></i> Filter
                        </a>
                      <div class="collapse" id="collapseExample">
                          <div class="card card-body mt-2">
                            <form action="{{ url($main['link']) }}" method="get">
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
                          </form>
                        </div>
                      </div>
                  </section> --}}
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead class="text-center">
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%">Aksi</th>
                                <th>Nama</th>
                                <th>Tahun Pengadaan</th>
                                <th>Fungsi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-capitalize">
                            @forelse ($sarana as $item)
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
                                                    <button type="button" data-toggle="modal" data-nama="{{ $item->nama }}" data-keterangan="{{ $item->keterangan }}" data-status="{{ $item->status }}"  data-id="{{ $item->id }}" data-target="#ubah" title="" class="dropdown-item" data-original-title="Edit Data"><i class="fa fa-edit text-success" style="width: 25px"> </i> EDIT
                                                    </button>
                                                  <div class="dropdown-divider"></div>
                                                  <button onclick="deleteRow( {{ $item->id }} )" class="dropdown-item"><i class="fas fa-trash-alt text-danger" style="width: 25px"></i> HAPUS</button>
                                                </div>
                                            </div>
                                    </td>
                                    <td>{{ $item->nama}}</td>
                                    <td>{{ $item->tahun_pengadaan}}</td>
                                    <td>{{ $item->fungsi}}</td>
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

    <div class="modal fade" id="tambah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ url($main['link'])}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-header">
                <h4 class="modal-title">Tambah Album Galeri</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-3">
                <section class="p-3">
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Nama Album {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Keterangan {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="text" name="keterangan" id="keterangan" value="{{ old('keterangan') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Kategori {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <select name="kategori_id" id="kategori_id" class="form-control" required>
                                <option value="">-- pilih Kategori --</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Photo ALbum {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="file" name="album" id="album" value="{{ old('album') }}" class="form-control" required>
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
    <!-- /.modal -->

    {{-- modal edit --}}
    <div class="modal fade" id="ubah">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route($main['link'].'.update','test')}}" method="post">
                @csrf
                @method('patch')
            <div class="modal-header">
            <h4 class="modal-title">Edit Data Satuan Barang</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body p-3">
                <input type="hidden" name="id" id="id">
                <section class="p-3">
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">NIS {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="text" name="nis" id="nis" maxlength="9" value="{{ old('nis') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Nama Siswa {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Tanggal Lahir {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Alamat {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">No Telp {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="text" name="no_telp" id="no_telp" value="{{ old('no_telp') }}" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Jk {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <select name="jk" id="jk" class="form-control" required>
                                <option value="">-- jenis kelamin --</option>
                                <option value="laki-laki">Laki - Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Photo {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <input type="file" name="photo" id="photo" value="{{ old('photo') }}" class="form-control" required>
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
    <!-- /.modal -->

    {{-- modal info --}}
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
    <!-- /.modal -->

    @section('script')
        
        <script>
            $('#ubah').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var nama = button.data('nama')
                var nis = button.data('nis')
                var tgl_lahir = button.data('tgl_lahir')
                var alamat = button.data('alamat')
                var no_telp = button.data('no_telp')
                var jk = button.data('jk')
                var status = button.data('status')
                var id = button.data('id')
        
                var modal = $(this)
        
                modal.find('.modal-body #nama').val(nama);
                modal.find('.modal-body #nis').val(nis);
                modal.find('.modal-body #tgl_lahir').val(tgl_lahir);
                modal.find('.modal-body #alamat').val(alamat);
                modal.find('.modal-body #no_telp').val(no_telp);
                modal.find('.modal-body #jk').val(jk);
                modal.find('.modal-body #status').val(status);
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
    @endsection

    @endsection

