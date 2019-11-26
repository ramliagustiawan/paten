<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Suratmasuk;
use App\Pejabat;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pejabat = Pejabat::get();
        return view('admin.suratin.index', [
            'title' => 'Surat Masuk',
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
        $suratin = Suratmasuk::orderBY('created_at', 'DESC')->get();
        $pejabat = Pejabat::get();
        return view('admin.suratin.create', [
            'title' => 'Register Surat Masuk',
            'suratin' => $suratin,
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

            'asalsurat' => 'required',
            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'tglterima' => 'required|date',
            'ket' => 'required',
            'perihal' => 'required',
            'fotosurat' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',


        ]);

        // CEK GAMBAR
        $fotosurat = null;
       

        if ($request->hasFile('fotosurat')) {
            $fotosurat = $request->file('fotosurat')->store('assets/covers');
        }


        Suratmasuk::create([

            'asalsurat' => $request->asalsurat,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'tglterima' => $request->tglterima,
            'ket' => $request->ket,
            'perihal' => $request->perihal,
            'fotosurat' => $fotosurat,
           
        ]);

        return redirect()->route('admin.suratin.index')->withSuccess('Registrasi Surat Masuk Berhasil');
    
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
        $suratmasuk = Suratmasuk::findOrFail($id);
        $pejabat = Pejabat::get();
        // dd($suratmasuk);
        return view('admin.suratin.edit', [
            'title' => 'Proses Surat Masuk',
            'suratmasuk' => $suratmasuk,
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
          $suratmasuk = Suratmasuk::find($id);

          // VALIDASI
          $this->validate($request, [

            // 'asalsurat' => 'required',
            // 'nosurat' => 'required',
            // 'tglsurat' => 'required|date',
            // 'tglterima' => 'required|date',
            // 'ket' => 'required',
            // 'perihal' => 'required',
            // 'fotosurat' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',

            'disposisicamat'=>'required',
            'disposisisek'=>'required',
            'pejabat_id'=>'required',
            'tindaklanjut'=>'required',
            'hasil'=>'required'


        ]);

        // CEK GAMBAR
        $fotosurat = null;
       

        if ($request->hasFile('fotosurat')) {
            $fotosurat = $request->file('fotosurat')->store('assets/covers');
        }


        $suratmasuk->update([

            'asalsurat' => $request->asalsurat,
            'nosurat' => $request->nosurat,
            // 'tglsurat' => $request->tglsurat,
            // 'tglterima' => $request->tglterima,
            // 'ket' => $request->ket,
            // 'perihal' => $request->perihal,
            // 'fotosurat' => $fotosurat,
            'disposisicamat' => $request->disposisicamat,
            'disposisisek' => $request->disposisisek,
            'pejabat_id' => $request->pejabat_id,
            'tindaklanjut' => $request->tindaklanjut,
            'hasil' => $request->hasil,
           
        ]);

        return redirect()->route('admin.suratin.index', $suratmasuk)->withInfo('Proses Surat Masuk Dari ' . $suratmasuk->asalsurat . ' Telah Ditindaklanjuti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Suratmasuk::findOrFail($id);
        // dd($model);
        $model->delete();
        return redirect()->route('admin.suratin.index')
            ->with('danger', 'Surat Masuk Dihapus');
    }
}
