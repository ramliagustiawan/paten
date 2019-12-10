<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;
use Illuminate\Support\Facades\Storage;
use App\Rules\Captcha;

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
        // $iumk = Report::orderBY('created_at', DESC)->get();
        // return view('front.lapor.create', [
        //     'title' => 'Pelaporan',
        //     'report' => $iumk
        // ]);
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
        $ruls = [
            'name' => 'required',
            'alamat' => 'required|min:10',
            'kontak' => 'required|numeric|digits_between:10,13',
            'pesan' => 'required|min:10',
            'g-recaptcha-response' => new Captcha(),


        ];
        $message = [
            'required' => ':attribute Harus Di Isi',
            'name.required' => 'Nama Harus Di Isi',
            'numeric' => 'Masukkan Angka',
            'kontak.digits_between'=>'No HP terdiri dari 10 sd 12 Digits',
        ];

        $request->validate($ruls,$message);

        Report::create([
            'name' => $request->name,
            'alamat' =>  $request->alamat,
            'kontak' =>  $request->kontak,
            'pesan' =>  $request->pesan,

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
