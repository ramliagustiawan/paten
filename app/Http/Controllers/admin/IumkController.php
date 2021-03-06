<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Iumk;
use App\Layanan;
use App\Pejabat;
use Fpdf;
use PDF;
use App\Prosessurat;
use Carbon\Carbon;
use QRCode;

class IumkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.iumk.index', [
            'title' => 'Ijin Usaha Mikro Kecil'
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
        return view('admin.iumk.create', [
            'title' => 'Ajukan IUMK',
            'iumk' => $iumk,
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
        'fotoktp' => 'file|image|max:2048',
        'fotosku' => 'file|image|max:2048',
        'fotopbb' => 'file|image|max:2048',
        'fotodiri' => 'file|image|max:2048',

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
        'max.numeric' => 'Cek Kembali : Kelebihan Digits',
        'max' => 'Mohon Maaf .. Besar File Yang Di Upload maximal 2 Mb',
        'image' => 'Mohon Maaf .. File Yang Diupload Hanya Dalam Bentuk Jpg,Png,Jpeg,SVG',

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

        return redirect()->route('admin.iumk.index')->withSuccess('Permohonan IUMK Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iumk = Iumk::find($id);
        // dd($iumk);
        return view('admin.iumk.show', [
            'title' => 'Detail Permohonan IUMK',
            'daftar' => $iumk,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Iumk $iumk)
    {
        $pejabat = Pejabat::get();
        // dd($iumk);
        return view('admin.iumk.edit', [
            'title' => 'Edit Permohonan IUMK',
            'iumk' => $iumk,
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
    public function update(Request $request, Iumk $iumk)
    {
        // VALIDASI
        $this->validate($request, [

            'nama' => 'required',
            'nik' => 'required|numeric|max:9999999999999999',
            'alamat' => 'required|min:3',
            'kelurahan' => 'required',
            'kontak' => 'required|numeric|max:999999999999',
            'naper' => 'required',
            'bentuk' => 'required',
            'npwp' => 'required',
            'giatusaha' => 'required',
            'statusbangunan' => 'required',
            'alamatusaha' => 'required|min:10',
            'modal' => 'required',
            'layanan_id' => 'required',
            // 'pejabat' => 'required',
            'fotoktp' => 'file|image|max:2048',
            'fotosku' => 'file|image|max:2048',
            'fotopbb' => 'file|image|max:2048',
            'fotodiri' => 'file|image|max:2048',
            // 'syarat' => 'required',
            // 'proses' => 'required',
            // 'ketproses' => 'required',
            // 'nosurat' => 'required',
            // 'tglsurat' => 'required',
            // 'pejabat' => 'required',
            // 'nip' => 'required',
            // 'barcode' => 'required',
            // 'hasil' => 'required',

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

        $iumk->update([

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
            // 'fotoktp' => $fotoktp,
            // 'fotosku' => $fotosku,
            // 'fotopbb' => $fotopbb,
            // 'fotodiri' => $fotodiri,
            'syarat' => $request->syarat,
            'proses' => $request->proses,
            // 'ketproses' => $request->ketproses,
            'nosurat' => $request->nosurat,
            'tglsurat' => $request->tglsurat,
            'barcode' => $request->barcode,
            'pejabat_id' => $request->pejabat_id,
            'nip' => $request->nip,
            'barcode' => $request->barcode,
            // 'hasil' => $request->hasil,

        ]);

        return redirect()->route('admin.iumk.edit', $iumk)->withInfo('Permohonan IUMK ' . $iumk->nama . ' valid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iumk $iumk)
    {
        $iumk->delete();
        return redirect()->route('admin.iumk.index')
            ->with('danger', 'Permohonan IUMK Dihapus');
    }

    public function cetak($id)
    {
        $iumk = Iumk::find($id);
        $pdf = PDF::loadView('admin.iumk.cetak', [
            'iumk' => $iumk,
            // 'pejabat' => $pejabat,
            'title' => 'Ijin Usaha Mikro Kecil',

        ])->setPaper('F4', 'portrait');

        return $pdf->stream();
    }

    public function proses($id)
    {
        $iumk = Iumk::findOrFail($id);
        // dd($iumk);

        $iumk->update([
            'hasil' => Carbon::now(),
        ]);

        Prosessurat::create([

            'proses_id' => $iumk->layanan_id,
            'nama' => $iumk->nama,
            'finish_at' => $iumk->layanan->layanan,
            'proses' => $iumk->proses,
            'syarat' => $iumk->syarat,
            'tglajuan' => $iumk->created_at,

        ]);

        return redirect()->route('admin.proses.index')->withSuccess('Proses Surat: ' . $iumk->nama);
    }

    public function qrcode($id)
    {
        $iumk = Iumk::find($id);
        $file = public_path('assets/code/qr.png');
        // dd($iumk);
        // dd($file);

        $nama = $iumk->nama;
        // $nik = $iumk->nik;
        // $alamat = $iumk->alamat;
        $kelurahan = $iumk->layanan;
        $naper = $iumk->naper;
        $bentuk = $iumk->nik;
        // dd($nama);

        QRCode::meCard($nama, $kelurahan, $naper, $bentuk)
            ->setErrorCorrectionLevel('H')
            ->setSize(3)
            ->setMargin(2)
            ->setOutfile($file)
            ->png();

        return redirect()->route('admin.iumk.index')->withSuccess('Qrcode Generate  permohonan : ' . $iumk->nama . ' Siap Cetak');
    }
}
