<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Suket;
use App\Rules\Captcha;

class SuketController extends Controller
{
    public function index()
    {
        return view('front.suket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suket = Suket::orderBY('created_at', 'DESC')->get();
        return view('front.suket.create', [
            'title' => 'Pelaporan',
            'report' => $suket
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
        $ruls = [

            'nama' => 'required',
            'nik' => 'required|numeric|digits_between:16,17',
            'tempat' => 'required',
            'tgllhr' => 'required',
            'jk' => 'required|min:4',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'keterangan' => 'required|min:10',
            'keperluan' => 'required|min:10',
            'kontak' => 'required|numeric|digits_between:10,13',
            'layanan_id' => 'required',
            'fotoktp' => 'file|image|max:2048',
            'fotopbb' => 'file|image|max:2048',
            'g-recaptcha-response' => new Captcha(),


        ];

        $message = [
            'required' => ':attribute Harus Di Isi',
            'numeric' => 'Masukkan Angka',
            'nik.required' => 'Masukkan Nik Anda | 16 Digit',
            'kontak.required'=> 'Masukkan Nomor Hp Anda | 10 - 12 Digit',
            'tgllhr.required'=>'Masukkan Tanggal,Bulan,Tahun Lahir',
            'tempat.required'=>'Tempat Lahir Harus Di Isi',
            'nik.digits_between'=>'NIK harus 16 Digits',
            'kontak.digits_between'=>'No HP terdiri dari 10 sd 12 Digits',
            'max' => 'Mohon Maaf .. Besar File Yang Di Upload maximal 2 Mb',
            'image' => 'Mohon Maaf .. File Yang Diupload Hanya Dalam Bentuk Jpg,Png,Jpeg,SVG',
        ];

        $request->validate($ruls,$message);

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

        return redirect()->route('ajukan.index')->withSuccess('Permohonan Surat Keterangan Berhasil Di Kirim');
    }
}
