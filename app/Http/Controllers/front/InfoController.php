<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Ijin;
use App\Prosessurat;

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
}
