@extends('layouts.maindash')
  @section('maindash')
  <div class="pagetitle">
      <h1>Tambah Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adddesa">Desa</a></li>
          <li class="breadcrumb-item active">Tambah Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if(session()->has('delSuccess'))
      <div class="alert alert-danger col-lg-11" role="alert">
        {{ session('delSuccess') }}
      </div>
    @endif
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-11" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <section class="section">
        <div class="col-lg-11">
            <div class="card tab-content pt-2">
              <div class="tab-pane fade show active tambah desa" id="tambah-desa">
                <div class="card-body">
                <h5 class="card-title">Tambah Desa Kecamatan Babakancikao</h5>
                @if(session()->has('addSuccess'))
                <div class="alert alert-success col-lg-13" role="alert">
                  {{ session('addSuccess') }}
                </div>
                @endif
                <!-- General Form Elements -->
                <form action ="/adddesa" method="post">
                 @csrf
                    <div class="row mb-3">
                        <label for="kodewilayah" class="col-sm-2 col-form-label">Kode Wilayah</label>
                        <div class="col-sm-10">
                        <input type="text" name="kodewilayah" class="form-control @error('kodewilayah') is-invalid @enderror" id = "kodewilayah" autofocus required value="{{ old('kodewilayah') }}">
                            @error('kodewilayah')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="namadesa" class="col-sm-2 col-form-label">Nama Desa</label>
                        <div class="col-sm-10">
                        <input type="text" name="namadesa" class="form-control @error('namadesa') is-invalid @enderror" id = "namadesa" required value="{{ old('namadesa') }}">
                            @error('namadesa')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="url" class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-10">
                        <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id = "url" required value="{{ old('url') }}">
                            @error('url')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="luaswil" class="col-sm-2 col-form-label">Luas Wilayah (Km<sup>2</sup>) </label>
                        <div class="col-sm-10">
                        <input type="text" name="luaswil" class="form-control @error('luaswil') is-invalid @enderror" id = "luaswil" required value="{{ old('luaswil') }}">
                            @error('luaswil')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <center><button type="submit" class="btn btn-primary">Unggah</button></center>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->

                </div>
              </div>
              <!-- <div class="tab-pane fade edit desa" id="edit-desa">
                <div class="card-body">
                <h5 class="card-title">Edit Desa Kecamatan Babakancikao</h5>
                @if(session()->has('addSuccess'))
                <div class="alert alert-success col-lg-13" role="alert">
                  {{ session('addSuccess') }}
                </div>
                @endif
                General Form Elements -->
                <!-- <form action ="/adddesa" method="post">
                 @csrf
                    <div class="row mb-3">
                        <label for="kodewilayah" class="col-sm-2 col-form-label">Kode Wilayah</label>
                        <div class="col-sm-10">
                        <input type="text" name="kodewilayah" class="form-control @error('kodewilayah') is-invalid @enderror" id = "kodewilayah" autofocus required value="{{ old('kodewilayah') }}">
                            @error('kodewilayah')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="namadesa" class="col-sm-2 col-form-label">Nama Desa</label>
                        <div class="col-sm-10">
                        <input type="text" name="namadesa" class="form-control @error('namadesa') is-invalid @enderror" id = "namadesa" required value="{{ old('namadesa') }}">
                            @error('namadesa')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="url" class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-10">
                        <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id = "url" required value="{{ old('url') }}">
                            @error('url')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="luaswil" class="col-sm-2 col-form-label">Luas Wilayah (Km<sup>2</sup>) </label>
                        <div class="col-sm-10">
                        <input type="text" name="luaswil" class="form-control @error('luaswil') is-invalid @enderror" id = "luaswil" required value="{{ old('luaswil') }}">
                            @error('luaswil')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <center><button type="submit" class="btn btn-primary">Unggah</button></center>
                        </div>
                    </div>
                </form> End General Form Elements -->

                </div>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-stripe table-sm">
                    <thead>
                      <tr>
                        <th scope="col">Kode Wilayah</th>
                        <th scope="col">Nama Desa</th>
                        <th scope="col">Website</th>
                        <th scope="col">Luas Wilayah</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($desas as $desa)
                        <tr>
                          <!-- <td>{{ $loop->iteration }}</td> -->
                          <td>{{ $desa->kodewilayah }}</td>
                          <td>{{ $desa->namadesa}}</td>
                          <td>{{ $desa->url}}</td>
                          <td>{{ $desa->luaswil}}</td>
                          <td>
                            <a href="/editdesa/{{ $desa->id }}" class="badge bg-warning"><span class="bi bi-pencil-square"></span></a>
                            
                            <form action="/adddesa/{{ $desa->id }}" method="post" class="d-inline">
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
