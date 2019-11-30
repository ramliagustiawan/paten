<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ijin;
use App\Nonijin;
use App\Prosessurat;
use App\Layanan;

class DataController extends Controller
{
    public function ijins()
    {
        $ijin = Ijin::orderBy('nama', 'ASC');


        return datatables()->of($ijin)
            ->addIndexColumn()
            ->toJson();
    }

    public function nonijins()
    {
        $nonijin = Nonijin::orderBy('nama', 'ASC');

        return datatables()->of($nonijin)
            ->addIndexColumn()
            ->toJson();
    }

    public function prosessurat()
    {
        $proses = Prosessurat::orderBy('nama', 'ASC');

        return datatables()->of($proses)
            ->addIndexColumn()
            ->toJson();
    }

    public function syarat()
    {
        $syarat = Layanan::orderBy('id', 'ASC');

        return datatables()->of($syarat)
            ->addColumn('action', 'front.info.action')
            ->addIndexColumn()
            ->toJson();
    }
}
