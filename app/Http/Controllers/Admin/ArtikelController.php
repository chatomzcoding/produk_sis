<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu   = 'artikel';
        $artikel = DB::table('artikel')
                    ->join('kategori','artikel.kategori_id','=','kategori.id')
                    ->select('artikel.*','kategori.nama')
                    ->orderBy('artikel.id','DESC')
                    ->get();
        $main   = [
            'link' => 'artikel',
            'kategori' => Kategori::where('label','artikel')->get()
        ];
        return view('admin.artikel.index', compact('menu','main','artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = 'artikel';
        $kategori = Kategori::where('label','artikel')->get();
        return view('admin.artikel.create', compact('menu','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->gambar)) {
            $request->validate([
                'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:5000',
            ]);
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
            $gambar = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'public/img/admin/artikel';
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$gambar);
        } else {
            $gambar  = NULL;
        }

        Artikel::create([
            'judul'  => $request->judul,
            'slug'  => Str::slug($request->judul),
            'isi'  => $request->isi,
            'kategori_id'  => $request->kategori_id,
            'view'  => 0,
            'user_id'  => Auth::user()->id,
            'gambar' => $gambar,
        ]);
        
        return redirect('artikel')->with('ds','Artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($artikel)
    {
        $artikel = Artikel::find(Crypt::decryptString($artikel));
        $menu = 'artikel';
        $kategori = Kategori::where('label','artikel')->get();
        return view('admin.artikel.edit', compact('menu','kategori','artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        if (isset($request->gambar)) {
            $request->validate([
                'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:5000',
            ]);
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('gambar');
            
            $gambar = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'public/img/admin/artikel';
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$gambar);
            deletefile($tujuan_upload.'/'.$artikel->gambar);
        } else {
            $gambar  = $artikel->gambar;
        }
        Artikel::where('id',$artikel->id)->update([
            'judul'  => $request->judul,
            'slug'  => Str::slug($request->judul),
            'isi'  => $request->isi,
            'kategori_id'  => $request->kategori_id,
            'gambar' => $gambar,
        ]);
        
        return redirect('artikel')->with('du','Artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
