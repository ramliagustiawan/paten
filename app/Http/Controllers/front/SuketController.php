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

            'nama' => 'required',
            'nik' => 'required|numeric',
            'alamat' => 'required|min:3',
            'kelurahan' => 'required',
            'kontak' => 'required|numeric',
            'naper' => 'required',
            'bentuk' => 'required',
            'npwp' => 'required',
            'giatusaha' => 'required',
            'statusbangunan' => 'required',
            'alamatusaha' => 'required|min:10',
            'modal' => 'required',
            'layanan' => 'required',
            'fotoktp' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotosku' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotodiri' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',

        ]);

        // CEK GAMBAR
        $fotoktp = null;
        $fotosku = null;
        $fotopbb = null;
        $fotodiri = null;

        if ($request->hasFile('fotoktp')) {
            $fotoktp = $request->file('fotoktp')->store('assets/covers');
        }

        if ($request->hasFile('fotosku')) {
            $fotoktp = $request->file('fotosku')->store('assets/covers');
        }

        if ($request->hasFile('fotopbb')) {
            $fotoktp = $request->file('fotopbb')->store('assets/covers');
        }

        if ($request->hasFile('fotodiri')) {
            $fotoktp = $request->file('fotodiri')->store('assets/covers');
        }

        Service::create([

            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kontak' => $request->kontak,
            'naper' => $request->naper,
            'bentuk' => $request->bentuk,
            'npwp' => $request->npwp,
            'giatusaha' => $request->giatusaha,
            'statusbangunan' => $request->statusbangunan,
            'alamatusaha' => $request->alamatusaha,
            'modal' => $request->modal,
            'layanan' => $request->layanan,
            'fotoktp' => $request->fotoktp,
            'fotosku' => $request->fotosku,
            'fotopbb' => $request->fotopbb,
            'fotodiri' => $request->fotodiri,

        ]);

        return redirect()->route('suket.index')->withSuccess('Permohonan Surat Keterangan Berhasil Di Kirim');
    }
}
