<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

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
}
