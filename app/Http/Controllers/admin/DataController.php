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
use App\Dispensasi;
use App\Suratmasuk;
use App\Arsip;
use App\Suratout;

class DataController extends Controller
{
    public function data()
    {

        $user = User::orderBy('created_at', 'DESC')->get();
        $user->load('roles');

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
        $daftar = Service::isSelesai()->orderBy('created_at', 'DESC')->get();
        $daftar->load('layanan', 'pejabat');
        // dd($layanan);
        return datatables()->of($daftar)
            ->addColumn('layanan_id', function (Service $model) {
                return $model->layanan->layanan;
            })
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
            ->addColumn('pesan', function (Report $model) {
                return strip_tags($model->pesan);
            })
            ->addColumn('tindakan', function (Report $model) {
                return strip_tags($model->tindakan);
            })
            ->addColumn('action', 'admin.tindak.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function iumk()
    {
        $iumk = Iumk::isSelesai()->orderBy('created_at', 'DESC')->get();
        $iumk->load('layanan');

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
        $suket = Suket::isSelesai()->orderBy('created_at', 'DESC')->get();
        $suket->load('layanan');

        return datatables()->of($suket)
            ->addColumn('layanan_id', function (Suket $model) {
                return $model->layanan->layanan;
            })
            ->addColumn('action', 'admin.suket.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function nikah()
    {
        $dispensasi = Dispensasi::isSelesai()->orderBy('created_at', 'DESC')->get();
        $dispensasi->load('layanan');

        return datatables()->of($dispensasi)
            ->addColumn('layanan_id', function (Dispensasi $model) {
                return $model->layanan->layanan;
            })
            ->addColumn('action', 'admin.nikah.action')
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



    public function suratin()
    {
        $suratin = Suratmasuk::orderBy('created_at', 'DESC')->get();
        $suratin->load('pejabat');

        return datatables()->of($suratin)
            ->addColumn('pejabat_id', function (Suratmasuk $model) {
                return $model->pejabat;
            })
            ->addColumn('action', 'admin.suratin.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function suratout()
    {
        $suratout = Suratout::orderBy('created_at', 'DESC');

        return datatables()->of($suratout)
            // ->addColumn('pejabat_id', function (Suratmasuk $model) {
            //     return $model->pejabat;
            // })
            ->addColumn('isisingkat', function (Suratout $model) {
                return strip_tags($model->isisingkat);
            })
            ->addColumn('action', 'admin.suratout.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function arsip()
    {
        $arsip = Arsip::orderBy('id', 'DESC');

        return datatables()->of($arsip)
            // ->addColumn('pejabat_id', function (Suratmasuk $model) {
            //     return $model->pejabat;
            // })
            ->addColumn('action', 'admin.arsip.action')
            ->addIndexColumn()
            ->toJson();
    }
}
