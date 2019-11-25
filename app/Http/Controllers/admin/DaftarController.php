<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Prosessurat;
use App\Layanan;
use App\Pejabat;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.daftar.index', [
            'title' => 'Permohonan Layanan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $model = new Service();
        $layanan = Layanan::pluck('layanan', 'id');
        return view('admin.daftar.form', [
            'title' => 'Ajukan Layanan',
            'model' => $model,
            'layanan' => $layanan
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
            'tgllhr' => 'required|date',
            'jk' => 'required|min:4',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'keterangan' => 'required|min:10',
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

        $model = Service::create([

            'nama' => $request->nama,
            'nik' => $request->nik,
            'tempat' => $request->tempat,
            'tgllhr' => $request->tgllhr,
            'jk' => $request->jk,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'keterangan' => $request->keterangan,
            'kontak' => $request->kontak,
            'layanan_id' => $request->layanan_id,
            'fotoktp' => $fotoktp,
            'fotopbb' => $fotopbb,

        ]);

        return $model;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Service::findOrFail($id);
        return view('admin.daftar.show', [
            'title' => 'Detail Layanan',
            'model' => $model,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $model = Service::findOrFail($id);
        $layanan = Layanan::pluck('layanan', 'id');
        $pejabat = Pejabat::pluck('nama', 'id');

        // dd($pejabat);

        return view('admin.daftar.formedit', [
            'title' => 'Edit Permohonan Layanan',
            'model' => $model,
            'layanan' => $layanan,
            'pejabat' => $pejabat,
        ]);
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
        // VALIDASI
        $this->validate($request, [

            // 'nama' => 'required',
            // // 'nik' => 'required|numeric|max:9999999999999999',
            // // 'tempat' => 'required',
            // // 'tgllhr' => 'required|date',
            // // 'jk' => 'required|min:4',
            // // 'pekerjaan' => 'required',
            // // 'alamat' => 'required',
            // 'kelurahan' => 'required',
            // 'keterangan' => 'required|min:10',
            // 'kontak' => 'required|numeric|max:999999999999',
            // 'layanan_id' => 'required',
            // 'fotoktp' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            // 'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',


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

        $model = Service::findOrFail($id);

        $model->update([

            // 'nama' => $request->nama,
            // 'nik' => $request->nik,
            // 'tempat' => $request->tempat,
            // 'tgllhr' => $request->tgllhr,
            // 'jk' => $request->jk,
            // 'pekerjaan' => $request->pekerjaan,
            // 'alamat' => $request->alamat,
            // 'kelurahan' => $request->kelurahan,
            // 'keterangan' => $request->keterangan,
            // 'kontak' => $request->kontak,
            // 'layanan_id' => $request->layanan_id,
            // 'fotoktp' => $fotoktp,
            // 'fotopbb' => $fotopbb,
            'syarat' => $request->syarat,
            'proses' => $request->proses,
            // 'ketproses' => $request->ketproses,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'pejabat_id' => $request->pejabat_id,
            // 'hasil' => $request->hasil,

        ]);

        return $model;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Service::findOrFail($id);
        $model->delete();
    }

    public function proses($id)
    {
        $daftar = Service::findOrFail($id);
        // dd($daftar);

        $daftar->update([
            'hasil' => Carbon::now(),
        ]);


        Prosessurat::create([

            'proses_id' => $daftar->layanan_id,
            'nama' => $daftar->nama,
            'finish_at' => $daftar->layanan->layanan,
            'proses' => $daftar->proses,
            'syarat' => $daftar->syarat,
            'tglajuan' => $daftar->created_at,

        ]);

        return redirect()->route('admin.proses.index')->withSuccess('Proses Surat: ' . $daftar->nama);
    }
}
