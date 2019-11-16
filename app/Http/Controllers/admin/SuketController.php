<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Suket;
use App\Layanan;
use App\Pejabat;
use Fpdf;
use PDF;
use App\Prosessurat;
use Carbon\Carbon;
use QRCode;

class SuketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.suket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $suket = Suket::orderBY('created_at', 'DESC')->get();
        return view('admin.suket.create', [
            'title' => 'Ajukan Surat Keterangan',
            'suket' => $suket,
            'layanan' => Layanan::orderBy('layanan', 'ASC')->get(),
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
            'nik' => 'required|numeric|max:9999999999999999',
            'tempat' => 'required',
            'tgllhr' => 'required',
            'jk' => 'required|min:4',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'keterangan' => 'required|min:10',
            'keperluan' => 'required|min:10',
            'kontak' => 'required|numeric|max:999999999999',
            'layanan_id' => 'required',
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

        Suket::create([

            'nama' => $request->nama,
            'nik' => $request->nik,
            'tempat' => $request->tempat,
            'tgllhr' => $request->tgllhr,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'keterangan' => $request->keterangan,
            'keperluan' => $request->keperluan,
            'kontak' => $request->kontak,
            'layanan_id' => $request->layanan_id,
            'fotoktp' => $fotoktp,
            'fotopbb' => $fotopbb,

        ]);

        return redirect()->route('admin.suket.index')->withSuccess('Permohonan Surat Keterangan Berhasil Di Kirim');
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
