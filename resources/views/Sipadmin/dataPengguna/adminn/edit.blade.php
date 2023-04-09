@extends('Sipadmin.layoutAdmin.master')
@section('homeAdmin', 'collapsed')
@section('dataPengguna', '')
@section('dataJamu', 'collapsed')
@section('dataKeuangan', 'collapsed')
@section('dataTransaksi', 'collapsed')
@section('dataKomen', 'collapsed')
@section('dataPengguna2', 'show')
@section('Admin', 'active')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home-admins">Home</a></li>
          <li class="breadcrumb-item">Data Pengguna</li>
          <li class="breadcrumb-item">Daftar Admin</li>
          <li class="breadcrumb-item active">Tambah Daftar Admin</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Daftar Admin</h5>
              <!-- Vertical Form -->
              @foreach ($admins as $data)
              <form class="row g-3" action="{{ url('admin-admins/'.$data->id) }}" method="POST">
                @csrf                
                <input type="hidden" name="_method" value="PATCH">                
                <div class="col-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="nama lengkap" value="{{ $data->nama }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{ $data->email }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password" value="{{ $data->password }}">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                  <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                  @error('tanggal_lahir')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <fieldset class="row mb-1">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelamin" value="L" {{ $data->kelamin=='L' ? 'checked': '' }}>
                        <label class="form-check-label" for="kelamin">
                          Laki-laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelamin" value="P" {{ $data->kelamin =='P' ? 'checked': '' }}>
                        <label class="form-check-label" for="kelamin">
                          Perempuan
                        </label>
                        @error('kelamin')
                          <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </fieldset>
                </div>
                <div class="col-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat">{{ $data->alamat }}</textarea>
                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary m-3">Submit</button>
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