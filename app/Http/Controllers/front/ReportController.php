<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.lapor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iumk = Report::orderBY('created_at', DESC)->get();
        return view('front.lapor.create', [
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
            'alamat' => 'required|min:10',
            'kontak' => 'required|numeric',
            'naper' => 'required',
            'bentuk' => 'required',
            'npwp' => 'required|numeric',
            'giatusaha' => 'required',
            'statusbangunan' => 'required',
            'alamatusaha' => 'required|min:10',
            'modal' => 'required|numeric',
            'fotoktp' => 'file|image',
            'fotosku' => 'file|image',
            'fotopbb' => 'file|image',
            'fotodiri' => 'file|image',

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

        Report::create([

            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'naper' => $request->naper,
            'bentuk' => $request->bentuk,
            'npwp' => $request->npwp,
            'giatusaha' => $request->giatusaha,
            'statusbangunan' => $request->statusbangunan,
            'alamatusaha' => $request->alamatusaha,
            'modal' => $request->modal,
            'fotoktp' => $request->fotoktp,
            'fotosku' => $request->fotosku,
            'fotopbb' => $request->fotopbb,
            'fotodiri' => $request->fotodiri,

        ]);

        return redirect()->route('report.index')->withSuccess('Laporan Berhasil Di Kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
