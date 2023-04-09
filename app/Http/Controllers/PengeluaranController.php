<?php

namespace App\Http\Controllers;
use App\Models\Pengeluaran;
use App\Http\Requests\PengeluaranRequest;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view('Sipadmin.keuangan.pengeluaran.index', ['pengeluarans' => $pengeluaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sipadmin.keuangan.pengeluaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PengeluaranRequest $request)
    {
        $validateData = $request->validated();
        Pengeluaran::create($validateData);
        $request->session()->flash('tambah', "Penambahan Data Berhasil");
        return redirect()->route('pengeluaran-admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengeluaran = Pengeluaran::where('id', $id)->get();
        return view('Sipadmin.keuangan.pengeluaran.show', ['pengeluarans' => $pengeluaran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengeluaran = Pengeluaran::where('id', $id)->get();
        return view('Sipadmin.keuangan.pengeluaran.edit', ['pengeluarans' => $pengeluaran ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PengeluaranRequest $request, $id)
    {
        $validateData = $request->validated();
        Pengeluaran::find($id)->first()->update([
            'bentuk_pengeluaran' => $request->bentuk_pengeluaran,
            'total_pengeluaran' => $request->total_pengeluaran
        ]);
        $request->session()->flash('ubah', "Ubah Data {$validateData['bentuk_pengeluaran']} Berhasil");
        return redirect()->route('pengeluaran-admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengeluaran::where('id', $id)->delete();
        session()->flash('hapus', "Hapus Data Berhasil");
        return redirect()->route('pengeluaran-admins.index');
    }
}
