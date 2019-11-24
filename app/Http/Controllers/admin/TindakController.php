<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;


class TindakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tindak.index', [
            'title' => 'Tindak Lanjut Laporan'
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
        $tindak = Report::find($id);
        // dd($tindak);
        return view('admin.tindak.edit', [
            'title' => 'Edit tindak Surat',
            'tindak' => $tindak,
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
        $tindak = Report::find($id);
        // dd($tindak);

        // VALIDASI
        $this->validate($request, [

            'tindakan' => 'required',
            'aparat' => 'required',
            'ket' => 'required',
        ]);


        $tindak->update([

            'tindakan' => $request->tindakan,
            'aparat' => $request->aparat,
            'ket' => $request->ket,

        ]);

        return redirect()->route('admin.tindak.index', $tindak)->withInfo('Pelaporan / Aduan ' . $tindak->nama . ' Telah Ditindaklanjuti');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Report::findOrFail($id);
        // dd($model);
        $model->delete();
        return redirect()->route('admin.tindak.index')
            ->with('danger', 'Pelaporan Dihapus');
    }
}
