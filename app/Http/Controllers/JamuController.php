<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jamu;
use App\Http\Requests\JamuRequest;
use Illuminate\Support\Facades\Storage;

class JamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jamu = Jamu::all();
        return view('Sipadmin.dataJamu.menu.index', ['jamus' => $jamu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sipadmin.dataJamu.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JamuRequest $request)
    {
        $validateData = $request->validated();
        $request->file('gambar_jamu')->store('kirim_gambar');
        $gambar = Jamu::create($validateData);
        $gambar->update([
            'gambar_jamu' => Storage::putFile('kirim_gambar', request()->file('gambar_jamu'))
        ]);
        $request->session()->flash('tambah', "Penambahan Data {$validateData['nama_jamu']} Berhasil");
        return redirect()->route('jamu-admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jamu = Jamu::where('id', $id)->get();
        return view('Sipadmin.dataJamu.menu.show', ['jamus' => $jamu ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jamu = Jamu::where('id', $id)->get();
        return view('Sipadmin.dataJamu.menu.edit', ['jamus' => $jamu ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JamuRequest $request, $id)
    {
        $validateData = $request->validated();
        Jamu::where('id', $id)->update($validateData);
        $gambar = jamu::where('id', $id)->first();
        $gambar->update([
            'gambar_jamu' => Storage::putFile('kirim_gambar', request()->file('gambar_jamu'))
        ]);
        $request->session()->flash('ubah', "Ubah Data {$validateData['nama_jamu']} Berhasil");
        return redirect()->route('jamu-admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jamu::where('id', $id)->delete();
        session()->flash('hapus', "Hapus Data Berhasil");
        return redirect()->route('jamu-admins.index');
    }
}
