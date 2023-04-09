@extends('user.layout.master2')
@section('menuProfil', 'active')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home-admins">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4"> 
        @foreach ($users as $data)
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="{{  asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
              <h2>{{ $data->nama }}</h2>
              <h6>{{ $data->email }}</h6>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>

              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8">{{ $data->nama }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">E-mail</div>
                    <div class="col-lg-9 col-md-8">{{ $data->email }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kelamin</div>
                    @if($data->kelamin == 'L')
                    <div class="col-lg-9 col-md-8">Laki-Laki</div>
                    @else
                    <div class="col-lg-9 col-md-8">Perempuan</div>
                    @endif
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8">{{ $data->tanggal_lahir }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">{{ $data->alamat }}</div>
                  </div>

                </div>
                @endforeach
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                @foreach($users as $data)
                <form class="row g-3" action="{{ url('admin-admins/'.$data->id) }}" method="POST">
                  @csrf                
                  <input type="hidden" name="_method" value="PATCH">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="{{  asset('assets/img/profile-img.jpg') }}" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="nama lengkap" value="{{ $data->nama }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{ $data->email }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="kelamin" class="col-md-4 col-lg-3 col-form-label">Kelamin</label>
                      <div class="col-sm-9">
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
                    </div>

                    <div class="row mb-3">
                      <label for="tanggal_lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                        @error('tanggal_lahir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="alamat" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat">{{ $data->alamat }}</textarea>
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary m-3">Ubah</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

              </div><!-- End Bordered Tabs -->
              @endforeach
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection