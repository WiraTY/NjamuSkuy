@extends('layout.master2')
@section('menu', 'active')
@section('content')
 <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="gambar/tok1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="gambar/tok2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="gambar/tok3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="portfolio-info">
              <h3>Njamu Skuy</h3>
              <ul>
                <li><strong>Pendiri</strong>: Muhamad Lutfi Khakim</li>
                <li><strong>Tahun Berdiri</strong>: 18 September 2016</li>
                <li><strong>Website</strong>: <a href="http://njamukuy.test/">www.NjamuSkut.test</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Sejarah Berdiri</h2>
              <p>
                {{ $sejarah }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
@endsection