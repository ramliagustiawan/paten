<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Iumk;
use App\Suket;
use App\Prosessurat;
use App\Report;

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
        $countiumk = Iumk::count();
        $countsuket = Suket::count();
        $countproses = Prosessurat::count();
        // dd($count);

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'countiumk' => $countiumk,
            'countsuket' => $countsuket,
            'countproses' => $countproses,
            'iumk' => $iumk,
            'suket'=>$suket,
            'proses'=>$proses,
        ]);
    }
}
