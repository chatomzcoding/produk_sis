<x-admin-layout title="Mata Pelajaran" menu="matapelajaran">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Mata Pelajaran {{ $matapelajaran->nama_pelajaran }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Detail Mata Pelajaran</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
      
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <h3 class="profile-username text-center">{{ $matapelajaran->nama_pelajaran }}</h3>
                      {{-- <p class="text-muted text-center">Software Engineer</p> --}}
      
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>Jumlah Jadwal</b> <a class="float-right">{{ count($matapelajaran->jadwalpelajaran->jadwalkelas) }}</a>
                        </li>
                        {{-- <li class="list-group-item">
                          <b>Jumlah Siswa Bimbingan</b> <a class="float-right">543</a>
                        </li> --}}
                      </ul>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
      
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Agenda Kelas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Ujian</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <table class="table table-borderless">
                                <tr>
                                    <th>HARI</th>
                                    <th>JAM</th>
                                    <th>KELAS</th>
                                </tr>
                                @foreach ($jadwalkelas as $key)
                                    <tr>
                                        <td>{{ $key->hari }}</td>
                                        <td>{{ $key->jam }}</td>
                                        <td>{{ $key->kelas->nama_kelas }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <section>
                                <button data-toggle="modal" data-target="#tambahujian" class="btn btn-primary btn-sm">Tambah Ujian</button> 
                            </section>
                            <section>
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Nama Ujian</th>
                                        <th>Sesi</th>
                                        <th>Jenis Soal</th>
                                        <th>Tanggal Ujian</th>
                                        <th>Soal</th>
                                        <th>Status</th>
                                    </tr>
                                    @foreach ($jadwalpelajaran->ujian as $key)
                                        <tr>
                                            <td>{{ $key->nama_ujian }}</td>
                                            <td>{{ $key->sesi }}</td>
                                            <td>{{ $key->jenis }}</td>
                                            <td>{{ date_indo($key->tgl_ujian) }}</td>
                                            <td>
                                                @if ($key->status_soal == 'selesai')
                                                    <a href="{{ url('ujian/'.$key->id) }}" class="btn btn-info btn-sm">lihat Ujian</a>
                                                @else
                                                    <a href="{{ url('soal/create?id='.$key->id) }}" class="btn btn-primary btn-sm">Lihat Soal</a>
                                                @endif
                                            </td>
                                            <td>{{ $key->status_soal }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </section>
                        </div>
                        <!-- /.tab-pane -->
      
                        <div class="tab-pane" id="settings">
                            @foreach ($jadwalkelas as $item)
                                <a href="{{ url('homeguru/agendakelas/'.$item->id) }}" class="btn btn-info">{{ $item->kelas->nama_kelas }}</a>
                            @endforeach
                        </div>
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
        </div>
        
        <div class="modal fade" id="tambahujian">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="{{ url('ujian')}}" method="post">
                    @csrf
                    <input type="hidden" name="jadwalpelajaran_id" value="{{ $jadwalpelajaran->id }}">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Mata Pelajaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Ujian</label>
                            <div class="col-md-8 p-0">
                                <input type="text" name="nama_ujian" id="nama_ujian" value="{{ old('nama_ujian') }}" placeholder="ujian minggu ini" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Tanggal Ujian</label>
                            <div class="col-md-8 p-0">
                                <input type="date" name="tgl_ujian" id="tgl_ujian" value="{{ old('tgl_ujian') }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Jenis Ujian</label>
                            <div class="col-md-8 p-0">
                                <select name="jenis" id="" class="form-control">
                                    <option value="pilihan ganda">PILIHAN GANDA</option>
                                    <option value="uraian">URAIAN</option>
                                    <option value="pilihan ganda uraian">PILIHAN GANDA dan Uraian</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Sesi Ujian</label>
                            <div class="col-md-8 p-0">
                                <select name="sesi" id="" class="form-control">
                                    <option value="harian">HARIAN</option>
                                    <option value="uts">Ulangan Tengah Semester</option>
                                    <option value="uas">Ulangan Akhir Semester</option>
                                </select>
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
                <form action="{{ route('matapelajaran'.'.update','test')}}" method="post">
                    @csrf
                    @method('patch')
                <div class="modal-header">
                <h4 class="modal-title">Edit Data Mata Pelajaran</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-3">
                    <input type="hidden" name="id" id="id">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Nama Mata Pelajaran {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="text" name="nama_pelajaran" id="nama_pelajaran" value="{{ old('nama_pelajaran') }}" class="form-control" required>
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
</x-admin-layout>