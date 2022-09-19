@extends('layouts.maindash')
  @section('maindash')
  <div class="pagetitle">
      <h1>Registrasi Pengguna</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="dashboard/registers">Register</a></li>
          <li class="breadcrumb-item active">Registrasi Pengguna</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if(session()->has('delSuccess'))
      <div class="alert alert-danger col-lg-11" role="alert">
        {{ session('delSuccess') }}
      </div>
    @endif
    @if(session()->has('editSuccess'))
      <div class="alert alert-success col-lg-11" role="alert">
        {{ session('editSuccess') }}
      </div>
    @endif
    <section class="section">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Registrasi Pengguna Baru</h5>
                @if(session()->has('addSuccess'))
                <div class="alert alert-success col-lg-13" role="alert">
                  {{ session('addSuccess') }}
                </div>
                @endif
                <!-- General Form Elements -->
                <form action ="/dashboard/registers" method="post">
                @csrf
                <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id = "name" placeholder = "Nama" autofocus required value="{{ old('name') }}">
                            @error('name')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id ="email" placeholder ="name@example.com" required value="{{ old('email') }}">
                            @error('email')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id ="password" placeholder ="password" required value="{{ old('password') }}">
                            @error('password')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="notelp" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="notelp" class="form-control @error('notelp') is-invalid @enderror" id ="notelp" placeholder ="08xxxxxxxxxx" required value="{{ old('notelp') }}">
                            @error('password')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <center><button type="submit" class="btn btn-primary">Daftar</button></center>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->

            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-stripe table-sm">
                  <thead>
                    <tr>
                      <!-- <th scope="col">ID</th> -->
                      <th scope="col">E-mail</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">No Telp</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <!-- <td>{{ $loop->iteration }}</td> -->
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->notelp}}</td>
                        <td>
                          <form action="/dashboard/registers/{{ $user->id }}" method="post" class="d-inline">
                              @method('DELETE')
                              @csrf
                              <button class="badge bg-danger border-0" onclick ="return confirm ('Yakin Anda Ingin Menghapus?')"><span class="bi bi-trash"></span> </button>
                            </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
    </section>
  @endsection()