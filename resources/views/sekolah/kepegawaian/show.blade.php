<x-admin-layout title="Data Pegawai" menu="kepegawaian">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Pegawai {{ ucwords($pegawai->nama_pegawai) }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Detail Pegawai {{ ucwords($pegawai->nama_pegawai) }}</li>
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
                        <a href="{{ url('kepegawaian') }}" class="btn btn-outline-secondary btn-sm pop-info" title="Kembali ke daftar pegawai"><i class="fas fa-angle-left"></i> Kembali</a>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profil</a>
                          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Arsip Dokumen</a>
                          {{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a> --}}
                          {{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
                        </div>
                      </div>
                      <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="tabke-responsive">
                              <table class="table table-borderless">
                                <tr>
                                  <th>Nama Pegawai</th>
                                  <td class="text-capitalize">: {{ $pegawai->nama_pegawai }}</td>
                                </tr>
                                <tr>
                                  <th>NIP</th>
                                  <td>: {{ $pegawai->nip }}</td>
                                </tr>
                                <tr>
                                  <th>NUPTK</th>
                                  <td>: {{ $pegawai->nuptk }}</td>
                                </tr>
                                <tr>
                                  <th>Alamat</th>
                                  <td>: {{ ucfirst($pegawai->alamat) }}</td>
                                </tr>
                                <tr>
                                  <th>Tempat Tanggal Lahir</th>
                                  <td>: {{ ucwords($pegawai->tempat_lahir).', '.date_indo($pegawai->tanggal_lahir) }}</td>
                                </tr>
                                <tr>
                                  <th>Jenis Kelamin</th>
                                  <td>: {{ $pegawai->jk }}</td>
                                </tr>
                                <tr>
                                  <th>Agama</th>
                                  <td class="text-capitalize">: {{ $pegawai->agama }}</td>
                                </tr>
                                <tr>
                                  <th>No Telepon</th>
                                  <td>: {{ $pegawai->no_telp }}</td>
                                </tr>
                                <tr>
                                  <th>e-mail</th>
                                  <td>: {{ $pegawai->email }}</td>
                                </tr>
                                <tr>
                                  <th>Status</th>
                                  <td class="text-uppercase">: {{ $pegawai->status }}</td>
                                </tr>
                                <tr>
                                  <th>Jabatan</th>
                                  <td class="text-uppercase">: {{ $pegawai->jabatan }}</td>
                                </tr>
                              </table>
                            </div>
                          </div>

                          {{-- ARSIP PEEGAWAI --}}
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            @if (isset($pegawai->arsippegawai))
                            <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit">EDIT ARSIP</a>

                              <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                      <tr>
                                        <th>Nama Dokumen</th>
                                        <th>Status</th>
                                        <th>Lihat Dokumen</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach (sis_arsipdokumen() as $key => $namafile)
                                        <tr>
                                          <th>{{ $namafile }}</th>
                                          @if (is_null($pegawai->arsippegawai->$key))
                                          <td>
                                            <small class="badge badge-danger">belum diupload</small>
                                          </td>
                                          <td>
                                          </td>
                                        </tr>
                                        @else
                                            <td>
                                              <small class="badge badge-success">sudah upload</small>
                                            </td>
                                            <td>
                                            <a href="{{ asset('dokumen/arsippegawai/'.$pegawai->arsippegawai->$key) }}" target="_blank">dokumen</a>

                                            </td>
                                          </tr>
                                        @endif
                                      @endforeach

                                    </tbody>
                                </table>
                              </div>
                            @else
                              <section class="text-center">
                                <p>belum ada arsip yang ditambahkan</p>
                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">TAMBAHKAN ARSIP</a>
                              </section>
                            @endif
                          </div>
                          {{-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div> --}}
                          {{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade" id="tambah">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form action="{{ url('arsippegawai')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
              <div class="modal-header">
                  <h4 class="modal-title">Tambah Data Arsip Dokumen</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body p-3">
                  <section class="p-3 row">
                    <div class="col-12">
                      <div class="alert alert-info">
                        Dokumen yang diuplod wajib berformat PDF
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">KTP</label>
                        <input type="file" name="ktp" id="ktp" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">KK</label>
                        <input type="file" name="kk" id="kk" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">SK Awal</label>
                        <input type="file" name="sk_awal" id="sk_awal" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">NPWP</label>
                        <input type="file" name="npwp" id="npwp" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Karis</label>
                        <input type="file" name="karis" id="karis" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">SKGB</label>
                        <input type="file" name="skgb" id="skgb" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Lainnya</label>
                        <input type="file" name="lainnya" id="lainnya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Ijasah SD</label>
                        <input type="file" name="sd" id="sd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah SMP</label>
                        <input type="file" name="smp" id="smp" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah SMA</label>
                        <input type="file" name="sma" id="sma" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah S1</label>
                        <input type="file" name="s1" id="s1" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah S2</label>
                        <input type="file" name="s2" id="s2" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah S3</label>
                        <input type="file" name="s3" id="s3" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Sertifikat</label>
                        <input type="file" name="sertifikat" id="sertifikat" class="form-control">
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
        @if (isset($pegawai->arsippegawai))

        <div class="modal fade" id="edit">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form action="{{ url('arsippegawai/'.$pegawai->arsippegawai->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('patch')
                  <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">

              <div class="modal-header">
                  <h4 class="modal-title">Edit Data Arsip Dokumen</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body p-3">
                  <section class="p-3 row">
                    <div class="col-12">
                      <div class="alert alert-info">
                        Dokumen yang diuplod wajib berformat PDF
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">KTP {!! sis_cekarsip($pegawai->arsippegawai->ktp) !!}</label>
                        <input type="file" name="ktp" id="ktp" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">KK {!! sis_cekarsip($pegawai->arsippegawai->kk) !!}</label>
                        <input type="file" name="kk" id="kk" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">SK Awal {!! sis_cekarsip($pegawai->arsippegawai->sk_awal) !!}</label>
                        <input type="file" name="sk_awal" id="sk_awal" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">NPWP {!! sis_cekarsip($pegawai->arsippegawai->npwp) !!}</label>
                        <input type="file" name="npwp" id="npwp" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Karis {!! sis_cekarsip($pegawai->arsippegawai->karis) !!}</label>
                        <input type="file" name="karis" id="karis" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">SKGB {!! sis_cekarsip($pegawai->arsippegawai->skgb) !!}</label>
                        <input type="file" name="skgb" id="skgb" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Lainnya {!! sis_cekarsip($pegawai->arsippegawai->lainnya) !!}</label>
                        <input type="file" name="lainnya" id="lainnya" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Ijasah SD {!! sis_cekarsip($pegawai->arsippegawai->sd) !!}</label>
                        <input type="file" name="sd" id="sd" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah SMP {!! sis_cekarsip($pegawai->arsippegawai->smp) !!}</label>
                        <input type="file" name="smp" id="smp" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah SMA {!! sis_cekarsip($pegawai->arsippegawai->sma) !!}</label>
                        <input type="file" name="sma" id="sma" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah S1 {!! sis_cekarsip($pegawai->arsippegawai->s1) !!}</label>
                        <input type="file" name="s1" id="s1" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah S2 {!! sis_cekarsip($pegawai->arsippegawai->s2) !!}</label>
                        <input type="file" name="s2" id="s2" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ijasah S3 {!! sis_cekarsip($pegawai->arsippegawai->s3) !!}</label>
                        <input type="file" name="s3" id="s3" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Sertifikat {!! sis_cekarsip($pegawai->arsippegawai->sertifikat) !!}</label>
                        <input type="file" name="sertifikat" id="sertifikat" class="form-control">
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
        @endif
    </x-slot>
</x-admin-layout>