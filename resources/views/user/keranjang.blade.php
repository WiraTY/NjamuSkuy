@extends('user.layout.master2')
@section('menuKeranjang', 'active')
@section('content')

<!-- ======= Team Section ======= -->
<br>
<br>
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Keranjang</h2>
      <p>Keranjang</p>
    </div>

    <div class="row">
        @if(session()->has('berhasil'))
            <div class="alert alert-success">
            {{ session()->get('berhasil') }}
            </div>
        @elseif(session()->has('hapus'))
            <div class="alert alert-danger">
            {{ session()->get('hapus') }}
            </div>
        @endif
        @if(!empty($total))
        <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Jamu</th>
                <th scope="col">Total Pembelian</th>
                <th scope="col">Total Harga</th>
                <th scope="col" colspan="3" width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach($jamus as $data)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td> {{ $data->nama_jamu }} </td>
                <td> {{ $data->jumlah }} </td>
                <td> {{ $data->jumlah_harga }} </td>
                <td>
                    <form action="{{ url('/keranjang/'.$data->id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger"><i class="bi bi-trash me-1"></i></button>
                    </form>
                </td>
            </tr>

            @endforeach
            <tr>
                <td colspan="3" align="right"><strong>Total Harga : </strong></td>
                <td><strong>Rp. {{ $total }}</strong></td>
                <td><a href="{{ url('/keranjangKonfirmasi') }}" class="btn btn-success"><i class="bi bi-basket"></i> Bayar</a></td>
            </tr>
        </tbody>
        </table>
        @else
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Jamu</th>
                    <th scope="col">Total Pembelian</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col" colspan="3" width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" align="center"><strong>Tidak Ada Jamu di Keranjang</strong></td>
                </tr>
            </tbody>
            </table>
        @endif
    </div>

  </div>
</section><!-- End Team Section -->

@endsection