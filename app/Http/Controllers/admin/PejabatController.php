<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pejabat;

class PejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pejabat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Pejabat();
        return view('admin.pejabat.form', [
            'model' => $model,
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
       //validasi
       $this->validate($request, [
        'nama' => 'required',
        'jabatan' => 'required',
        'ketjabatan' => 'required',
        'nip' => 'required',
        
    ]);

    $model = Pejabat::create($request->all());
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
        $model = Pejabat::findOrFail($id);
        return view('admin.pejabat.form', compact('model'));
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
         //validasi
         $this->validate($request, [
            'nama' => 'required',
            'jabatan' => 'required',
            'ketjabatan' => 'required',
            'nip' => 'required',
        ]);

        $model = Pejabat::findOrFail($id);

        $model->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Pejabat::findOrFail($id);
        $model->delete();
    }
}
