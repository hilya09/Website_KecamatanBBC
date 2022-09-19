@extends('layouts.maindash')
  @section('maindash')
  <div class="pagetitle">
      <h1>Edit Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/adddesa">Desa</a></li>
          <li class="breadcrumb-item active">Edit Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Edit Desa Kecamatan Babakancikao</h5>
                <!-- General Form Elements -->
                <form action ="/updatedesa/{{ $desa->id }}" method="post">
                @csrf
                    <div class="row mb-3">
                        <label for="kodewilayah" class="col-sm-2 col-form-label">Kode Wilayah</label>
                        <div class="col-sm-10">
                        <input type="text" name="kodewilayah" class="form-control @error('kodewilayah') is-invalid @enderror" autofocus required value="{{ old('kodewilayah', $desa->kodewilayah) }}">
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
                        <input type="text" name="namadesa" class="form-control @error('namadesa') is-invalid @enderror" id = "namadesa" required value="{{ old('namadesa', $desa->namadesa) }}">
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
                        <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" id = "url" required value="{{ old('url', $desa->url) }}">
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
                        <input type="text" name="luaswil" class="form-control @error('luaswil') is-invalid @enderror" id = "luaswil" required value="{{ old('luaswil', $desa->luaswil) }}">
                            @error('luaswil')
                              <div class= "invalid-feedback">
                                {{ $message }}
                              </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <center><button type="submit" class="btn btn-primary">Perbarui</button></center>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
    </section>
  @endsection()