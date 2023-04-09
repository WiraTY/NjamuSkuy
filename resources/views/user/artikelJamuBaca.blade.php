@extends('user.layout.master2')
@section('menuJamu', 'active')
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        @foreach ($artikels as $data )
        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel Jamu</h2>
          <ol>
            <li><a href="/jamu">Jamu</a></li>
            <li>Artikel {{ $data->deskripsi }}</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('storage/'. $data->gambar_jamu) }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="portfolio-info">
              <h3>Nama Jamu : {{ $data->nama_jamu }}</h3>
              <ul>
                <li><strong>Deskripsi : </strong>{{ $data->deskripsi }}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{ $data->judul_artikel}}</h2>
              {{ strip_tags($data->artikel) }}
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
    @endforeach
  </main><!-- End #main -->
  @endsection