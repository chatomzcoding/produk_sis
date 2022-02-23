@extends('layouts.admin')
@section('title')
    SEKOLAH - Artikel
@endsection

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Data Artikel - Edit Artikel</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ url('artikel')}}">Daftar Artikel</a></li>
            <li class="breadcrumb-item active">Edit Artikel</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    
@endsection

@section('content')
    
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <a href="{{ url('/artikel')}}" class="btn btn-outline-secondary btn-flat btn-sm pop-info" title="kembali ke daftar artikel"><i class="fas fa-angle-left"></i> Kembali</a>
                
              </div>
              <div class="card-body">
                  @include('sistem.notifikasi')
                  <section>
                        <form action="{{ url('/artikel/'.$artikel->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Judul Artikel <span class="text-danger">*</span></label>
                                <input type="text" name="judul" id="judul" class="form-control col-md-8" value="{{ $artikel->judul}}" required>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Kategori Artikel <span class="text-danger">*</span></label>
                                <select name="kategori_id" id="kategori_id" class="form-control col-md-8" required>
                                    <option value="">-- Pilih Kategori Artikel --</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id}}" @if ($artikel->kategori_id == $item->id)
                                            selected
                                        @endif>{{ strtoupper($item->nama)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 p-2">Gambar Artikel (opsional)</label>
                                <div class="col-md-8 p-0">
                                    <input type="file" name="gambar" id="gambar" class="form-control">
                                    @if (!is_null($artikel->gambar))
                                        <img src="{{ asset('img/admin/artikel/'.$artikel->gambar) }}" alt="" width="300px">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">isi artikel</label>
                                <textarea name="isi" id="isi" cols="30" rows="10" required>{{ $artikel->isi }}</textarea>
                            </div>
                            <script>
                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                // instance, using default configuration.
                                CKEDITOR.replace('isi', {
                                width: '100%',
                                height: 300
                                });
                            </script>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>SIMPAN PERUBAHAN</button>
                            </div>
                        </form>
                  </section>
              </div>
            </div>
          </div>
        </div>
    </div>
    @endsection

