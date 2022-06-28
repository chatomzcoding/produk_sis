<x-admin-layout title="Data Pegawai" menu="pegawai">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Soal Ujian {{ $ujian->nama_ujian }} | {{ $ujian->jenis }}</h1>
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
                       <a href="{{ url('jadwalpelajaran/'.$ujian->jadwalpelajaran_id) }}" class="btn btn-secondary btn-sm"><i class="fas fa-angle-left"></i> Kembali</a>
                  </div>
                  <div class="card-body">
                     <section>
                         @if ($ujian->jenis == 'pilihan ganda' || $ujian->jenis == 'pilihan ganda uraian')
                         <h3>PILIHAN GANDA</h3>
                            <form action="{{ url('soal') }}" method="post">
                                @csrf
                                <input type="hidden" name="ujian_id" value="{{ $ujian->id }}">
                                <input type="hidden" name="tipe" value="pilihan ganda">

                                <div class="form-group row">
                                    <label for="" class="col-md-4">Soal</label>
                                    <input type="text" name="soal" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Pilihan Jawaban</label>
                                    <div class="col-md-4 p-0">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">A</span>
                                            </div>
                                            <input type="text" name="pilihan[]" class="form-control" placeholder="pilihan A" aria-label="A" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">B</span>
                                            </div>
                                            <input type="text" name="pilihan[]" class="form-control" placeholder="pilihan B" aria-label="B" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">C</span>
                                            </div>
                                            <input type="text" name="pilihan[]" class="form-control" placeholder="pilihan C" aria-label="C" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">D</span>
                                            </div>
                                            <input type="text" name="pilihan[]" class="form-control" placeholder="pilihan D" aria-label="D" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1">E</span>
                                            </div>
                                            <input type="text" name="pilihan[]" class="form-control" placeholder="pilihan E" aria-label="E" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Jawaban</label>
                                    <div class="col-md-8">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th>
                                                    <input type="radio" name="jawaban" value="0"> A
                                                </th>
                                                <th>
                                                    <input type="radio" name="jawaban" value="1"> B
                                                </th>
                                                <th>
                                                    <input type="radio" name="jawaban" value="2"> C
                                                </th>
                                                <th>
                                                    <input type="radio" name="jawaban" value="3"> D
                                                </th>
                                                <th>
                                                    <input type="radio" name="jawaban" value="4"> E
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary btn-sm">SIMPAN SOAL</button>
                                </div>
                            </form>
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
                                               $abjad = ['A','B','C','D','E'];
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
                         @if ($ujian->jenis == 'uraian' || $ujian->jenis == 'pilihan ganda uraian')
                         <hr>
                             <h3>URAIAN</h3>
                            <form action="{{ url('soal') }}" method="post">
                                @csrf
                                <input type="hidden" name="ujian_id" value="{{ $ujian->id }}">
                                <input type="hidden" name="tipe" value="uraian">
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Soal</label>
                                    <input type="text" name="soal" class="form-control col-md-8" required>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Jawaban</label>
                                    <div class="col-md-8 p-0">
                                        <textarea name="jawaban" id="" cols="30" rows="5" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary btn-sm">SIMPAN SOAL</button>
                                </div>
                            </form>
                            <section>
                                <h5>Daftar Soal</h5>
                                <table class="table table-borderless">
                                   <thead>
                                       <tr>
                                           <th>No</th>
                                           <th>Soal</th>
                                           <th>Jawaban</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($ujian->soal as $item)
                                           @php
                                               $soal = json_decode($item->soal);
                                           @endphp
                                           <tr>
                                               <td>{{ $loop->iteration }}</td>
                                               <td>{{ $soal->isi }}?</td>
                                               <td>{{ $item->jawaban }}?</td>
                                           </tr>
                                       @endforeach
                                   </tbody>
                                </table>
                            </section>
                         @endif
                     </section>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>