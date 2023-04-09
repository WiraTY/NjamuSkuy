@extends('Sipadmin.layoutAdmin.master')
@section('homeAdmin', 'collapsed')
@section('dataPengguna', 'collapsed')
@section('dataJamu', 'collapsed')
@section('dataKeuangan', '')
@section('dataTransaksi', 'collapsed')
@section('dataKomen', 'collapsed')
@section('dataKeuangan2', 'show')
@section('pengeluaran', 'active')

@section('content')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Keuangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Keuangan</li>
          <li class="breadcrumb-item">Pengeluaran</li>
          <li class="breadcrumb-item active">Tampil Data Pengeluaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tampil Data Pengeluaran</h5>
              <!-- Vertical Form -->
              @foreach ($pengeluarans as $data )
              <form class="row g-3" action="{{ url('pengeluaran-admins/'.$data->id) }}" method="POST">
                @csrf                
                <input type="hidden" name="_method" value="PATCH">
                <div class="col-12">
                    <label for="bentuk_pengeluaran" class="form-label">Keperluan</label>
                    <input type="text" class="form-control @error('bentuk_pengeluaran') is-invalid @enderror" id="bentuk_pengeluaran" name="bentuk_pengeluaran" placeholder="kode jamu" value="{{ $data->bentuk_pengeluaran }}" disabled>
                    @error('bentuk_pengeluaran')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                  <label for="total_pengeluaran" class="form-label">Total Pengeluaran</label>
                  <input type="number" class="form-control @error('total_pengeluaran') is-invalid @enderror" id="total_pengeluaran" name="total_pengeluaran" placeholder="total pengeluaran" value="{{ $data->total_pengeluaran }}" disabled>
                  @error('total_pengeluaran')
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