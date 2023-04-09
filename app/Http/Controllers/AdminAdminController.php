<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAdmin;
use App\Models\UserAdmin;
use App\Models\StrukDetail;
use App\Models\Pengeluaran;
use App\Http\Requests\AdminAdminRequest;
use Illuminate\Support\Facades\Session;

class AdminAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = AdminAdmin::where('status', '1')->get();
        return view('Sipadmin.dataPengguna.adminn.index', ['admins' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sipadmin.dataPengguna.adminn.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminAdminRequest $request)
    {
        $validateData = $request->validated();
        AdminAdmin::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'kelamin' => $request->kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'status' => 1
        ]);
        $request->session()->flash('tambah', "Penambahan Data {$validateData['nama']} Berhasil");
        return redirect()->route('admin-admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = AdminAdmin::where('id', $id,)->where('status', '1')->get();
        return view('Sipadmin.dataPengguna.adminn.show', ['admins' => $admin ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = AdminAdmin::where('id', $id,)->where('status', '1')->get();
        return view('Sipadmin.dataPengguna.adminn.edit', ['admins' => $admin ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminAdminRequest $request, $id)
    {
        $validateData = $request->validated();
        AdminAdmin::find($id)->update([
            'nama' => $request->nama,
            'password' => $request->password,
            'kelamin' => $request->kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
        ]);
        $request->session()->flash('ubah', "Ubah Data {$validateData['nama']} Berhasil");
        return redirect()->route('admin-admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdminAdmin::where('id', $id)->delete();
        session()->flash('hapus', "Hapus Data Berhasil");
        return redirect()->route('admin-admins.index');
    }

    //akun
    public function akun(){
        $admin = AdminAdmin::where('id', Session::get('id'))->get();
        return view('Sipadmin.dataPengguna.akun.index', ['admins' => $admin ]);   
    }
    public function akunUpdate(AdminAdminRequest $request)
    {
        return view('Sipadmin.dataPengguna.akun.index');
        // $validateData = $request->validated();
        // $sd = AdminAdmin::find(Session::get('id'))->update([
        //     'nama' => $request->nama,
        //     'password' => $request->password,
        //     'kelamin' => $request->kelamin,
        //     'tanggal_lahir' => $request->tanggal_lahir,
        //     'alamat' => $request->alamat,
        // ]);
        // $request->session()->flash('ubah', "Ubah Data {$validateData['nama']} Berhasil");
        // return redirect()->route('profil');
    }
    public function home(){
        $penjualan = number_format(StrukDetail::join('struks', 'struk_details.struk_id', '=', 'struks.id')
        ->where('struks.status_pembayaran', '1')
        ->sum('struk_details.jumlah'));
        $uangpenjualan = number_format(StrukDetail::join('struks', 'struk_details.struk_id', '=', 'struks.id')
        ->where('struks.status_pembayaran', '1')
        ->sum('struks.jumlah_harga'));
        $customer = number_format(UserAdmin::where('status', 2)->count());
        $uangpenjualan = number_format(StrukDetail::join('struks', 'struk_details.struk_id', '=', 'struks.id')
        ->where('struks.status_pembayaran', '1')
        ->sum('struks.jumlah_harga'));
        $plus = StrukDetail::join('struks', 'struk_details.struk_id', '=', 'struks.id')
        ->where('struks.status_pembayaran', '1')
        ->sum('struks.jumlah_harga');
        $minus = Pengeluaran::sum('total_pengeluaran');
        $total = number_format($plus - $minus);
        return view('Sipadmin.home-admin', compact('penjualan', 'uangpenjualan', 'customer', 'total'));
    }
}
