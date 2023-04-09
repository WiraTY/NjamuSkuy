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
          <li class="breadcrumb-item active">Pengeluaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pengeluaran</h5>
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
                    <th scope="col">Keperluan</th>
                    <th scope="col">Total Pengeluaran</th>
                    <th scope="col">Tanggal Pengeluaran</th>
                    <th scope="col" colspan="3" width="20%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pengeluarans as $data )
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td> {{ $data->bentuk_pengeluaran }} </td>
                    <td> {{ $data->total_pengeluaran }} </td>
					          <td> {{ $data->created_at }} </td>
                    <td><a href="{{ url('/pengeluaran-admins/'.$data->id) }}"><button class="btn btn-primary"><i class="bi ri-eye-line me-1"></i></button></a></td>
                    <td><a href="{{ url('/pengeluaran-admins/'.$data->id.'/edit') }}"><button class="btn btn-warning "><i class="bi ri-edit-2-line me-1"></i></button></a></td>
                     <td>
                        <form action="{{ url('/pengeluaran-admins/'.$data->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger"><i class="bi bi-trash me-1"></i></button>
                        </form>
                    </td>
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