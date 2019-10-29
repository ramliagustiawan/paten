<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ijin;
use App\Nonijin;

class AjukanController extends Controller
{
    public function index()
    {
        $ijin = Ijin::all();
        $nonijin = Nonijin::all();
        return view('front.ajukan.index', [
            'ijin' => $ijin,
            'nonijin' => $nonijin
        ]);
    }
}
