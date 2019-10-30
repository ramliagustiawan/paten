<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Ijin;

class InfoController extends Controller
{
    public function index()
    {
        return view('front.info.index');
    }
}
