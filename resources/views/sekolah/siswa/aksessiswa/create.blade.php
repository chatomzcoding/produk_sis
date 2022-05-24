<x-admin-layout title="Data Pegawai" menu="pegawai">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Tambah Akses</li>
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
                       
                  </div>
                  <div class="card-body">
                        <form action="{{ url('user') }}" method="post">
                            @csrf
                            <input type="hidden" name="s" value="siswa">
                            <input type="hidden" name="level" value="siswa">
                            <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                            <div class="form-group row">
                                <label for="" class="col-md-4">Nama User</label>
                                <input type="text" name="name" class="form-control col-md-8" value="{{ $siswa->nama_siswa }}" readonly>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">E-mail</label>
                                <input type="email" name="email" class="form-control col-md-8" value="{{ $siswa->email }}" required>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Password</label>
                                <input type="password" name="password" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4">Ulangi Password</label>
                                <input type="password" name="password_confirmation" class="form-control col-md-8" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> SIMPAN AKSES</button>
                            </div>
                        </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>