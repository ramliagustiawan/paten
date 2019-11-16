<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Prosessurat;
use App\Report;
use App\Iumk;
use App\Layanan;

class DataController extends Controller
{
    public function data()
    {
        $user = User::orderBy('name', 'ASC');

        return datatables()->of($user)
            ->addColumn('action', 'admin.user.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function layanan()
    {
        $layanan = Service::orderBy('created_at', 'DESC');

        return datatables()->of($layanan)
            ->addColumn('action', 'admin.daftar.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function surat()
    {
        $proses = Prosessurat::latest();
        return datatables()->of($proses)
            ->addColumn('nama', function (Prosessurat $model) {
                return $model->nama;
            })
            ->addColumn('action', 'admin.proses.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function lanjut()
    {
        $report = Report::orderBy('created_at', 'DESC');

        return datatables()->of($report)
            ->addColumn('action', 'admin.tindak.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function iumk()
    {
        $iumk = Iumk::isSelesai()->orderBy('created_at', 'DESC');

        return datatables()->of($iumk)
            ->addColumn('layanan_id', function (Iumk $model) {
                return $model->layanan->layanan;
            })
            ->addColumn('action', 'admin.iumk.action')
            ->addIndexColumn()
            ->toJson();
    }
}
