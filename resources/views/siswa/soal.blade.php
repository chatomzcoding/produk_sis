<x-admin-layout title="Data Pegawai" menu="pegawai">
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
                       <a href="{{ url('homesiswa/ujian/'.$siswa->id) }}" class="btn btn-outline-secondary btn-sm"><i class="fas fa-angle-left"></i> Kembali</a>
                  </div>
                  <div class="card-body">
                      @if (count($ujian->soalpg) > 0)
                        <section>
                            <h5>Daftar Soal Pilihan Ganda</h5>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Soal</th>
                                        <th>Pilihan</th>
                                        <th>Jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ujian->soalpg as $item)
                                        @php
                                            $soal = json_decode($item->soal);
                                            $abjad = ['A','B','C','D'];
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $soal->isi }}?</td>
                                            <td>
                                                @for ($i = 0; $i < count($soal->pilihan); $i++)
                                                    {{ $abjad[$i].'. '.$soal->pilihan[$i] }} <br>
                                                @endfor
                                            </td>
                                            <td>
                                                {{ $soal->pilihan[$item->jawaban] }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </section>
                      @endif
                      @if (count($ujian->soaluraian) > 0)
                        <section>
                            <h5>Daftar Soal Pilihan Ganda</h5>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Soal</th>
                                        {{-- <th>Jawaban</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ujian->soaluraian as $item)
                                        @php
                                            $soal = json_decode($item->soal);
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $soal->isi }}?</td>
                                            {{-- <td>
                                                {{ $item->jawaban }}
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </section>
                      @endif
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>