<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Arsip;
use App\Suratmasuk;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arsip = Arsip::get();
        // dd($arsip);
        return view('admin.arsip.index', [
            'title' => 'Arsip Surat',
            'arsip' => $arsip,
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
        $arsip = Arsip::find($id);
        $suratmasuk = Suratmasuk::find($id);
        // dd($arsip);
        return view('admin.arsip.edit', [
            'title' => 'Arsip Surat',
            'arsip' => $arsip,
            'suratmasuk'=>$suratmasuk
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
        $arsip = Arsip::find($id);
        // dd($arsip);
        // VALIDASI
        $this->validate($request, [

            // 'proses' => 'required',
            // 'ket' => 'required',
            // 'proses_id' => 'required',
            // 'nama' => 'required',
            // 'tglajuan' => 'required|min:4',
            // 'syarat' => 'required',
            // 'proses' => 'required',
            // 'finish_at' => 'required',

        ]);

        $arsip->update([

            'tglarsip' => $request->tglarsip,
            'ket' => $request->ket,

        ]);

        return redirect()->route('admin.arsip.index', $arsip)->withInfo('Arsip Surat dari : ' . $arsip->asalsurat . ' Di Arsipkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arsip $arsip)
    {
        $arsip->delete();
        return redirect()->route('admin.arsip.index')
            ->with('danger', 'Arsip Surat Dihapus');
    }
}
