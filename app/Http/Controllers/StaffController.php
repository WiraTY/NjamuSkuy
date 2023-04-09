<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Http\Requests\StaffRequest;
use Illuminate\Auth\Events\Validated;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();
        return view('Sipadmin.dataPengguna.staff.index', ['staffs' => $staff]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sipadmin.dataPengguna.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        $validateData = $request->validated();
        Staff::create($validateData);
        $request->session()->flash('tambah', "Penambahan Data {$validateData['nama_staff']} Berhasil");
        return redirect()->route('staff-admins.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::where('id', $id)->get();
        return view('Sipadmin.dataPengguna.staff.show', ['staffs' => $staff ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::where('id', $id)->get();
        return view('Sipadmin.dataPengguna.staff.edit', ['staffs' => $staff ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StaffRequest $request, $id)
    {
        $validateData = $request->validated();
        Staff::find($id)->first()->update([
            'nama_staff' => $request->nama_staff,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kelamin' => $request->kelamin,
            'posisi' => $request->posisi,
            'alamat' => $request->alamat,
        ]);
        $request->session()->flash('ubah', "Ubah Data {$validateData['nama_staff']} Berhasil");
        return redirect()->route('staff-admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::where('id', $id)->delete();
        session()->flash('hapus', "Hapus Data Berhasil");
        return redirect()->route('staff-admins.index');
    }
}
