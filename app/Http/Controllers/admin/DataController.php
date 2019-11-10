<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Prosessurat;
use App\Report;

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
        // $proses = Prosessurat::orderBy('created_at', 'DESC');

        $proses = Prosessurat::latest();
        // $service = Service::latest();

        return datatables()->of($proses)
            ->addColumn('nama', function (Prosessurat $model) {
                return $model->service->nama;
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
}
