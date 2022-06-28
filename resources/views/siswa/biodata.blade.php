<x-admin-layout title="Data Biodata" menu="biodata">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Biodata Siswa</li>
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
                       BIODATA SISWA
                  </div>
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('img/siswa/'.$siswa->poto) }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-8">
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
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>