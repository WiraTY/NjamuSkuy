<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function sejarah(){
        $histori = "Awal mula usaha kami dimulai dari usaha jamu di kedai kecil, kami menawarkan produk kami dengan menjualnya di kedai dan juga dengan berkeliling ke daerah sekitar, kami juga melayani pengunjung yang ingin mengonsumsi jamu di kedai kami. Saat itu kedai kami masih sangat kecil dan hanya mampu menampung kurang dari 10 pelanggan. Walaupun demikian, peminat jamu kami cukup ramai, karena memang tujuan dari awal kami untuk memulai usaha jamu adalah membuat jamu dengan sepenuh hati, untuk membuat sakit menjadi pergi, sesuai dengan motto kami yaitu ''Kami melayani dengan senang hati, membuat sakit menjadi perg'', sehingga banyak peminat dari jamu kami walaupun hanya memiliki kedai yang kecil. Dari banyaknya pelanggan dan feedback yang positif dari pelanggan lah yang membuat kami mulai mengembangkan usaha kami supaya produk jamu kami bisa dinikmati oleh lebih banyak pelanggan, walaupun pelenggan yang jauh sekalipun.
    Salah satu yang kami kembangkan adalah dengan membuka pembelian dan pengiriman yang dilakukan secara online dan juga mengembangkan kedai kami supaya bisa menampung lebih banyak pelanggan dan menghasilkan produk yang lebih banyak dan lebih berkualitas. Pengembangan yang kami lakukan sangat berpengaruh tergadap berkembangnya usaha Njamu Skuy ini. Sehingga kami bisa mencapai beberapa pencapaian seperti berhasil membuka 203 cabang dan sudah melayani 25.232 dalam kurun waktu 5 tahun terakhir ini.";
       
         return view('sejarah')->with('sejarah', $histori);
    }
}
