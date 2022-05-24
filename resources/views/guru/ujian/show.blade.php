<x-admin-layout title="Data Pegawai" menu="pegawai">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Soal Ujian {{ $ujian->nama_ujian }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Buat Soal</li>
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
                       SOAL
                  </div>
                  <div class="card-body">
                     <section>
                         <h5>Daftar Soal</h5>
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
                                @foreach ($ujian->soal as $item)
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
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>