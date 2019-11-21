<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::orderBy('created_at', 'DESC');
        return view('admin.user.index', [
            'title' => 'Manajemen User',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        $role = Role::orderBy('name', 'ASC')->get();
        // dd($model);
        return view('admin.user.create', [
            'title' => 'Tambah User',
            'model' => $model,
            'role' => $role,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'roles_id' => 'required',
        ]);

        $user = User::firstOrCreate([
            'email' => $request->email,
        ], [
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'status' => true,
            'roles_id' => $request->roles_id,
        ]);

        $user->assignRole($request->roles_id);

        return redirect()->route('admin.user.index')->withSuccess('Data Pengguna Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $model = User::findOrFail($id);
        return view('admin.user.formedit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
            'roles_id' => 'required',
        ]);


        $model = User::findOrFail($id);
        $password = !empty($request->password) ? bcrypt($request->password) : $model->password;

        $model->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'roles_id' => $request->roles_id,

        ]);

        return redirect()->route('admin.user.index')->withSuccess('Data Pengguna Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = User::findOrFail($id);
        $model->delete();

        // User::destroy($id);

    }
}
