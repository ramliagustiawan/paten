<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::orderBy('created_at', 'DESC');
        return view('admin.role.index', compact('role'));
    }

    public function create()
    {
        $model = new Role();
        return view('admin.role.form', [
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

        $model = Role::firstOrCreate(['name' => $request->name]);
        return $model;
    }

    public function edit($id)
    {
        $model = Role::findOrFail($id);
        return view('admin.role.form', compact('model'));
    }

    public function update(Request $request, $id)
    {
        //validasi
        $this->validate($request, [
            'name' => 'required',
            'guard_name' => 'required',
        ]);

        $model = Role::findOrFail($id);

        $model->update($request->all());
    }

    public function destroy($id)
    {
        $model = Role::findOrFail($id);
        $model->delete();
    }
}
