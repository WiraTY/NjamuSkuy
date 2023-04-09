@extends('user.layout.master')
@section('menuHome', 'active')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>The Power of Ngombe Jamu<span>.</span></h1>
          <h2>Tak termakan oleh waktu, jamu tetap suplemen tradisional nomer 1</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Beli Jamu</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Daftar Jamu</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Manfaat Jamu</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="gambar/dapur.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Njamu Skuy</h3>
            <p class="fst-italic">
              Sebuah website berbasis jual beli dengan sistem pembelian secara online dan pengiriman melalui jasa antar online.
            </p>
            <p class="fst-italic">
              Kelebihan Njamu Skuy :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Tampilan friendly dengan user, mudah diakses dan tidak berat dipakai.</li>
              <li><i class="ri-check-double-line"></i> Pembelian dan pengiriman dilakukan secara online. </li>
              <li><i class="ri-check-double-line"></i> Pembayaran dapat menggunakan Bank Transfer atau E-Money yang telah bermitra dengan kami sebelumnya.</li>
            </ul>
            <p>
              Njamu Skuy telah beroprasi lebih dari 5 tahun. Njamu Skuy selalu memegang motto yang sudah ada sejak berdir yaitu, "Kami melayani dengan senang hati, membuat sakit menjadi pergi". 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/gambar/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/gambar/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/gambar/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/gambar/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/gambar/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/gambar/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/gambar/client-7.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Visi & Misi</h3>
          <p> Melayani dengan ikhlas sepenuh hati tanpa mengeluh dengan berbagai sikap pelanggan. Niat Baik akan dibalas kebaikan.</p>
          <a class="cta-btn" href="/home">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Manis</li>
              <li data-filter=".filter-card">Pahit</li>
              <li data-filter=".filter-web">Asam</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/gambar/sinom.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sinom</h4>
                <p>Jamu Manis</p>
                <div class="portfolio-links">
                  <a href="/gambar/sinom.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Jamu Sinom"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/imgg/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asam 3</h4>
                <p>Asam</p>
                <div class="portfolio-links">
                  <a href="assets/imgg/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="/gambar/beraskencur.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Beras Kencur</h4>
                <p>Jamu Manis Pedas</p>
                <div class="portfolio-links">
                  <a href="/gambar/beraskencur.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Jamu Beras Kencur"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="/gambar/sambiloto.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sambiloto</h4>
                <p>Jamu Sambiloto</p>
                <div class="portfolio-links">
                  <a href="/gambar/sambiloto.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Jamu Sambiloto"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="/gambar/kunciasam.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kunyit Asam</h4>
                <p>Jamu Kunyit Asam</p>
                <div class="portfolio-links">
                  <a href="/gambar/kunciasam.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Jamu Kunyit Asam"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/imgg/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Manis 3</h4>
                <p>Manis</p>
                <div class="portfolio-links">
                  <a href="assets/imgg/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/imgg/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pahit 1</h4>
                <p>Pahit</p>
                <div class="portfolio-links">
                  <a href="assets/imgg/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/imgg/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pahit 3</h4>
                <p>Pahit</p>
                <div class="portfolio-links">
                  <a href="assets/imgg/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/imgg/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asam 3</h4>
                <p>Asam</p>
                <div class="portfolio-links">
                  <a href="assets/imgg/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Apa saja yang sudah kami lewati ?</h3>
              <p>
                Njamu Skuy telah melewati banyak hal selama 5 tahun terakhir. Banyak pencapaian yang telah didapatkan selama ini. Adapun pencapaian yang diperoleh sebagai berikut :
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="25232" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Total Melayani</strong> pelanggan selama 5 tahun terakhir</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="203" data-purecounter-duration="2" class="purecounter"></span>
                    <p><strong>Total Cabang</strong> yang telah kami bangun dan tersebar di seluruh Indonesia </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="807" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Total Pegawai</strong> yang aktif bekerja di seluruh cabang kami</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="4" class="purecounter"></span>
                    <p><strong>Total Penghargaan</strong> yang kami peroleh dari pemerintahan </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/imgg/testimonials/1.jpg" class="testimonial-img" alt="">
                <h3>Nadiem Makarin</h3>
                <h4>Mentri & Pengusaha</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Minuman disini tidak mengecewakan, saya tidak kecewa, minumlah kawan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/imgg/testimonials/2.jpg" class="testimonial-img" alt="">
                <h3>Fatin Shidqia Lubis</h3>
                <h4>Artis & Pro Gamer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya dulu batuk, terus minum jamu disini langsung sembuh.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/imgg/testimonials/3.jpg" class="testimonial-img" alt="">
                <h3>Khofifah Indah Prawansa</h3>
                <h4>Gubernur Jawa Timur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Jamunya enak dan menyehatkan. Lanjutkan agar banyak ditiru oleh UMKM lain nya.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>pengurus perusahaan</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/imgg/team/11.jpeg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/dinanti.wahyuningtias.3"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Danti Wahyuningtias</h4>
                <span>Senior Barista Cabang Utama</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/imgg/team/12.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Daniel Diharja</h4>
                <span>Manajer Cabang Utama</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/imgg/team/13.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Anna Yamakichi</h4>
                <span>Direktur Keuangan</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/imgg/team/14.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.instagram.com/lusia.antik/"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>John Raharjo</h4>
                <span>Direktur Utama</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->
  @endsection