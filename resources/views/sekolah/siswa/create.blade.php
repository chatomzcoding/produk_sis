<x-admin-layout title="Data Siswa" menu="siswa">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Daftar Siswa</li>
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
                        <a href="{{ url('siswa') }}" class="btn btn-outline-secondary btn-sm pop-info" title="Kembali ke daftar siswa"><i class="fas fa-angle-left"></i> Kembali</a>
                  </div>
                  <div class="card-body">
                      <form action="{{ url('siswa') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section class="p-3">
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Nomor Identitas Siswa</label>
                                <div class="col-md-4 p-0">
                                    <input type="text" name="nisn" id="nisn" maxlength="10" value="{{ old('nisn') }}" placeholder="NISN" class="form-control" required>
                                </div>
                                <div class="col-md-4 p-0">
                                    <input type="text" name="nipd" id="nipd" maxlength="10" value="{{ old('nipd') }}"  placeholder="NIPD" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Nama Siswa {!! ireq() !!}</label>
                                <div class="col-md-8 p-0">
                                    <input type="text" name="nama_siswa" id="nama_siswa" value="{{ old('nama_siswa') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Tempat Tanggal Lahir {!! ireq() !!}</label>
                                <div class="col-md-6 p-0">
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="tempat kelahiran" class="form-control" required>
                                </div>
                                <div class="col-md-2 p-0">
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Alamat Siswa {!! ireq() !!}</label>
                                <div class="col-md-8 p-0">
                                    <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Tahun Masuk</label>
                                <div class="col-md-8 p-0">
                                    <select name="tahun_masuk" id="" class="form-control" required>
                                        @for ($i = ambil_tahun(); $i >= 2010; $i--)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Nama Orang Tua</label>
                                <div class="col-md-4 p-0">
                                    <input type="text" name="nama_ayah" id="nama_ayah" value="{{ old('nama_ayah') }}" placeholder="nama ayah" class="form-control">
                                </div>
                                <div class="col-md-4 p-0">
                                    <input type="text" name="nama_ibu" id="nama_ibu" value="{{ old('nama_ibu') }}" placeholder="nama ibu" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">No Telp</label>
                                <div class="col-md-8 p-0">
                                    <input type="text" name="no_telp" id="no_telp" value="{{ old('no_telp') }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Email</label>
                                <div class="col-md-8 p-0">
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Jenis Kelamin {!! ireq() !!}</label>
                                <div class="col-md-8 p-0">
                                    <select name="jk" id="jk" class="form-control" required>
                                        <option value="">-- jenis kelamin --</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Agama {!! ireq() !!}</label>
                                <div class="col-md-8 p-0">
                                    <select name="agama" id="agama" class="form-control" required>
                                        <option value="">-- pilih agama --</option>
                                        @foreach (list_agama() as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Photo {!! ireq() !!}</label>
                                <div class="col-md-8 p-0">
                                    <input type="file" name="poto" id="poto" value="{{ old('poto') }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
                            </div>
                        </section>
                      </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>