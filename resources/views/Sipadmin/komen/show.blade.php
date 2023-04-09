@extends('Sipadmin.layoutAdmin.master')
@section('homeAdmin', 'collapsed')
@section('dataPengguna', 'collapsed')
@section('dataJamu', 'collapsed')
@section('dataKeuangan', 'collapsed')
@section('dataTransaksi', 'collapsed')
@section('dataKomen', '')
@section('dataKomen2', 'show')
@section('komen', 'active')

@section('content')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Komen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Komen</li>
          <li class="breadcrumb-item">Data Komen</li>
          <li class="breadcrumb-item active">Tampilkan Data Komen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tampilkan Data Komen</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="" method="POST">
                @foreach ($komens as $data )
                @csrf                
                <div class="col-6">
                    <label for="kode_jamu" class="form-label">Nama Pengomen</label>
                    <input type="text" class="form-control @error('kode_jamu') is-invalid @enderror" id="kode_jamu" name="kode_jamu" placeholder="kode jamu" value="{{ $data->nama_pengomen }}" disabled>
                    @error('kode_jamu')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                  <label for="nama_jamu" class="form-label">Email</label>
                  <input type="text" class="form-control @error('nama_jamu') is-invalid @enderror" id="nama_jamu" name="nama_jamu" placeholder="nama jamu" value="{{ $data->email }}" disabled>
                  @error('nama_jamu')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <label for="harga" class="form-label">Judul</label>
                  <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="harga" value="{{ $data->subject }}" disabled>
                  @error('subject')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <textarea name="deskripsi" id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="deskripsi" disabled>{{ $data->pesan }}</textarea>
                  @error('deskripsi')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="reset" class="btn btn-secondary" onclick="location.href='{{ URL::previous() }}';">Kembali</button>
                </div>
                @endforeach
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  
  @endsection