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
                                    <div class="col-md-8 p-0">
                                        <table class="w-100">
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="pilihan[]" placeholder="pilihan A" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="pilihan[]" placeholder="pilihan C" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="pilihan[]" placeholder="pilihan B" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" name="pilihan[]" placeholder="pilihan D" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4">Jawaban</label>
                                    <select name="jawaban" id="" class="form-control col-md-8">
                                        <option value="0">A</option>
                                        <option value="1">B</option>
                                        <option value="2">C</option>
                                        <option value="3">D</option>
                                    </select>
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