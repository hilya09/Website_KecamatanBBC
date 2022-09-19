@extends('layouts.maindash')
  @section('maindash')
  @if(session()->has('updateprofilsuccess'))
    <div class="alert alert-success col-lg-13" role="alert">
      {{ session('updateprofilsuccess') }}
    </div>
  @endif

  @if(session()->has('updateprofilfail'))
    <div class="alert alert-danger col-lg-13" role="alert">
      {{ session('updateprofilfail') }}
    </div>
  @endif
  <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assetsadmin/img/user.jpg" alt="Profile" class="rounded-circle">
              <h2>{{ auth()->user()->name }}</h2>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
          
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                </li>
              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-edit" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="/updateprofil/{{ Auth::user()->id }}" method="post">
                  @csrf
                  @method('PATCH')
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assetsadmin/img/user.jpg" alt="Profile">
                        <!-- <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div> -->
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id = "name" required value="{{ auth()->user()->name }}">
                        @error('name')
                        <div class= "invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="notelp" class="col-md-4 col-lg-3 col-form-label">No HP</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="text" name="notelp" class="form-control @error('notelp') is-invalid @enderror" id = "notelp" required value="{{ auth()->user()->notelp }}">
                        @error('notelp')
                        <div class= "invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id = "email" required value="{{ auth()->user()->email }}">
                        @error('email')
                        <div class= "invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
                </div>
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
  @endsection()