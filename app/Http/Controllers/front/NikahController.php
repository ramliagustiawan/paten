<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class NikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.nikah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iumk = Service::orderBY('created_at', DESC)->get();
        return view('front.iumk.create', [
            'title' => 'Pelaporan',
            'report' => $iumk
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // VALIDASI
        $this->validate($request, [

            'nokua' => 'required',
            'nama' => 'required|min:3',
            'ttl' => 'required',
            'jk' => 'required',
            'negara' => 'required',
            'kerja' => 'required',
            'agama' => 'required',
            'statusnikah' => 'required',
            'bin' => 'required',
            'alamat' => 'required',
            'istri' => 'required',
            'ttlistri' => 'required',
            'jkistri' => 'required',
            'negaraistri' => 'required',
            'kerjaistri' => 'required',
            'agamaistri' => 'required',
            'statusistri' => 'required',
            'binti' => 'required',
            'alamatistri' => 'required',
            'kontak' => 'required|numeric',
            'nik' => 'required|numeric',
            'layanan' => 'required',
            'fotoktp' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',          
            'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
           

        ]);

        // CEK GAMBAR
        $fotoktp = null;       
        $fotopbb = null;
       

        if ($request->hasFile('fotoktp')) {
            $fotoktp = $request->file('fotoktp')->store('assets/covers');
        }

        if ($request->hasFile('fotopbb')) {
            $fotoktp = $request->file('fotopbb')->store('assets/covers');
        }

        

        Service::create([

            'nokua' => $request->nokua,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'negara' => $request->negara,
            'kerja' => $request->kerja,
            'agama' => $request->agama,
            'statusnikah' => $request->statusnikah,
            'bin' => $request->bin,
            'alamat' => $request->alamat,
            'istri' => $request->istri,
            'ttlistri' => $request->ttlistri,
            'jkistri' => $request->jkistri,
            'negaraistri' => $request->negaraistri,
            'kerjaistri' => $request->kerjaistri,
            'agamaistri' => $request->agamaistri,
            'statusistri' => $request->statusistri,
            'binti' => $request->binti,
            'alamatistri' => $request->alamatistri,
            'kontak' => $request->kontak,
            'nik' => $request->nik,
            'layanan' => $request->layanan,
            'fotoktp' => $request->fotoktp,         
            'fotopbb' => $request->fotopbb,
        ]);

        return redirect()->route('nikah.index')->withSuccess('Permohonan Dispensasi Nikah Berhasil Di Kirim');
    }
}
