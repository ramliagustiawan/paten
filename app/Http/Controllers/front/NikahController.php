<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Service;
use App\Dispensasi;
use App\Rules\Captcha;

class NikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.nikah.index', [
            'titile' => 'Dispensasi Nikah'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $dispensasi = Dispensasi::orderBY('created_at', 'DESC')->get();
        // return view('admin.dispensasi.create', [
        //     'title' => 'Ajukan dispensasi',
        //     'dispensasi' => $dispensasi,
        //     'layanan' => Layanan::orderBy('layanan', 'ASC')->get(),
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

            'kua' => 'required',
            'nama' => 'required',
            'nik' => 'required|numeric|max:9999999999999999|digits_between:16,18',
            'tempat' => 'required',
            'tgllhr' => 'required',
            'jk' => 'required|min:4',
            'wn' => 'required',
            'kerja' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'bin' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',

            'layanan_id' => 'required',

            'namacln' => 'required',
            'nikcln' => 'required|numeric|max:9999999999999999|digits_between:16,18',
            'tempatcln' => 'required',
            'tgllhrcln' => 'required',
            'jkcln' => 'required|min:4',
            'wncln' => 'required',
            'kerjacln' => 'required',
            'agamacln' => 'required',
            'statuscln' => 'required',
            'binti' => 'required',
            'alamatcln' => 'required',
            'kelurahancln' => 'required',

            'kontakcln' => 'required|numeric|max:999999999999|digits_between:10,15',

            'waktuakad' => 'required',
            'tempatakad' => 'required',

            'fotokua' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'g-recaptcha-response' => new Captcha(),


        ];

        $message = [
            'required' => ':attribute Harus Di Isi',
            'numeric' => 'Masukkan Angka',
            'kua.required' => 'Masukkan tanggal permohonan Dispensasi dari KUA',
            'nik.required' => 'Masukkan Nik Anda | 16 Digit',
            'nik.required' => 'Masukkan Nik Anda | 16 Digit',
            'kontak.required'=> 'Masukkan Nomor Hp Anda | 10 - 12 Digit',
            'tgllhr.required'=>'Masukkan Tanggal,Bulan,Tahun Lahir',
            'tempat.required'=>'Tempat Lahir Harus Di Isi',
            'kerja.required' => 'Pekerjaan Harus Di Isi',
            'bin.required' => 'Nama Orang Tua Laki-Laki Harus Di Isi',
            'namacln.required' => 'Nama Harus Di Isi',
            'nikcln.required' => 'Masukkan Nik Anda | 16 Digit',
            'tempatcln.required'=>'Tempat Lahir Harus Di Isi',
            'tgllhrcln.required'=>'Masukkan Tanggal,Bulan,Tahun Lahir',
            'kerjacln.required' => 'Pekerjaan Harus Di Isi',
            'binti.required' => 'Nama Orang Tua Laki-Laki Harus Di Isi',
            'alamatcln.required' => 'Alamat Calon Pengantin Wanita Harus Di Isi',
            'kontakcln.required'=> 'Masukkan Nomor Hp Anda | 10 - 12 Digit',
            'nik.digits_between'=>'NIK harus 16 Digits',
            'nikcln.digits_between'=>'NIK harus 16 Digits',
            'kontakcln.digits_between'=>'No HP terdiri dari 10 sd 12 Digits',

        ];

        $request->validate($ruls,$message);

        // CEK GAMBAR
        $fotokua = null;
        $fotopbb = null;


        if ($request->hasFile('fotokua')) {
            $fotokua = $request->file('fotokua')->store('assets/covers');
        }

        if ($request->hasFile('fotopbb')) {
            $fotopbb = $request->file('fotopbb')->store('assets/covers');
        }

        Dispensasi::create([

            'kua' => $request->kua,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tempat' => $request->tempat,
            'tgllhr' => $request->tgllhr,
            'jk' => $request->jk,
            'wn' => $request->wn,
            'kerja' => $request->kerja,
            'agama' => $request->agama,
            'status' => $request->status,
            'bin' => $request->bin,
            'alamat' => $request->alamat,
            'kelurahan' => $request->kelurahan,

            'layanan_id' => $request->layanan_id,

            'namacln' => $request->namacln,
            'nikcln' => $request->nikcln,
            'tempatcln' => $request->tempatcln,
            'tgllhrcln' => $request->tgllhrcln,
            'jkcln' => $request->jkcln,
            'wncln' => $request->wncln,
            'kerjacln' => $request->kerjacln,
            'agamacln' => $request->agamacln,
            'statuscln' => $request->statuscln,
            'binti' => $request->binti,
            'alamatcln' => $request->alamatcln,
            'kelurahancln' => $request->kelurahancln,

            'kontakcln' => $request->kontakcln,

            'waktuakad' => $request->waktuakad,
            'tempatakad' => $request->tempatakad,

            'fotokua' => $fotokua,
            'fotopbb' => $fotopbb,


        ]);

        return redirect()->route('ajukan.index')->withSuccess('Permohonan Dispensasi Nikah Berhasil Di Kirim');
    }
}
