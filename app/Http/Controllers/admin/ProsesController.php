<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Iumk;
use App\Prosessurat;

class ProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proses = Prosessurat::get();
        // dd($proses);
        return view('admin.proses.index', [
            'title' => 'Status Layanan',
            'proses' => $proses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proses = Prosessurat::find($id);
        // $iumk = Iumk::find($id);
        // dd($proses);
        return view('admin.proses.show', [
            'title' => 'Detail Proses Layanan',
            'daftar' => $proses,
            // 'iumk' => $iumk,
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
        $proses = Prosessurat::find($id);
        // dd($proses);
        return view('admin.proses.edit', [
            'title' => 'Edit proses Surat',
            'proses' => $proses,
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

        $proses = Prosessurat::find($id);
        // dd($proses);
        // VALIDASI
        $this->validate($request, [

            'proses' => 'required',
            'ket' => 'required',
            // 'proses_id' => 'required',
            // 'nama' => 'required',
            // 'tglajuan' => 'required|min:4',
            // 'syarat' => 'required',
            // 'proses' => 'required',
            // 'finish_at' => 'required',

        ]);


        $proses->update([

            'proses' => $request->proses,
            'ket' => $request->ket,

        ]);

        return redirect()->route('admin.proses.index', $proses)->withInfo('Permohonan Surat Keterangan ' . $proses->nama . ' Selesai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prosessurat $prosessurat)
    {
        $prosessurat->delete();
        return redirect()->route('admin.proses.index')
            ->with('danger', 'Permohonan Surat Keterangan Dihapus');
    }
}
