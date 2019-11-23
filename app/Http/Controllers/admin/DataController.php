<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Service;
use App\Prosessurat;
use App\Report;
use App\Iumk;
use App\Layanan;
use App\Suket;
use App\Nonijin;
use App\Ijin;
use App\Pejabat;


class DataController extends Controller
{
    public function data()
    {

        $user = User::orderBy('created_at', 'DESC');

        return datatables()->of($user)
            ->addColumn('roles_id', function (User $model) {
                return $model->roles->first()->name;
            })
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
        // dd($proses);
        return datatables()->of($proses)
            ->addColumn('proses_id', function (Prosessurat $model) {
                return $model->kontak;
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

    public function suket()
    {
        $suket = Suket::isSelesai()->orderBy('created_at', 'DESC');

        return datatables()->of($suket)
            ->addColumn('layanan_id', function (Suket $model) {
                return $model->layanan->layanan;
            })
            ->addColumn('action', 'admin.suket.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function nonijin()
    {
        $nonijin = Nonijin::orderBy('nama', 'ASC');

        return datatables()->of($nonijin)
            // ->addColumn('layanan_id', function (nonijin $model) {
            //     return $model->layanan->layanan;
            // })
            ->addColumn('action', 'admin.nonijin.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function ijin()
    {
        $ijin = Ijin::orderBy('nama', 'ASC');

        return datatables()->of($ijin)
            // ->addColumn('layanan_id', function (nonijin $model) {
            //     return $model->layanan->layanan;
            // })
            ->addColumn('action', 'admin.ijin.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function syarat()
    {
        $syarat = Layanan::orderBy('id', 'ASC');

        return datatables()->of($syarat)
            // ->addColumn('syarat_id', function (syarat $model) {
            //     return $model->syarat->syarat;
            // })
            ->addColumn('action', 'admin.syarat.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function pejabat()
    {
        $pejabat = Pejabat::orderBy('id', 'ASC');

        return datatables()->of($pejabat)
            // ->addColumn('pejabat_id', function (pejabat $model) {
            //     return $model->pejabat->pejabat;
            // })
            ->addColumn('action', 'admin.pejabat.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function role()
    {
        $role = Role::orderBy('id', 'ASC');

        return datatables()->of($role)
            // ->addColumn('role_id', function (role $model) {
            //     return $model->role->role;
            // })
            ->addColumn('action', 'admin.role.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function permission()
    {
        $permission = Permission::orderBy('id', 'ASC');

        return datatables()->of($permission)
            // ->addColumn('permission_id', function (permission $model) {
            //     return $model->permission->permission;
            // })
            ->addColumn('action', 'admin.permission.action')
            ->addIndexColumn()
            ->toJson();
    }
}
