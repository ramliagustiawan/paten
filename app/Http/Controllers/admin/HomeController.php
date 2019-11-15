<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Iumk;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $iumk = Iumk::orderBY('created_at', 'DESC')->get();
        $count = Iumk::count();
        // dd($count);

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'count' => $count,
            'iumk' => $iumk
        ]);
    }
}
