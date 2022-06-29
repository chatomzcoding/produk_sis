<x-admin-layout title="Data Kehadiran" menu="kehadiran">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Kehadiran Siswa - {{ date_indo($tanggal) }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Catat Kehadiran</li>
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
                       <a href="{{ url('homeguru/agendakelas/'.$jadwalkelas->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-angle-left"></i> Kembali</a>
                  </div>
                  <div class="card-body">
                    <section>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-center">
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">NIS</th>
                                        <th colspan="4">Kehadiran</th>
                                        <th rowspan="2">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <th>HADIR</th>
                                        <th>SAKIT</th>
                                        <th>IZIN</th>
                                        <th>ALFA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="{{ url('absensikelas') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="s" value="sebagian">
                                        <input type="hidden" name="jadwalkelas_id" value="{{ $jadwalkelas->id }}">
                                        <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                                    @foreach ($jadwalkelas->kelas->kbm as $item)
                                        <input type="hidden" name="siswa_id[]" value="{{ $item->siswa->id }}">
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-capitalize">{{ $item->siswa->nama_siswa }}</td>
                                            <td class="text-capitalize">{{ $item->siswa->nisn }}</td>
                                            <td class="text-center"><input type="radio" name="status_absensi[{{ $item->siswa->id }}]" value="hadir" checked></td>
                                            <td class="text-center"><input type="radio" name="status_absensi[{{ $item->siswa->id }}]" value="sakit"></td>
                                            <td class="text-center"><input type="radio" name="status_absensi[{{ $item->siswa->id }}]" value="izin"></td>
                                            <td class="text-center"><input type="radio" name="status_absensi[{{ $item->siswa->id }}]" value="alfa"></td>
                                            <td>
                                                <input type="text" name="keterangan[]" class="form-control" placeholder="beri keterangan">
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="8">
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> SIMPAN DATA</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>