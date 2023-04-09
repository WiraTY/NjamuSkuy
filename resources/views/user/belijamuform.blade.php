@extends('user.layout.master2')
@section('menuBeli', 'active')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Form Pembelian</h2>
          <ol>
            <li><a href="/belijamu">Beli Jamu</a></li>
            <li>Form Pembelian Jamu</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container" data-aos="fade-up">

    <div class="row">
        @foreach ($jamus as $data )
        <form class="row g-3" action="{{ url('/belijamu') }}/{{ $data->id }}" method="POST">
          @csrf                
          <div class="col-6">
            <label for="nama_jamu" class="form-label">Nama Jamu</label>
            <input type="text" class="form-control @error('nama_jamu') is-invalid @enderror" id="nama_jamu" name="nama_jamu" placeholder="nama jamu" value="{{ $data->nama_jamu }}" disabled>
            @error('nama_jamu')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-6">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="harga" value="{{ $data->harga }}" disabled>
            @error('harga')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-12">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="deskripsi" disabled>{{ $data->deskripsi }}</textarea>
            @error('deskripsi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-12">
            <label for="jumlah_pembelian" class="form-label">Jumlah Pembelian</label>
            <input type="number" class="form-control @error('jumlah_pembelian') is-invalid @enderror" id="jumlah_pembelian" name="jumlah_pembelian" placeholder="jumlah pembelian" value="">
            @error('jumlah_pembelian')
                <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="text-center">
              <button type="submit" class="btn btn-primary">Masukan Keranjang</button>
              <button type="reset" class="btn btn-secondary" onclick="location.href='{{ URL::previous() }}';">Kembali</button>
          </div>
        </form><!-- Vertical Form -->
        @endforeach
    </div>

  </div>
</section><!-- End Team Section -->

@endsection