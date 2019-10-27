<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ijin;
use App\Nonijin;

class AjukanContoller extends Controller
{
    public function index()
    {
        return view('front.ajukan.index');
    }
}
