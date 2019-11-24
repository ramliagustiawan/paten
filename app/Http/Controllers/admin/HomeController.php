<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Iumk;
use App\Suket;
use App\Prosessurat;
use App\Report;
use App\Layanan;
use App\Dispensasi;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $iumk = Iumk::orderBY('created_at', 'DESC')->get();
        $suket = Suket::orderBY('created_at', 'DESC')->get();
        $proses = Prosessurat::orderBY('created_at', 'DESC')->get();
        $report = Report::orderBY('created_at', 'DESC')->get();
        $layanan = Layanan::orderBY('layanan', 'DESC')->get();
        $dispensasi = Dispensasi::orderBY('nama', 'DESC')->get();

        $countiumk = Iumk::count();
        $countsuket = Suket::count();
        $countproses = Prosessurat::count();
        $countreport = Report::count();
        $countlayanan = Layanan::count();
        $countdispensasi = Dispensasi::count();
        // dd($count);

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'countiumk' => $countiumk,
            'countsuket' => $countsuket,
            'countproses' => $countproses,
            'countreport' => $countreport,
            'countlayanan' => $countlayanan,
            'countdispensasi' => $countdispensasi,

            'iumk' => $iumk,
            'suket' => $suket,
            'proses' => $proses,
            'report' => $report,
            'layanan' => $layanan,
            'dispensasi' => $dispensasi,
        ]);

        Role::create(['name' => 'adminkec']);

        return view('home');
    }
}
