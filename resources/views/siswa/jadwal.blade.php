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
                       JADWAL PELAJARAN
                  </div>
                  <div class="card-body">
                     <div class="row">
                        @foreach ($jadwal as $hari => $item)
                            <div class="col-md-4 p-3">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <strong class="text-uppercase">{{ $hari }}</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-borderless">
                                            @foreach ($item as $i)
                                            <tr>
                                                <th>{{ $i->jam }}</th>
                                                <td>
                                                    {{ $i->jadwalpelajaran->matapelajaran->nama_pelajaran }} <br>
                                                    <small>{{ $i->jadwalpelajaran->pegawai->nama_pegawai }}</small>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                     </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>