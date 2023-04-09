@extends('Sipadmin.layoutAdmin.master')
@section('homeAdmin', 'collapsed')
@section('dataPengguna', 'collapsed')
@section('dataJamu', '')
@section('dataKeuangan', 'collapsed')
@section('dataTransaksi', 'collapsed')
@section('dataKomen', 'collapsed')
@section('dataJamu2', 'show')
@section('daftarJamu', 'active')

@section('content')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Jamu</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data Jamu</li>
          <li class="breadcrumb-item">Daftar Jamu</li>
          <li class="breadcrumb-item active">Tambah Daftar Jamu</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Daftar Jamu</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="{{ url('jamu-admins') }}" method="POST" enctype="multipart/form-data">
                @csrf                
                <div class="col-6">
                  <label for="nama_jamu" class="form-label">Nama Jamu</label>
                  <input type="text" class="form-control @error('nama_jamu') is-invalid @enderror" id="nama_jamu" name="nama_jamu" placeholder="nama jamu" value="{{ old('nama_jamu') }}">
                  @error('nama_jamu')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-6">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="harga" value="{{ old('harga') }}">
                  @error('harga')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>


                <div class="col-12">
                  <label for="gambar_jamu" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="gambar_jamu" name="gambar_jamu" onchange="previewImage()">
                  </div>
                  @error('gambar_jamu')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>


                <div class="col-12">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <textarea name="deskripsi" id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="deskripsi">{{ old('deskripsi') }}</textarea>
                  @error('deskripsi')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>


                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary" onclick="location.href='{{ URL::previous() }}';">Kembali</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection