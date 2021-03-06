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
use App\Service;
use App\Suratmasuk;
use App\Arsip;
use App\Suratout;


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
        $layanan = Layanan::orderBY('id', 'ASC')->get();
        $dispensasi = Dispensasi::orderBY('nama', 'DESC')->get();
        $service = Service::orderBY('nama', 'DESC')->get();
        $suratmasuk = Suratmasuk::orderBY('id', 'DESC')->get();
        $arsip = Arsip::orderBY('id', 'DESC')->get();
        $suratout = Suratout::orderBY('id', 'DESC')->get();

        $countiumk = Iumk::count();
        $countsuket = Suket::count();
        $countproses = Prosessurat::count();
        $countreport = Report::count();
        $countlayanan = Layanan::count();
        $countdispensasi = Dispensasi::count();
        $countservice = Service::count();
        $countsuratmasuk = Suratmasuk::count();
        $countarsip = Arsip::count();
        $countsuratout = Suratout::count();
        // dd($countlayanan);

        // untuk chart
        $categories = [];
        foreach ($layanan as $item) {
            $categories[] = $item->layanan;
        }

        $data = ([$countproses, $countiumk, $countdispensasi, $countsuket, $countservice]);

        // dd($categories);
        // dd($data);

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'countiumk' => $countiumk,
            'countsuket' => $countsuket,
            'countproses' => $countproses,
            'countreport' => $countreport,
            'countlayanan' => $countlayanan,
            'countdispensasi' => $countdispensasi,
            'countservice' => $countservice,
            'countsuratmasuk' => $countsuratmasuk,
            'countarsip' => $countarsip,
            'countsuratout' => $countsuratout,

            'iumk' => $iumk,
            'suket' => $suket,
            'proses' => $proses,
            'report' => $report,
            'layanan' => $layanan,
            'dispensasi' => $dispensasi,
            'service' => $service,
            'service' => $service,
            'suratmasuk' => $suratmasuk,
            'arsip' => $arsip,
            'suratout' => $suratout,

            // chart
            'categories' => $categories,
            'data' => $data,
        ]);

        Role::create(['name' => 'adminkec']);

        return view('home');
    }
}
