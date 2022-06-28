<x-admin-layout title="Data Ujian" menu="pegawai">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Jadwal Ujian</h1>
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
                       JADWAL UJIAN
                  </div>
                  <div class="card-body">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>Mata Pelajaran</th>
                                <th>Jadwal</th>
                                <th>Lihat Soal</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jadwalujian as $mapel => $ujian)
                                <tr class="table-info">
                                    <td colspan="4" class="text-uppercase font-weight-bold">{{ $mapel }}</td>
                                </tr>
                                @foreach ($ujian as $i)
                                <tr>
                                    <td></td>
                                    <td>
                                    {{ ucwords($i->nama_ujian) }} <br> {{ date_indo($i->tgl_ujian) }}
                                    </td>
                                    <td>
                                        @if ($i->tgl_ujian == tgl_sekarang())
                                        <div class="alert alert-info text-center">
                                            Kerjakan Soal Hari ini <br>
                                            <a href="{{ url('homesiswa/soal/'.$siswa->id.'/'.$i->id) }}">Buka Soal</a>
                                        </div>
                                        @else
                                            belum bisa dilihat
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @foreach ($i->siswanilai as $j)
                                            @if ($siswa->id == $j->siswa_id)
                                                {{ $j->nilai }}
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>