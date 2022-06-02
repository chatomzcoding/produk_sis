<x-admin-layout title="Data Pegawai" menu="pegawai">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Jadwal Pelajaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Jadwal</li>
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
                       JADWAL MENGAJAR
                  </div>
                  <div class="card-body">
                      @forelse ($pegawai->jadwalpelajaran as $item)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>{{ $item->matapelajaran->nama_pelajaran }}</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body p-2">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th>HARI</th>
                                                <th>JAM</th>
                                                <th>KELAS</th>
                                            </tr>
                                            @foreach ($item->jadwalkelas as $key)
                                                <tr>
                                                    <td>{{ $key->hari }}</td>
                                                    <td>{{ $key->jam }}</td>
                                                    <td>{{ $key->kelas->nama_kelas }}</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                          
                      @empty
                          <section class="text-center">
                              <span class="font-italic">belum ada jadwal</span>
                          </section>
                      @endforelse
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>