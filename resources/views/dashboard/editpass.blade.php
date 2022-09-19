@extends('layouts.maindash')
  @section('maindash')
  @if(session()->has('updatesuccess'))
    <div class="alert alert-success col-lg-13" role="alert">
      {{ session('updatesuccess') }}
    </div>
  @endif

  @if(session()->has('updatefail'))
    <div class="alert alert-danger col-lg-13" role="alert">
      {{ session('updatefail') }}
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
                  <button class="nav-link active " data-bs-toggle="tab" data-bs-target="#profile-change-password">Ganti Kata Sandi</button>
                </li>
              </ul>
              <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-change-password" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action="/updatepass/{{ Auth::user()->id }}" method="post">
                  @csrf
                  @method('PATCH')
                    <div class="row mb-3">
                      <label for="password_lama" class="col-md-4 col-lg-3 col-form-label">Kata Sandi Lama</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password_lama" type="password" class="form-control @error('password_lama') is-invalid @enderror" id="password_lama">
                        @error('password_lama')
                        <div class= "invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newpassword" class="col-md-4 col-lg-3 col-form-label">Kata Sandi Baru</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control @error('newpassword') is-invalid @enderror" id="newpassword">
                        @error('newpassword')
                        <div class= "invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newpassword_confirmation" class="col-md-4 col-lg-3 col-form-label">Konfirmasi Kata Sandi</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword_confirmation" type="password" class="form-control @error('newpassword_confirmation') is-invalid @enderror" id="newpassword_confirmation">
                        @error('newpassword_confirmation')
                        <div class= "invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

                
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
  @endsection()