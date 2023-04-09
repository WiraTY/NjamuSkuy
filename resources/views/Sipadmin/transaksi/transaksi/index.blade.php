@extends('Sipadmin.layoutAdmin.master')
@section('homeAdmin', 'collapsed')
@section('dataPengguna', 'collapsed')
@section('dataJamu', 'collapsed')
@section('dataKeuangan', 'collapsed')
@section('dataTransaksi', '')
@section('dataKomen', 'collapsed')
@section('dataTransaksi2', 'show')
@section('transaksi', 'active')

@section('content')


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Transaksi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home-admins">Home</a></li>
          <li class="breadcrumb-item">Transaksi</li>
          <li class="breadcrumb-item active">Data Transaksi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Transaksi</h5>
              @if(session()->has('tambah'))
                  <div class="alert alert-success">
                    {{ session()->get('tambah') }}
                  </div>
              @elseif(session()->has('edit'))
                  <div class="alert alert-warning">
                    {{ session()->get('edit') }}
                  </div>
              @elseif(session()->has('hapus'))
                  <div class="alert alert-danger">
                    {{ session()->get('hapus') }}
                  </div>
              @endif
              <div style="display:table; width: 100%;">
                <div style="text-align: right; display:table-cell;">
                  <a href="{{ url('pengeluaran-admins/create') }}"><button type="button" class="btn btn-primary" style="margin-right: 1%;"><i class="bi bi-plus-square me-1"></i>Tambah Data</button></a>
                </div>
              </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Total Pembelian</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($transaksis as $data )
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td> {{ $data->nama }} </td>
                    <td> {{ $data->uang }} </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  
  @endsection