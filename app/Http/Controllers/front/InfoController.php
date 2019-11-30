<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Ijin;
use App\Prosessurat;
use App\Layanan;

class InfoController extends Controller
{
    public function index()
    {
        $proses = Prosessurat::orderBy('id', 'DESC')->paginate(10);
        // dd($proses);
        return view('front.info.index', [
            'proses' => $proses,
            'title' => 'Informasi Status Layanan',
        ]);
    }

    public function show($id)
    {
        $layanan = Layanan::find($id);
        // dd($layanan);
        return view('front.info.show', [
            'title' => 'Detail Persyaratan layanan',
            'layanan' => $layanan,
        ]);
    }
}
