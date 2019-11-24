<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Dispensasi;

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

        $dispensasi = Dispensasi::orderBY('created_at', 'DESC')->get();
        return view('admin.dispensasi.create', [
            'title' => 'Ajukan dispensasi',
            'dispensasi' => $dispensasi,
            'layanan' => Layanan::orderBy('layanan', 'ASC')->get(),
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

            'kua' => 'required',
            'nama' => 'required',
            'nik' => 'required|numeric',
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
            'nikcln' => 'required|numeric',
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

            'kontakcln' => 'required|numeric',

            'waktuakad' => 'required',
            'tempatakad' => 'required',

            'fotokua' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',


        ]);

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

        return redirect()->route('nikah.index')->withSuccess('Permohonan Dispensasi Nikah Berhasil Di Kirim');
    }
}
