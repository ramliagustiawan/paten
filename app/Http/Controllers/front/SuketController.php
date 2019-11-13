<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;

class SuketController extends Controller
{
    public function index()
    {
        return view('front.suket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iumk = Service::orderBY('created_at', DESC)->get();
        return view('front.suket.create', [
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

            'nama' => 'required',
            'nik' => 'required|numeric',
            'ttl' => 'required',
            'jk' => 'required|min:4',
            'agama' => 'required',
            'kerja' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'ket' => 'required|min:10',
            'keperluan' => 'required|min:10',
            'kontak' => 'required|numeric',
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
            $fotopbb = $request->file('fotopbb')->store('assets/covers');
        }

        Service::create([

            'nama' => $request->nama,
            'nik' => $request->nik,
            'ttl' => $request->ttl,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'kerja' => $request->kerja,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'ket' => $request->ket,
            'keperluan' => $request->keperluan,
            'kontak' => $request->kontak,
            'layanan' => $request->layanan,
            'fotoktp' => $fotoktp,
            'fotopbb' => $fotopbb,

        ]);

        return redirect()->route('suket.index')->withSuccess('Permohonan Surat Keterangan Berhasil Di Kirim');
    }
}
