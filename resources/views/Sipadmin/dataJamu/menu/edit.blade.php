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
          <li class="breadcrumb-item active">Edit Daftar Jamu</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Daftar Jamu</h5>
              <!-- Vertical Form -->
              @foreach ($jamus as $data )
              <form class="row g-3" action="{{ url('jamu-admins/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf                
                <input type="hidden" name="_method" value="PATCH">
                <div class="col-6">
                  <label for="nama_jamu" class="form-label">Nama Jamu</label>
                  <input type="text" class="form-control @error('nama_jamu') is-invalid @enderror" id="nama_jamu" name="nama_jamu" placeholder="nama jamu" value="{{ $data->nama_jamu }}">
                  @error('nama_jamu')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-6">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="harga" value="{{ $data->harga }}">
                  @error('harga')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>


                <div class="col-12">
                  <label for="nama_jamu" class="form-label">Gambar Jamu</label>
                  @if ($data->gambar_jamu)
                  <div class="col-xl-6"> 
                    <div class="card" style="max-width: 250px; overflow:hidden;">
                      <img src="{{  asset('storage/'. $data->gambar_jamu) }}" alt="Profile" class="rounded-square">
                    </div>
                  @else
                  <div class="col-xl-6"> 
                    <div class="card">
                      <div class="card" style="max-width: 250px; overflow:hidden;">
                       <img src="{{  asset('assets/img/kosong.jpg') }}" alt="Profile" class="rounded-square">
                     </div>
                  </div>  
                  @endif
                  <input class="form-control" type="file" id="gambar_jamu" name="gambar_jamu">
                  @error('gambar_jamu')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>


                <div class="col-12 mt-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <textarea name="deskripsi" id="deskripsi" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="deskripsi">{{ $data->deskripsi }}</textarea>
                  @error('deskripsi')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary" onclick="location.href='{{ URL::previous() }}';">Kembali</button>
                </div>
              </form><!-- Vertical Form -->
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  
  @endsection