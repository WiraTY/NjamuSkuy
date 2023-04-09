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
          <li class="breadcrumb-item active">Daftar Jamu</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Jamu</h5>
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
                  <a href="{{ url('jamu-admins/create') }}"><button type="button" class="btn btn-primary" style="margin-right: 1%;"><i class="bi bi-plus-square me-1"></i>Tambah Data</button></a>
                </div>
              </div>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Jamu</th>
                    <th scope="col">Harga</th>
                    <th scope="col" colspan="3" width="20%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jamus as $data )
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td> {{ $data->nama_jamu }} </td>
					          <td> {{ $data->harga }} </td>
                    <td><a href="{{ url('/jamu-admins/'.$data->id) }}"><button class="btn btn-primary"><i class="bi ri-eye-line me-1"></i></button></a></td>
                    <td><a href="{{ url('/jamu-admins/'.$data->id.'/edit') }}"><button class="btn btn-warning "><i class="bi ri-edit-2-line me-1"></i></button></a></td>
                     <td>
                        <form action="{{ url('/jamu-admins/'.$data->id) }}" method="POST">
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