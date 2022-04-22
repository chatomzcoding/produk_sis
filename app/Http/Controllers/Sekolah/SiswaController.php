<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu   = 'siswa';
        $siswa  = Siswa::all();
        $main   = [
            'link' => 'siswa',
            'statistik' => [
                'siswa' => [
                    'total' => count($siswa),
                    'l' => Siswa::where('jk','laki-laki')->count(),
                    'p' => Siswa::where('jk','perempuan')->count(),
                    'aktif' => Siswa::where('status','aktif')->count()
                ]
            ]
        ];

        return view('sekolah.siswa.index', compact('menu','main','siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request->poto)) {
            $request->validate([
                'poto' => 'required|file|image|mimes:jpeg,png,jpg|max:2000',
            ]);
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('poto');
            
            $poto = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'public/img/siswa';
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$poto);
        } else {
            $poto   = NULL;
        }
    
        // simpan client
        Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'nisn' => $request->nisn,
            'nipd' => $request->nipd,
            'tahun_masuk' => $request->tahun_masuk,
            'status' => 'aktif',
            'poto' => $poto,
        ]);

        return redirect('siswa')->with('ds','Client');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
