<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StrukDetail;
use App\Models\Struk;
use App\Models\AdminAdmin;
use Illuminate\Support\Facades\DB;


class transaksiController extends Controller
{
    public function transaksi(){
        $as = DB::table('struks')
             ->join('users', 'users.id', '=', 'struks.user_id')
             ->select(DB::raw('count(*) as user_id, sum(jumlah_harga) as uang, users.*, struks.*'))
             ->where('struks.status_pembayaran', 1)
             ->groupBy('user_id')
             ->get();
        return view('Sipadmin.transaksi.transaksi.index', ['transaksis' => $as]);
    }
    public function penjualan(){
        $penjualan = DB::table('struk_details')
            ->join('jamus', 'jamus.id', '=', 'struk_details.jamu_id')
            ->join('struks', 'struks.id', '=', 'struk_details.struk_id')
            ->where('struks.status_pembayaran', 1)
            ->select(DB::raw('count(*) as jamu_id, sum(jumlah) as total_laku, struk_details.*, jamus.*'))
            ->groupBy('jamu_id')
            ->get();
        return view('Sipadmin.transaksi.penjualan.index', ['penjualans' => $penjualan]);
    }
}
