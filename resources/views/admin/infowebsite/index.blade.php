<x-admin-layout title="Data Pokok" menu="datapokok">
    <x-slot name="header">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Info Website</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Beranda</a></li>
                <li class="breadcrumb-item active">Data Info</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </x-slot>
    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                     <section>
                         <form action="{{ url('/info-website/'.$info->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <input type="hidden" name="id" value="{{ $info->id}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Nama Sekolahh</label>
                                        <input type="text" name="nama_sekolah" value="{{ $info->nama_sekolah}}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Alamat</label>
                                        <input type="text" name="alamat" value="{{ $info->alamat}}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Tentang Sekolah</label>
                                        <textarea name="tentang" id="" class="form-control col-md-8" cols="30" rows="4">{{ $info->tentang}}</textarea>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Alamat di Google Maps</label>
                                        <textarea name="maps" id="" class="form-control col-md-8" cols="30" rows="4">{{ $info->maps}}</textarea>
                                    </div>
                                    @php
                                        $kontak = json_decode($info->kontak)
                                    @endphp
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Alamat Email</label>
                                        <input type="email" name="email" value="{{ $kontak->email}}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">No Telp</label>
                                        <input type="text" name="telp" value="{{ $kontak->telp}}" class="form-control col-md-8" required>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Kode Pos</label>
                                        <input type="text" name="kode_pos" value="{{ $kontak->kode_pos}}" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">No Whatsapp</label>
                                        <input type="text" name="wa" value="{{ $kontak->wa}}" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Website</label>
                                        <input type="text" name="website" value="{{ $kontak->website}}" class="form-control col-md-8">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-md-4 p-2">
                                            <img src="{{ asset('/img/admin/info/'.$info->logo_mini)}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <label for="" >Logo Mini</label>
                                            <input type="file" name="logo_mini" class="form-control">
                                            <i>unggah jika ingin merubah</i>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4 p-2">
                                            <img src="{{ asset('/img/admin/info/'.$info->logo)}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            <label for="" >Logo Utama</label>
                                            <input type="file" name="logo" class="form-control">
                                            <i>unggah jika ingin merubah</i>
                                        </div>
                                    </div>
                                    @php
                                        $sosial = json_decode($info->sosial_media)
                                    @endphp
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Link Facebook</label>
                                        <input type="url" name="fb" value="{{ $sosial->fb}}" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Link Twitter</label>
                                        <input type="url" name="tw" value="{{ $sosial->tw}}" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Link Youtube</label>
                                        <input type="url" name="yt" value="{{ $sosial->yt}}" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Link Instagram</label>
                                        <input type="url" name="ig" value="{{ $sosial->ig}}" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Link Pinterest</label>
                                        <input type="url" name="pt" value="{{ $sosial->pt}}" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 p-2">Link Linkedin</label>
                                        <input type="url" name="lk" value="{{ $sosial->lk}}" class="form-control col-md-8">
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-pen"></i> SIMPAN PERUBAHA</button>
                                    </div>
                                </div>
                            </div>
                         </form>
                     </section>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>