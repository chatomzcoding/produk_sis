<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = [];
        $pegawai = Pegawai::all();
        $statistik = [
            'total' => count($pegawai),
            'pengajar' => count($pegawai),
            'honorer' => count($pegawai),
            'pendukung' => count($pegawai)
        ];

        return view('sekolah.pegawai.index', compact('main','pegawai','statistik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.pegawai.create');
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
            $tujuan_upload = 'public/img/guru';
            // isi dengan nama folder tempat kemana file diupload
            $file->move($tujuan_upload,$poto);
        } else {
            $poto   = NULL;
        }
    
        // simpan client
        Pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'jabatan' => $request->jabatan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'nip' => $request->nip,
            'nuptk' => $request->nuptk,
            'status' => 'aktif',
            'poto' => $poto,
        ]);

        return redirect('pegawai')->with('ds','Pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        $tujuan_upload = 'public/img/guru';
        deletefile($tujuan_upload.'/'.$pegawai->poto);
        $pegawai->delete();

        return back()->with('dd','Pegawai');
    }
}
