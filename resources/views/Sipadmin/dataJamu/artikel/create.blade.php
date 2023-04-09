@extends('Sipadmin.layoutAdmin.master')
@section('homeAdmin', 'collapsed')
@section('dataPengguna', 'collapsed')
@section('dataJamu', '')
@section('dataKeuangan', 'collapsed')
@section('dataTransaksi', 'collapsed')
@section('dataKomen', 'collapsed')
@section('dataJamu2', 'show')
@section('artikelJamu', 'active')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Jamu</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home-admins">Home</a></li>
          <li class="breadcrumb-item">Data Jamu</li>
          <li class="breadcrumb-item">Artikel Jamu</li>
          <li class="breadcrumb-item active">Tambah Artikel Jamu</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Artikel Jamu</h5>
              <!-- Vertical Form -->
              <form class="row g-3" action="{{ url('artikel-admins') }}" method="POST">
                @csrf                
                <div class="col-6">
                    <label for="judul_artikel" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control @error('judul_artikel') is-invalid @enderror" id="judul_artikel" name="judul_artikel" placeholder="judul artikel" value="{{ old('judul_artikel') }}">
                    @error('judul_artikel')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                  <label for="judul_artikel" class="form-label">Tema Jamu</label>
                  <select name="jamus_id" id="jamus_id" class="form-select">
                    @foreach ($jamus as $data)
                      <option value="{{ $data->id }}">{{ $data->nama_jamu }}</option>
                    @endforeach
                  </select>
              </div>
                <div class="card-body">
                  <h5 class="card-title">TinyMCE Editor</h5>
    
                  <!-- TinyMCE Editor -->
                  <textarea class="tinymce-editor" name="artikel" id="artikel">{{ old('judul_artikel') }}</textarea><!-- End TinyMCE Editor -->
                  @error('artikel')
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