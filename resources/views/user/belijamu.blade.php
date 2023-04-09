@extends('user.layout.master2')
@section('menuBeli', 'active')
@section('content')

<!-- ======= Team Section ======= -->
<br>
<br>
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Beli</h2>
      <p>beli jamu</p>
    </div>

    <div class="row">
      @foreach ($daftarJamus as $data )
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="{{ asset('storage/'. $data->gambar_jamu) }}" style="" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>{{ $data->nama_jamu }}</h4>
            <span>Rp {{ $data->harga }}</span>
            <br>
            <a href="{{ url('/belijamu/'.$data->id.'/beli') }}"><button class="btn btn-warning" style="width: 100%;"><i class="bi bi-basket me-1"> Pesan</i></button></a>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section><!-- End Team Section -->

@endsection