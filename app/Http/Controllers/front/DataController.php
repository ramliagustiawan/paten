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
        $ijin = Ijin::query();


        return datatables()->of($ijin)->toJson();
    }

    public function nonijins()
    {
        $nonijin = Nonijin::query();

        return datatables()->of($nonijin)->toJson();
    }
}
