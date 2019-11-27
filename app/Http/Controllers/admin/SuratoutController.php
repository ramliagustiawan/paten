<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Suratout;
use App\Pejabat;
use App\Arsip;

class SuratoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pejabat = Pejabat::get();
        return view('admin.suratout.index', [
            'title' => 'Surat Keluar',
            'pejabat' => $pejabat,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suratout = Suratout::orderBY('created_at', 'DESC')->get();
        $pejabat = Pejabat::get();
        return view('admin.suratout.create', [
            'title' => 'Register Surat Keluar',
            'suratout' => $suratout,
            'pejabat' => $pejabat,
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

            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'perihal' => 'required',
            'isisingkat' => 'required',
            'tujuansurat' => 'required',
            'pengirim' => 'required',
            'fotosurat' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',


        ]);

        // CEK GAMBAR
        $fotosurat = null;


        if ($request->hasFile('fotosurat')) {
            $fotosurat = $request->file('fotosurat')->store('assets/covers');
        }


        Suratout::create([

            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'perihal' => $request->perihal,
            'isisingkat' => $request->isisingkat,
            'tujuansurat' => $request->tujuansurat,
            'pengirim' => $request->pengirim,
            'fotosurat' => $fotosurat,

        ]);

        return redirect()->route('admin.suratout.index')->withSuccess('Registrasi Surat Keluar Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suratout = Suratout::find($id);
        $pejabat = Pejabat::get();
        // dd($suratout);
        return view('admin.suratout.show', [
            'title' => 'Detail Surat Keluar',
            'suratout' => $suratout,
            'pejabat' => $pejabat,
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
        $suratout = Suratout::findOrFail($id);
        $pejabat = Pejabat::get();
        // dd($suratout);
        return view('admin.suratout.edit', [
            'title' => 'Proses Surat Keluar',
            'suratout' => $suratout,
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

        $suratout = Suratout::find($id);

        // VALIDASI
        $this->validate($request, [

            // 'nosurat' => 'required',
            // 'tglsurat' => 'required|date',
            // 'perihal' => 'required',
            // 'isisingkat' => 'required',
            // 'tujuansurat' => 'required',
            // 'pengirim' => 'required',
            // 'fotosurat' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',


        ]);

        // CEK GAMBAR
        $fotosurat = null;


        if ($request->hasFile('fotosurat')) {
            $fotosurat = $request->file('fotosurat')->store('assets/covers');
        }


        $suratout->update([

            'tglkirim' => $request->tglkirim,
            'petugas' => $request->petugas,
            'penerima' => $request->penerima,
            'ket' => $request->ket,
            // 'tujuansurat' => $request->tujuansurat,
            // 'pengirim' => $request->pengirim,
            // 'fotosurat' => $fotosurat,

        ]);

        return redirect()->route('admin.suratout.index', $suratout)->withInfo('Surat Keluar Tujuan ' . $suratout->tujuansurat . ' Telah Ditindaklanjuti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Suratout::findOrFail($id);
        // dd($model);
        $model->delete();
        return redirect()->route('admin.suratout.index')
            ->with('danger', 'Surat Keluar Dihapus');
    }
}
