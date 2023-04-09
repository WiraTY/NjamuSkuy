@extends('user.layout.master2')
@section('menuKontak', 'active')
@section('content')

<!-- ======= Contact Section ======= -->
<div class="row mt-5"></div>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d479.72307906882156!2d112.74725724656547!3d-7.773199027017262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d31c54f33257%3A0x328fd26f140f118c!2sWarung%20Nasi%20Mbak%20Tris!5e0!3m2!1sid!2sbg!4v1633854159626!5m2!1sid!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Remaja Martopuro, Kec. Purwosari, Kab. Pasuruan, Prov. Jawa Timur</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Njamuskuy@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 8564801235</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="/komen" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama_pengomen" class="form-control @error('nama_pengomen') is-invalid @enderror" id="nama_pengomen" placeholder="Nama Lengkap" value="{{Session::get('nama')}}" required>
                  @error('nama_pengomen')
                        <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" value="{{Session::get('email')}}" required>
                  @error('email')
                        <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="Subject" required>
              </div>
                  @error('subject')
                        <div class="text-danger">{{ $message }}</div>
                  @enderror
              <div class="form-group mt-3">
                <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" rows="5" placeholder="Pesan" required></textarea>
                @error('pesan')
                        <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="php-email-form my-3">
                @if(session()->has('tambah'))
                <div class="sent-message">Your message has been sent. Thank you!</div>
                @endif
              </div>
              <div class="text-center"><button type="submit" style="background: #ffc451;border: 0;padding: 10px 24px;color: #151515;transition: 0.4s;border-radius: 4px;">Kirim Pesan Masukan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection