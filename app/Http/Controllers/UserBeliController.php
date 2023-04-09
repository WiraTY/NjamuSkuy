<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jamu;
use App\Models\Struk;
use App\Models\Komen;
use App\Models\Artikel;
use App\Models\UserAdmin;
use Illuminate\Support\Facades\Session;
use App\Models\StrukDetail;
use App\Http\Requests\StrukRequest;
use App\Http\Requests\KomenRequest;

class UserBeliController extends Controller
{
    public function daftarJamu(Request $request)
    {
        $request->session()->get('email');
        $daftarJamu = Jamu::all();
        return view('user.belijamu', ['daftarJamus' => $daftarJamu]);
    }
    public function beli($id)
    {
        $jamu = Jamu::where('id', $id)->get();
        return view('user.belijamuform', ['jamus' => $jamu ]);
    }
    public function store(StrukRequest $request, $id)
    {
        $validateData = $request->validated();
        $jamu = Jamu::where('id', $id)->first();
        //Cek Data Status Pembayaran
        $cekData = Struk::where('user_id', Session::get('id'))->where('status_pembayaran', 0)->first();
        if(empty($cekData)){
            $struk = new Struk;
            $struk->user_id = Session::get('id'); 
            $struk->jumlah_harga = 0;
            $struk->status_pembayaran = 0;
            $struk->save();
        }

        //simpan struk detail
        $strukBaru = Struk::where('user_id', Session::get('id'))->where('status_pembayaran', 0)->first();
        StrukDetail::create(
            [
                'jamu_id' => $jamu->id,
                'struk_id' => $strukBaru->id,
                'jumlah' => $request->jumlah_pembelian,
                'jumlah_harga' => $jamu->harga*$request->jumlah_pembelian
            ]
        );

        //pesanan total
        $pesanan = Struk::where('user_id', Session::get('id'))->where('status_pembayaran', 0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$jamu->harga*$request->jumlah_pembelian;
        $pesanan->save();
        return redirect('keranjang');
    }

    //keranjang
    public function keranjang(Request $request){
        $data = $request->session()->get('email');
        $detail = Struk::where('user_id', Session::get('id'))->where('status_pembayaran', 0)->get();
        
        $total = collect($detail)->sum('jumlah_harga');
        if(!empty($detail)){
            $jamus = Struk::join('struk_details', 'struk_details.struk_id', '=', 'struks.id')->join('jamus', 'jamus.id', '=', 'struk_details.jamu_id')->where('struks.status_pembayaran', '=', 0, 'and', 'struks.id', '=', 'struk_details.struk_id')->get([
                'jamus.nama_jamu', 'struk_details.*'
            ]);
        }
        
        return view('user.keranjang', compact('jamus', 'total'));
    }
    public function keranjangHapus($id){
        $strukDetail = StrukDetail::where('id', $id)->first();

        $struk = Struk::where('id', $strukDetail->struk_id)->first();
        $struk->jumlah_harga = $struk->jumlah_harga-$strukDetail->jumlah_harga;
        $struk->update();

        $strukDetail->delete();

        session()->flash('hapus', "Hapus Data Berhasil");
        return redirect('keranjang');
    }
    public function keranjangKonfirmasi(){
        $struk = Struk::where('user_id', Session::get('id'))->where('status_pembayaran', 0)->first();
        $struk->status_pembayaran = 1;
        $struk->update();

        session()->flash('berhasil', "Pembayaran Berhasil");

        return redirect('keranjang');
    }
    public function artikelJamu(){
        $artikel = Artikel::join('jamus', 'artikel_jamus.jamus_id', '=', 'jamus.id')->get([
            'artikel_jamus.*', 'jamus.*'
        ]);
        return view('user.artikelJamu', ['artikels' => $artikel]);
    }
    public function artikelSpesifik($id){
        $artikel = Artikel::join('jamus', 'artikel_jamus.jamus_id', '=', 'jamus.id')->where('artikel_jamus.id', $id)->get([
            'artikel_jamus.*', 'jamus.*'
        ]);
        return view('user.artikelJamuBaca', ['artikels' => $artikel]);
    }

    public function komenStore(KomenRequest $request){
        $validateData = $request->validated();
        Komen::create($validateData);
        $request->session()->flash('tambah');
        return redirect('contact');
    }
    public function profil(){
        $user = UserAdmin::where('id', Session::get('id'))->get();
        return view('user.profil', ['users' => $user ]);
    }
}
