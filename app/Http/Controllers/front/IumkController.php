<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Service;
use App\Iumk;
use App\Rules\Captcha;

class IumkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.iumk.index');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'g-recaptcha-response' => new Captcha(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iumk = Iumk::orderBY('created_at', 'DESC')->get();
        return view('front.iumk.create', [
            'title' => 'Ajukan IUMK',
            'iumk' => $iumk,

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
            'nik' => 'required|numeric|digits_between:16,17',
            'alamat' => 'required|min:3',
            'kelurahan' => 'required',
            'kontak' => 'required|numeric|digits_between:10,13',
            'naper' => 'required',
            'bentuk' => 'required',
            'npwp' => 'required',
            'giatusaha' => 'required',
            'statusbangunan' => 'required',
            'alamatusaha' => 'required|min:10',
            'modal' => 'required',
            'layanan_id' => 'required',
            'fotoktp' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotosku' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotodiri' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'g-recaptcha-response' => new Captcha(),


        ],
        [
            'nama.required' => 'Silahkan Masukkan Nama Lengkap Anda',
            'nik.required' => 'Silahkan Masukkan NIK Anda | 16 Digit',
            'alamat.required' => 'Silahkan Masukkan Alamat Anda',
            'kelurahan.required' => 'Pilih Kelurahan',
            'kontak.required' => 'Masukkan Nomor HP Anda | 10 sd 12 Digit',
            'naper.required' => 'Silahkan Masukkan Nama Usaha',
            'bentuk.required' => 'Pilih Bentuk Usaha',
            'npwp.required' => 'Silahkan Masukkan NPWP atau - (Bila Tidak Ada)',
            'giatusaha.required' => 'Pilih Kegiatan Usaha',
            'statusbangunan.required' => 'Pilih Status Bangunan',
            'alamatusaha.required' => 'Alamat Lengkap Usaha : Jalan, Kelurahan, Kecamatan',
            'modal.required' => 'Silahkan Masukkan Jumlah Modal Anda',
            'nik.digits_between'=>'NIK terdiri dari 16 Digits',
            'kontak.digits_between'=>'No HP terdiri dari 10 sd 12 Digits',
            'numeric' => 'Isi Dengan Angka',
            'max.numeric' => 'Cek Kembali : Kelebihan Digits'

        ]);

        // CEK GAMBAR
        $fotoktp = null;
        $fotosku = null;
        $fotopbb = null;
        $fotodiri = null;

        if ($request->hasFile('fotoktp')) {
            $fotoktp = $request->file('fotoktp')->store('assets/covers');
        }

        if ($request->hasFile('fotosku')) {
            $fotosku = $request->file('fotosku')->store('assets/covers');
        }

        if ($request->hasFile('fotopbb')) {
            $fotopbb = $request->file('fotopbb')->store('assets/covers');
        }

        if ($request->hasFile('fotodiri')) {
            $fotodiri = $request->file('fotodiri')->store('assets/covers');
        }

        Iumk::create([

            'nama' => $request->nama,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,
            'kontak' => $request->kontak,
            'naper' => $request->naper,
            'bentuk' => $request->bentuk,
            'npwp' => $request->npwp,
            'giatusaha' => $request->giatusaha,
            'statusbangunan' => $request->statusbangunan,
            'alamatusaha' => $request->alamatusaha,
            'modal' => $request->modal,
            'layanan_id' => $request->layanan_id,
            'fotoktp' => $fotoktp,
            'fotosku' => $fotosku,
            'fotopbb' => $fotopbb,
            'fotodiri' => $fotodiri,

        ]);

        return redirect()->route('ajukan.index')->withSuccess('Permohonan IUMK Berhasil Di Kirim');
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
