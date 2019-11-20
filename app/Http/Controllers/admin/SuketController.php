<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Jenssegers\Date\Date;
use App\Suket;
use App\Layanan;
use App\Pejabat;
use Fpdf;
use PDF;
use App\Prosessurat;
use Carbon\Carbon;
use QRCode;


class SuketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.suket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $suket = Suket::orderBY('created_at', 'DESC')->get();
        return view('admin.suket.create', [
            'title' => 'Ajukan Surat Keterangan',
            'suket' => $suket,
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

            'nama' => 'required',
            'nik' => 'required|numeric|max:9999999999999999',
            'tempat' => 'required',
            'tgllhr' => 'required',
            'jk' => 'required|min:4',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'keterangan' => 'required|min:10',
            'keperluan' => 'required|min:10',
            'kontak' => 'required|numeric|max:999999999999',
            'layanan_id' => 'required',
            'fotoktp' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',


        ]);

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

        return redirect()->route('admin.suket.index')->withSuccess('Permohonan Surat Keterangan Berhasil Di Kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suket = Suket::find($id);
        // dd($suket);
        return view('admin.suket.show', [
            'title' => 'Detail Permohonan Surat Keterangan',
            'daftar' => $suket,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Suket $suket)
    {
        $pejabat = Pejabat::get();
        // dd($suket);
        return view('admin.suket.edit', [
            'title' => 'Edit Permohonan Surat Keterangan',
            'suket' => $suket,
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
    public function update(Request $request, Suket $suket)
    {
        // VALIDASI
        $this->validate($request, [

            'nama' => 'required',
            'nik' => 'required|numeric|max:9999999999999999',
            'tempat' => 'required',
            'tgllhr' => 'required',
            'jk' => 'required|min:4',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'keterangan' => 'required|min:10',
            'keperluan' => 'required|min:10',
            'kontak' => 'required|numeric|max:999999999999',
            'layanan_id' => 'required',
            'fotoktp' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',


        ]);

        // CEK GAMBAR
        $fotoktp = null;
        $fotopbb = null;


        if ($request->hasFile('fotoktp')) {
            $fotoktp = $request->file('fotoktp')->store('assets/covers');
        }

        if ($request->hasFile('fotopbb')) {
            $fotopbb = $request->file('fotopbb')->store('assets/covers');
        }

        $suket->update([

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
            // 'fotoktp' => $fotoktp,
            // 'fotopbb' => $fotopbb,
            'syarat' => $request->syarat,
            'proses' => $request->proses,
            // 'ketproses' => $request->ketproses,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'pejabat_id' => $request->pejabat_id,
            // 'hasil' => $request->hasil,

        ]);

        return redirect()->route('admin.suket.edit', $suket)->withInfo('Permohonan Surat Keterangan ' . $suket->nama . ' valid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suket $suket)
    {
        $suket->delete();
        return redirect()->route('admin.suket.index')
            ->with('danger', 'Permohonan Surat Keterangan Dihapus');
    }

    public function cetak($id)
    {
        $suket = Suket::find($id);
        $pdf = PDF::loadView('admin.suket.cetak', [
            'suket' => $suket,
            // 'pejabat' => $pejabat,
            'title' => 'Surat Keterangan',

        ])->setPaper('F4', 'portrait');

        return $pdf->stream();
    }

    public function proses($id)
    {
        $suket = Suket::findOrFail($id);
        // dd($suket);

        $suket->update([
            'hasil' => Carbon::now(),
        ]);


        Prosessurat::create([

            'proses_id' => $suket->layanan_id,
            'nama' => $suket->nama,
            'finish_at' => $suket->layanan->layanan,
            'proses' => $suket->proses,
            'syarat' => $suket->syarat,
            'tglajuan' => $suket->created_at,

        ]);

        return redirect()->route('admin.proses.index')->withSuccess('Proses Surat: ' . $suket->nama);
    }

    public function qrcode($id)
    {
        $suket = Suket::find($id);
        $file = public_path('assets/code/qr.png');
        // dd($suket);
        // dd($file);

        $nama = $suket->nama;
        // $nik = $suket->nik;
        // $alamat = $suket->alamat;
        $kelurahan = $suket->layanan;
        $naper = $suket->keperluan;
        $bentuk = $suket->nik;
        // dd($nama);

        QRCode::meCard($nama, $kelurahan, $naper, $bentuk)
            ->setErrorCorrectionLevel('H')
            ->setSize(3)
            ->setMargin(2)
            ->setOutfile($file)
            ->png();

        return redirect()->route('admin.suket.index')->withSuccess('Qrcode Generate  permohonan : ' . $suket->nama . ' Siap Cetak');
    }
}
