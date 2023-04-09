@extends('user.layout.master2')
@section('menuJamu', 'active')
@section('content')

<!-- ======= Team Section ======= -->
<br>
<br>
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Artikel</h2>
      <p>Artikel jamu</p>
    </div>

    <div class="row">
      @foreach ($artikels as $data )
      <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="{{ asset('storage/'. $data->gambar_jamu) }}" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>{{ $data->judul_artikel }}</h4>
            <span>Tema : {{ $data->nama_jamu }}</span>
            <br>
            <a href="{{ url('/jamu/'.$data->id) }}"><button class="btn btn-warning" style="width: 100%;"><i class="bi bi-eye me-1"> Baca Artikel</i></button></a>
          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section><!-- End Team Section -->

@endsection