<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dispensasi;
use App\Layanan;
use App\Pejabat;
use Fpdf;
use PDF;
use App\Prosessurat;
use Carbon\Carbon;
use QRCode;

class DispensasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dispensasi.index', [
            'title' => 'Dispensasi Nikah'
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
         $ruls = [

            'kua' => 'required',
            'nama' => 'required',
            'nik' => 'required|numeric|digits_between:16,17',
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
            'nikcln' => 'required|numeric|digits_between:16,17',
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

            'kontakcln' => 'required|numeric|digits_between:10,13',

            'waktuakad' => 'required',
            'tempatakad' => 'required',

            'fotokua' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',
            'fotopbb' => 'file|image|mimes:jpg,png,jpeg,svg|max:2048',

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
            'max' => 'Mohon Maaf .. Besar File Yang Di Upload maximal 2 Mb',
            'image' => 'Mohon Maaf .. File Yang Diupload Hanya Dalam Bentuk Jpg,Png,Jpeg,SVG',

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

        return redirect()->route('admin.dispensasi.index')->withSuccess('Permohonan Dispensasi Nikah Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dispensasi = Dispensasi::find($id);
        // dd($dispensasi);
        return view('admin.dispensasi.show', [
            'title' => 'Detail Permohonan dispensasi',
            'daftar' => $dispensasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispensasi $dispensasi)
    {
        $pejabat = Pejabat::get();
        // dd($iumk);
        return view('admin.dispensasi.edit', [
            'title' => 'Edit Permohonan Dispensasi Nikah',
            'dispensasi' => $dispensasi,
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
    public function update(Request $request, Dispensasi $dispensasi)
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

        $dispensasi->update([

            'kua' => $request->kua,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tempat' => $request->tempat,
            // 'tgllhr' => $request->tgllhr,
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
            // 'tgllhrcln' => $request->tgllhrcln,
            'jkcln' => $request->jkcln,
            'wncln' => $request->wncln,
            'kerjacln' => $request->kerjacln,
            'agamacln' => $request->agamacln,
            'statuscln' => $request->statuscln,
            'binti' => $request->binti,
            'alamatcln' => $request->alamatcln,
            'kelurahancln' => $request->kelurahancln,

            'kontakcln' => $request->kontakcln,

            // 'waktuakad' => $request->waktuakad,
            'tempatakad' => $request->tempatakad,

            // 'fotokua' => $fotokua,
            // 'fotopbb' => $fotopbb,

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

        return redirect()->route('admin.dispensasi.edit', $dispensasi)->withInfo('Permohonan Dispensasi Nikah ' . $dispensasi->nama . ' valid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispensasi $dispensasi)
    {
        $dispensasi->delete();
        return redirect()->route('admin.dispensasi.index')
            ->with('danger', 'Permohonan Dispensasi Nikah Dihapus');
    }

    public function cetak($id)
    {
        $dispensasi = Dispensasi::find($id);
        $pdf = PDF::loadView('admin.dispensasi.cetak', [
            'dispensasi' => $dispensasi,

            'title' => 'Dispensasi Nikah',

        ])->setPaper('F4', 'portrait');

        return $pdf->stream();
    }

    public function proses($id)
    {
        $dispensasi = Dispensasi::findOrFail($id);
        // dd($dispensasi);

        $dispensasi->update([
            'hasil' => Carbon::now(),
        ]);

        Prosessurat::create([

            'proses_id' => $dispensasi->layanan_id,
            'nama' => $dispensasi->nama,
            'finish_at' => $dispensasi->layanan->layanan,
            'proses' => $dispensasi->proses,
            'syarat' => $dispensasi->syarat,
            'tglajuan' => $dispensasi->created_at,

        ]);

        return redirect()->route('admin.proses.index')->withSuccess('Proses Surat: ' . $dispensasi->nama);
    }

    public function qrcode($id)
    {
        $dispensasi = Dispensasi::find($id);
        $file = public_path('assets/code/qr.png');


        $nama = $dispensasi->nama;

        $kelurahan = $dispensasi->layanan;
        $naper = $dispensasi->kua;
        $bentuk = $dispensasi->nik;


        QRCode::meCard($nama, $kelurahan, $naper, $bentuk)
            ->setErrorCorrectionLevel('H')
            ->setSize(3)
            ->setMargin(2)
            ->setOutfile($file)
            ->png();

        return redirect()->route('admin.dispensasi.index')->withSuccess('Qrcode Generate  permohonan : ' . $dispensasi->nama . ' Siap Cetak');
    }
}
