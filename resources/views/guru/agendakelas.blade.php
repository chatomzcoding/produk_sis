<x-admin-layout title="Data Agenda Kelas" menu="agendakelas">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Agenda Kelas {{ $jadwalkelas->kelas->nama_kelas }} | {{ $jadwalkelas->jadwalpelajaran->matapelajaran->nama_pelajaran }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Agenda Kelas</li>
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
                       <a href="{{ url('homeguru/pelajaran/'.$jadwalkelas->jadwalpelajaran_id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-angle-left"></i> Kembali</a>
                  </div>
                  <div class="card-body">
                    <div class="row">
                        <div class="col-5 col-sm-3">
                          <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Absensi Siswa</a>
                            <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">NIlai Siswa</a>
                            {{-- <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Messages</a> --}}
                          </div>
                        </div>
                        <div class="col-7 col-sm-9">
                          <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                <section>
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#absensi">Tambah Absensi</a>
                                    <div class="table-responsive my-2">
                                      <table class="table table-bordered">
                                          <thead>
                                              <tr>
                                                  <th width="5%" rowspan="2">No</th>
                                                  <th rowspan="2">Nama Siswa</th>
                                                  @if (count($tanggal) > 0)
                                                      <th colspan="{{ count($tanggal) }}" class="text-center">Tanggal</th>
                                                  @endif
                                                  <th colspan="5" class="text-center">Akumulasi</th>
                                                </tr>
                                                <tr>
                                                  @foreach ($tanggal as $item)
                                                      <th class="text-center">{{ date_indo($item->tanggal) }}</th>
                                                  @endforeach
                                                  <th class="text-center">H</th>
                                                  <th class="text-center">I</th>
                                                  <th class="text-center">S</th>
                                                  <th class="text-center">A</th>
                                                  <th class="text-center">Total</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach ($absensi as $item)
                                                  <tr>
                                                      <td>{{ $item['no'] }}</td>
                                                      <td class="text-capitalize">{{ $item['nama'] }}</td>
                                                      @foreach ($item['absen'] as $key)
                                                          <td class="text-center">{{ $key }}</td>
                                                      @endforeach
                                                      @foreach ($item['akumulasi'] as $k)
                                                          <td class="text-center">{{ $k }}</td>
                                                      @endforeach
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                      </table>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                      <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                          @foreach ($ujian as $item)
                                            <li class="nav-item">
                                                <a class="nav-link @if ($loop->iteration == 1)
                                          active
                                                @endif " id="tabs-{{ $item->id }}tab" data-toggle="pill" href="#tabs-{{ $item->id }}" role="tab" aria-controls="tabs-{{ $item->id }}" aria-selected="true">{{ $item->nama_ujian }}</a>
                                            </li>
                                          @endforeach
                                      </ul>
                                      
                                    </div>
                                    <div class="card-body">
                                      <div class="tab-content" id="custom-tabs-four-tabContent">
                                        @foreach ($ujian as $item)
                                        <div class="tab-pane fade  @if ($loop->iteration == 1)
                                            show active
                                                  @endif " id="tabs-{{ $item->id }}" role="tabpanel" aria-labelledby="tabs-{{ $item->id }}tab">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Siswa</th>
                                                            <th>Nilai</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($item->siswanilai as $i)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td class="text-capitalize">{{ $i->siswa->nama_siswa }}</td>
                                                                <td>{{ $i->nilai }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        @endforeach
                                      </div>
                                    </div>
                             </section>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                              soon
                            </div>
                       
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        {{-- tambah absensi --}}
        <div class="modal fade" id="absensi">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form action="{{ url('absensikelas')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="jadwalkelas_id" value="{{ $jadwalkelas->id }}">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Absensi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-3">
                    <section class="p-3">
                        <div class="form-group row">
                            <label for="" class="col-md-4 p-2">Tanggal Absensi {!! ireq() !!}</label>
                            <div class="col-md-8 p-0">
                                <input type="date" name="tanggal" id="tanggal" value="{{ tgl_sekarang() }}" step="any" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="" class="col-md-4 p-2">Status Absensi {!! ireq() !!}</label>
                        <div class="col-md-8 p-0">
                            <select name="status_absensi" id="status_absensi" class="form-control" required>
                                <option value="semua">SEMUA HADIR</option>
                                <option value="sebagian">SEBAGIAN HADIR HADIR</option>
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
    </x-slot>
</x-admin-layout>