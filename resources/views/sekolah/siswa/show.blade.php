<x-admin-layout title="Data Siswa" menu="siswa">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Siswa</li>
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
                        <a href="{{ url('siswa') }}" class="btn btn-outline-secondary btn-sm pop-info" title="Kembali ke Data Siswa Baru"><i class="fas fa-angle-left"></i> Kembali</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/siswa/'.$siswa->poto) }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <section>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Biodata</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Nilai Raport</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Organisasi</a>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tr>
                                                    <th>NIPD</th>
                                                    <td>{{ $siswa->nipd }}</td>
                                                </tr>
                                                <tr>
                                                    <th>NISN</th>
                                                    <td>{{ $siswa->nisn }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Siswa</th>
                                                    <td class="text-capitalize">{{ $siswa->nama_siswa }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat Tanggal Lahir</th>
                                                    <td>{{ ucwords($siswa->tempat_lahir).', '.date_indo($siswa->tanggal_lahir) }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Ayah</th>
                                                    <td class="text-capitalize">{{ $siswa->nama_ayah }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Ibu</th>
                                                    <td class="text-capitalize">{{ $siswa->nama_ibu }}</td>
                                                </tr>
                                                <tr>
                                                    <th>E-mail</th>
                                                    <td>{{ $siswa->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th>No Hp</th>
                                                    <td>{{ $siswa->no_telp }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                  </div>
                            </section>
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
                "responsive": false, "lengthChange": false, "autoWidth": false,
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