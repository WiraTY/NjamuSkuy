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
          <li class="breadcrumb-item active">Data Komen</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Komen</h5>
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
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subjek Pesan</th>
                    <th scope="col" colspan="2" width="20%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($komens as $data )
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td> {{ $data->nama_pengomen }} </td>
                    <td> {{ $data->email }} </td>
                    <td> {{ $data->subject }} </td>
                    <td><a href="{{ url('/komen-admins/'.$data->id) }}"><button class="btn btn-primary"><i class="bi ri-eye-line me-1"></i></button></a></td>
                    <td>
                        <form action="{{ url('/komen-admins/'.$data->id) }}" method="POST">
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