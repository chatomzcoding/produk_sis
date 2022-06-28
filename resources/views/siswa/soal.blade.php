<x-admin-layout title="Data Soal" menu="ujian">
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
                        @if ($nilai)
                            <div class="alert alert-info">
                                Soal telah diisi pada tanggal {{ date_indo($nilai->created_at->format('Y-m-d')) }}
                            </div>
                        @endif
                      @if (count($ujian->soalpg) > 0)
                        <section>
                            <h5>Daftar Soal Pilihan Ganda</h5>
                            <form action="{{ url('siswanilai') }}" method="post">
                                @csrf
                                <input type="hidden" name="ujian_id" value="{{ $ujian->id }}">
                                <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Soal</th>
                                            <th>Pilihan</th>
                                            @if ($nilai)
                                                <th>Jawaban</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ujian->soalpg as $item)
                                            @php
                                                $soal = json_decode($item->soal);
                                                $abjad = ['A','B','C','D','E'];
                                            @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $soal->isi }}?</td>
                                                @if ($nilai)
                                                <td>
                                                    @for ($i = 0; $i < count($soal->pilihan); $i++)
                                                        {{ $abjad[$i].'. '.$soal->pilihan[$i] }} <br>
                                                    @endfor
                                                </td>
                                                <td>
                                                    @php
                                                        $jawaban = json_decode($nilai->jawaban,TRUE)
                                                    @endphp
                                                    {{ $soal->pilihan[$jawaban[$loop->iteration]] }}
                                                </td>
                                                @else
                                                <td>
                                                    @for ($i = 0; $i < count($soal->pilihan); $i++)
                                                        <input type="radio" name="jawaban[{{ $loop->iteration }}]" value="{{ $i }}" required> {{ $abjad[$i].'. '.$soal->pilihan[$i] }} <br>
                                                    @endfor
                                                </td>
                                                    
                                                @endif
                                            </tr>
                                        @endforeach
                                        @if (!$nilai)
                                            <tr>
                                                <td colspan="3">
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> SIMPAN JAWABAN</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </form>
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