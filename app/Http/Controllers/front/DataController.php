<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ijin;
use App\Nonijin;

class DataController extends Controller
{
    public function ijins()
    {
        $ijin = Ijin::orderBy('nama','ASC');


        return datatables()->of($ijin)
        ->addIndexColumn()
        ->toJson();
    }

    public function nonijins()
    {
        $nonijin = Nonijin::orderBy('nama','ASC');

        return datatables()->of($nonijin)
        ->addIndexColumn()
        ->toJson();
    }
}
