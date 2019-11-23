<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permission = Permission::orderBy('created_at', 'DESC');
        return view('admin.permission.index', compact('permission'));
    }

    public function create()
    {
        $model = new Permission();
        return view('admin.permission.form', [
            'model' => $model,
        ]);
    }

    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'name' => 'required',
            // 'guard_name' => 'required',
        ]);

        $model = Permission::firstOrCreate(['name' => $request->name]);
        return $model;
    }

    public function edit($id)
    {
        $model = Permission::findOrFail($id);
        return view('admin.permission.form', compact('model'));
    }

    public function update(Request $request, $id)
    {
        //validasi
        $this->validate($request, [
            'name' => 'required',
            'guard_name' => 'required',
        ]);

        $model = Permission::findOrFail($id);

        $model->update($request->all());
    }

    public function destroy($id)
    {
        $model = Permission::findOrFail($id);
        $model->delete();
    }
}
