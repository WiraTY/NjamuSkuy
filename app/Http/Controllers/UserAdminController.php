<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAdmin;
use App\Http\Requests\UserAdminRequest;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = UserAdmin::where('status', '2')->get();
        return view('Sipadmin.dataPengguna.user.index', ['admins' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sipadmin.dataPengguna.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAdminRequest $request)
    {
        $validateData = $request->validated();
        UserAdmin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'kelamin' => $request->kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'status' => 2
        ]);
        $request->session()->flash('tambah', "Penambahan Data {$validateData['nama']} Berhasil");
        return redirect()->route('user-admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = UserAdmin::where('id', $id,)->where('status', '2')->get();
        return view('Sipadmin.dataPengguna.user.show', ['users' => $user ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = UserAdmin::where('id', $id,)->where('status', '2')->get();
        return view('Sipadmin.dataPengguna.user.edit', ['users' => $user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserAdminRequest $request, $id)
    {
        $validateData = $request->validated();
        UserAdmin::find($id)->update([
            'nama' => $request->nama,
            'password' => $request->password,
            'kelamin' => $request->kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
        ]);
        $request->session()->flash('ubah', "Ubah Data {$validateData['nama']} Berhasil");
        return redirect()->route('user-admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserAdmin::where('id', $id)->delete();
        session()->flash('hapus', "Hapus Data Berhasil");
        return redirect()->route('user-admins.index');
    }
}
