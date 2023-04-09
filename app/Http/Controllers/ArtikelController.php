<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Jamu;
use App\Http\Requests\ArtikelRequest;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $artikel = Artikel::join('jamus', 'artikel_jamus.jamus_id', '=', 'jamus.id')->get([
            'artikel_jamus.*', 'jamus.nama_jamu'
        ]);
        return view('Sipadmin.dataJamu.artikel.index', ['artikels' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jamu = Jamu::all();
        return view('Sipadmin.dataJamu.artikel.create', ['jamus' => $jamu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtikelRequest $request)
    {
        $validateData = $request->validated();
        Artikel::create([
            'judul_artikel' => $request->judul_artikel,
            'artikel' => $request->artikel,
            'jamus_id' => $request->jamus_id
        ]);
        $request->session()->flash('tambah', "Penambahan Data {$validateData['judul_artikel']} Berhasil");
        return redirect()->route('artikel-admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jamus = Jamu::join('artikel_jamus', 'artikel_jamus.jamus_id', '=', 'jamus.id')->where('artikel_jamus.id', $id)->get();
        return view('Sipadmin.dataJamu.artikel.show', ['jamus' => $jamus ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jamus = Jamu::join('artikel_jamus', 'artikel_jamus.jamus_id', '=', 'jamus.id')->where('artikel_jamus.id', $id)->get();
        return view('Sipadmin.dataJamu.artikel.edit', ['jamus' => $jamus ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtikelRequest $request, $id)
    {
        $validateData = $request->validated();
        Artikel::find($id)->first()->update([
            'judul_artikel' => $request->judul_artikel,
            'artikel' => $request->artikel,
            'jamus_id' => $request->jamus_id
        ]);
        $request->session()->flash('ubah', "Ubah Data {$validateData['judul_artikel']} Berhasil");
        return redirect()->route('artikel-admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artikel::where('id', $id)->delete();
        session()->flash('hapus', "Hapus Data Berhasil");
        return redirect()->route('artikel-admins.index');
    }
}
