@extends('Sipadmin.layoutAdmin.master')
@section('homeAdmin', 'collapsed')
@section('dataPengguna', '')
@section('dataJamu', 'collapsed')
@section('dataKeuangan', 'collapsed')
@section('dataTransaksi', 'collapsed')
@section('dataKomen', 'collapsed')
@section('dataPengguna2', 'show')
@section('Staff', 'active')

@section('content')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Staff</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home-admins">Home</a></li>
          <li class="breadcrumb-item">Data Pengguna</li>
          <li class="breadcrumb-item">Daftar Staff</li>
          <li class="breadcrumb-item active">Tambah Daftar Staff</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Daftar Staff</h5>
              <!-- Vertical Form -->
              @foreach ($staffs as $data)    
              <form class="row g-3" action="{{ url('staff-admins') }}" method="POST">
                @csrf                
                <div class="col-6">
                    <label for="nama_staff" class="form-label">Nama Staff</label>
                    <input type="text" class="form-control @error('nama_staff') is-invalid @enderror" id="nama_staff" name="nama_staff" placeholder="nama staff" value="{{ $data->nama_staff }}" disabled>
                    @error('nama_staff')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">
                  <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" disabled>
                  @error('tanggal_lahir')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-12">
                  <fieldset class="row mb-1">
                    <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelamin" value="L" {{ $data->kelamin =='L' ? 'checked': '' }} disabled>
                        <label class="form-check-label" for="kelamin">
                          Laki-laki
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelamin" value="P" {{ $data->kelamin =='P' ? 'checked': '' }} disabled>
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

                <div class="col-6">
                  <label for="posisi" class="form-label">Posisi Pekerjaan</label>
                  <select name="posisi" id="posisi" class="form-select" disabled>
                    <option value="Barista"
                    {{ $data->posisi=='Barista' ? 'selected': '' }} >
                    Barista
                    </option>
                    <option value="Cheff"
                    {{ $data->posisi=='Cheff' ? 'selected': '' }} >
                    Cheff
                    </option>
                    <option value="Kasir"
                    {{ $data->posisi=='Kasir' ? 'selected': '' }} >
                    Kasir
                    </option>
                    <option value="Pelayan"
                    {{ $data->posisi=='Pelayan' ? 'selected': '' }} >
                    Pelayan
                    </option>
                  </select>
                  @error('posisi')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="col-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat" disabled>{{ $data->alamat }}</textarea>
                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="text-center">
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